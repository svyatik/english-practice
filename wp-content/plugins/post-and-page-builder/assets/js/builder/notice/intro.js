var $ = window.jQuery,
	BG = BOLDGRID.EDITOR;

import templateHtml from '../../../../includes/template/intro.html';
import { Base as Notice } from './base';
import { ColorPaletteSelection } from '@boldgrid/controls';

export class Intro extends Notice {
	constructor() {
		super();

		this.name = 'intro';

		this.panel = {
			title: 'Post and Page Builder - Setup',
			height: '285px',
			width: '650px',
			disabledClose: true,
			autoCenter: true
		};
	}

	/**
	 * Run the initialization process.
	 *
	 * @since 1.6
	 */
	init() {
		if ( BoldgridEditor.display_intro ) {
			this.selection = new ColorPaletteSelection();
			this.$body = $( 'body' );
			this.settings = this.getDefaults();

			this.templateMarkup = _.template( templateHtml )();
			this.$panelHtml = $( this.templateMarkup );
			this.$templateInputs = this.$panelHtml.find( 'input[name="template"]' );

			this.openPanel();
			this._setupNav();
			this._addPanelSettings( 'welcome' );
			this.bindDismissButton();
			this._setupStepActions();
		}
	}

	getDefaults() {
		return {
			template: {
				choice: 'fullwidth'
			},
			palette: {
				choice: null
			}
		};
	}

	/**
	 * Open the panel with default setting.
	 *
	 * @since 1.6
	 */
	openPanel() {
		BG.Panel.currentControl = this;
		this.$body.addClass( 'bg-editor-intro' );
		BG.Panel.setDimensions( this.panel.width, this.panel.height );
		BG.Panel.setTitle( this.panel.title );
		BG.Panel.setContent( this.$panelHtml );
		BG.Panel.centerPanel();
		BG.Panel.$element.show();
	}

	dismissPanel() {
		super.dismissPanel();

		this.settings.template.choice = this.$templateInputs.filter( ':checked' ).val();

		// If the user enters the first time setup on a page, update the meta box.
		if (
			'auto-draft' === BoldgridEditor.post.post_status &&
			'default' !== this.settings.template.choice
		) {
			let val = 'template/page/' + this.settings.template.choice + '.php';
			$( '#page_template' )
				.val( val )
				.change();
		}

		// Make ajax call to save the given settings.
		this.saveSettings();
	}

	saveSettings() {
		$.ajax( {
			type: 'post',
			url: ajaxurl,
			dataType: 'json',
			timeout: 10000,
			data: {
				action: 'boldgrid_editor_setup',

				// eslint-disable-next-line
				boldgrid_editor_setup: BoldgridEditor.setupNonce,
				settings: this.settings
			}
		} );
	}

	/**
	 * When the color palette step becomes active.
	 *
	 * @since 1.6
	 */
	_setupStepActions() {
		this.$panelHtml.on( 'boldgrid-editor-choose-color-palette', () => {
			let $control;

			$control = this.selection.create();
			this.$panelHtml.find( '.choose-palette' ).html( $control );

			$control.one( 'palette-selection', () => {
				this.$currentStep.find( '[data-action-step]' ).removeAttr( 'disabled' );
			} );

			$control.on( 'palette-selection', () => {
				this.settings.palette.choice = this.selection.getSelectedPalette();
			} );
		} );
	}

	/**
	 * Set the panel settings.
	 *
	 * @since 1.6
	 *
	 * @param {string} step Step from the panel.
	 */
	_addPanelSettings( step ) {
		this.$currentStep = this.$panelHtml.find( '[data-step="' + step + '"]' );

		// Update Panel Settings.
		BG.Panel.setTitle( this.$currentStep.data( 'panel-title' ) );
		BG.Panel.setInfo( this.$currentStep.data( 'panel-info' ) );
		BG.Panel.setDimensions(
			this.$currentStep.data( 'panel-width' ) || this.panel.width,
			this.$currentStep.data( 'panel-height' ) || this.panel.height
		);
	}

	/**
	 * Setup the handling of steps.
	 *
	 * @since 1.6
	 */
	_setupNav() {
		this.$panelHtml.find( '[data-action-step]' ).on( 'click', e => {
			let $this = $( e.target ),
				step = $this.data( 'action-step' );

			this._addPanelSettings( step );
			this.$panelHtml.trigger( 'boldgrid-editor-' + step );
			this.$panelHtml.find( '.step' ).removeClass( 'active' );

			BG.Panel.centerPanel();

			this.$currentStep.addClass( 'active' );
		} );
	}
}

export { Intro as default };
