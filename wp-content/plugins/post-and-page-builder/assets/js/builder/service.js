var BG = window.BOLDGRID.EDITOR;

import EditorWidth from './tinymce/width';
import StyleUpdater from './style/updater';
import LoadingGraphic from './tinymce/loading';
import { Palette } from './controls/color/palette';
import { Intro } from './notice/intro';
import { Save as LibrarySave } from './library/save';
import { Advanced } from './controls/element/advanced';
import { Lead as GridblockLead } from './gridblock/lead';
import ContentPopover from './popover/content';
import ColumnPopover from './popover/column';
import RowPopover from './popover/row';
import SectionPopover from './popover/section';
import { Navigation as CustomizeNavigation } from './customize/navigation';
import { View } from './view';
import { ConnectKey } from './connect-key/prompt';

export class Service {
	init() {

		// Services.
		this.editorWidth = null;
		this.styleUpdater = null;

		this._onWindowLoad();
		this._onEditorLoad();
		this._onEditorPreload();

		return this;
	}

	/**
	 * Services to load when the window loads.
	 *
	 * @since 1.6
	 */
	_onWindowLoad() {
		this.editorWidth = new EditorWidth().init();
		this.loading = new LoadingGraphic().init();
		new View().init();
	}

	/**
	 * Services to load when the editor loads.
	 *
	 * @since 1.6
	 */
	_onEditorLoad() {
		BOLDGRID.EDITOR.$window.on( 'boldgrid_editor_loaded', () => {
			this.styleUpdater = new StyleUpdater( BOLDGRID.EDITOR.Controls.$container ).init();

			this.popover = {};
			this.popover.selection = false;

			this.popover.content = new ContentPopover().init();
			this.popover.column = new ColumnPopover().init();
			this.popover.row = new RowPopover().init();
			this.popover.section = new SectionPopover().init();

			this.connectKey = new ConnectKey();

			BOLDGRID.EDITOR.CONTROLS.Section.init( BOLDGRID.EDITOR.Controls.$container );

			BG.GRIDBLOCK.View.getWebfonts();
		} );
	}

	/**
	 * Before controls are loaded.
	 *
	 * @since 1.6
	 */
	_onEditorPreload() {
		BOLDGRID.EDITOR.$window.on( 'boldgrid_editor_preload', () => {
			this.colorPalette = new Palette().init();

			// Init Color Control.
			BG.Controls.colorControl = BG.CONTROLS.Color.init();

			new Intro().init();
			new LibrarySave().init();
			new GridblockLead().init();
			new Advanced().init();

			BG.Service.customize = BG.Service.customize || {};
			BG.Service.customize.navigation = new CustomizeNavigation().init();
		} );
	}
}

BOLDGRID.EDITOR.Service = new Service().init();
