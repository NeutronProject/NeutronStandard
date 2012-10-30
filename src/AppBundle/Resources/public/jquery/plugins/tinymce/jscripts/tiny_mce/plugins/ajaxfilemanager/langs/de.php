<?php
	/**
	 * language pack
	 * @author Logan Cai (cailongqun [at] yahoo [dot] com [dot] cn)
	 * @link www.phpletter.com
	 * @since 22/April/2007
	 *
	 */
	define('DATE_TIME_FORMAT', 'Y/m/d H:i:s');
	//Common
	//Menu
	
	
	
	
	define('MENU_SELECT', 'Wählen Sie');
	define('MENU_DOWNLOAD', 'Herunterladen');
	define('MENU_PREVIEW', 'Vorschau');
	define('MENU_RENAME', 'Umbenannt');
	define('MENU_EDIT', 'Еdid');
	define('MENU_CUT', 'Shear');
	define('MENU_COPY', 'Kopieren');
	define('MENU_DELETE', 'Entfernen');
	define('MENU_PLAY', 'Spielen');
	define('MENU_PASTE', 'Paste');
	
	//Label
		//Top Action
		define('LBL_ACTION_REFRESH', 'Aktualisieren');
		define('LBL_ACTION_DELETE', 'Entfernen');
		define('LBL_ACTION_CUT', 'Shear');
		define('LBL_ACTION_COPY', 'Kopieren');
		define('LBL_ACTION_PASTE', 'Paste');
		define('LBL_ACTION_CLOSE', 'Schließen');
		define('LBL_ACTION_SELECT_ALL', 'Anzeige aller');
		//File Listing
	define('LBL_NAME', 'Dateiname');
	define('LBL_SIZE', 'Größe');
	define('LBL_MODIFIED', 'Die Veränderung war');
		//File Information
	define('LBL_FILE_INFO', 'File Information:');
	define('LBL_FILE_NAME', 'Dateiname:');	
	define('LBL_FILE_CREATED', 'Gegründet:');
	define('LBL_FILE_MODIFIED', 'Die Veränderung <br/ war:');
	define('LBL_FILE_SIZE', 'Größe:');
	define('LBL_FILE_TYPE', 'Typ:');
	define('LBL_FILE_WRITABLE', 'Beschreibbar?');
	define('LBL_FILE_READABLE', 'Readable?');
		//Folder Information
	define('LBL_FOLDER_INFO', 'Ordner <br> Information');
	define('LBL_FOLDER_PATH', 'Folder:');
	define('LBL_CURRENT_FOLDER_PATH', 'Der aktuelle <br> Ordner Pfad:');
	define('LBL_FOLDER_CREATED', 'Gegründet:');
	define('LBL_FOLDER_MODIFIED', 'Die Veränderung <br>  war:');
	define('LBL_FOLDER_SUDDIR', 'Unterverzeichnis:');
	define('LBL_FOLDER_FIELS', 'Unterordner:');
	define('LBL_FOLDER_WRITABLE', 'Beschreibbar?');
	define('LBL_FOLDER_READABLE', 'Readable?');
	define('LBL_FOLDER_ROOT', 'Root Folder');
		//Preview
	define('LBL_PREVIEW', 'Vorschau');
	define('LBL_CLICK_PREVIEW', 'Klicken Sie <br> auf Vorschau.');
	//Buttons
	define('LBL_BTN_SELECT', 'Wählen Sie');
	define('LBL_BTN_CANCEL', 'Abbrechen');
	define('LBL_BTN_UPLOAD', 'Upload');
	define('LBL_BTN_CREATE', 'Erstellen');
	define('LBL_BTN_CLOSE', 'Schließen');
	define('LBL_BTN_NEW_FOLDER', 'Neuer Ordner');
	define('LBL_BTN_NEW_FILE', 'Upload');
	define('LBL_BTN_EDIT_IMAGE', 'Edit');
	define('LBL_BTN_VIEW', 'Wählen Sie <br>Browse-Modus');
	define('LBL_BTN_VIEW_TEXT', 'Datei');
	define('LBL_BTN_VIEW_DETAILS', '');
	define('LBL_BTN_VIEW_THUMBNAIL', '');
	define('LBL_BTN_VIEW_OPTIONS', 'Browse:');
	//pagination
	define('PAGINATION_NEXT', 'Nächster');
	define('PAGINATION_PREVIOUS', 'Zurück');
	define('PAGINATION_LAST', 'Dauern');
	define('PAGINATION_FIRST', 'Heim');
	define('PAGINATION_ITEMS_PER_PAGE', 'Anzeige Dokument');
	define('PAGINATION_GO_PARENT', 'Zurück zur vorherigen Ebene');
	//System
	define('SYS_DISABLED', 'System wurde heruntergefahren');
	
	//Cut
	define('ERR_NOT_DOC_SELECTED_FOR_CUT', 'Es sind keine Dokumente ausgewählt.');
	//Copy
	define('ERR_NOT_DOC_SELECTED_FOR_COPY', 'Es sind keine Dokumente ausgewählt.');
	//Paste
	define('ERR_NOT_DOC_SELECTED_FOR_PASTE', 'Es sind keine Dokumente ausgewählt.');
	define('WARNING_CUT_PASTE', 'Bestimmen Sie die Auswahl des Dokuments, das Sie in den aktuellen Ordner verschieben?');
	define('WARNING_COPY_PASTE', 'Sie sicher, dass Sie ausgewählte Dokumente in den aktuellen Ordner kopieren?');
	define('ERR_NOT_DEST_FOLDER_SPECIFIED', 'Zielordner undefined');
	define('ERR_DEST_FOLDER_NOT_FOUND', 'Können Sie nicht das Zielordner');
	define('ERR_DEST_FOLDER_NOT_ALLOWED', 'Nicht erlaubt, um ein Dokument, Ordner verschieben mehr');
	define('ERR_UNABLE_TO_MOVE_TO_SAME_DEST', 'Kann Ordner verschieben: Der Zielordner wie bewegt');
	define('ERR_UNABLE_TO_MOVE_NOT_FOUND', 'Kann bewegen Dokument: Das Dokument wurde verschoben existiert nicht');
	define('ERR_UNABLE_TO_MOVE_NOT_ALLOWED', 'Kann bewegen Dokument: Dokument kann nicht zugegriffen werden mobile');
 
	define('ERR_NOT_FILES_PASTED', 'Es sind keine Dokumente eingefügt');

	//Search
	define('LBL_SEARCH', 'Suche');
	define('LBL_SEARCH_NAME', 'Voll / Teil des Dateinamens');
	define('LBL_SEARCH_FOLDER', 'In dem Ordner suchen:');
	define('LBL_SEARCH_QUICK', 'Quick Search');
	define('LBL_SEARCH_MTIME', 'File Wandel der Zeit:');
	define('LBL_SEARCH_SIZE', 'File Size:');
	define('LBL_SEARCH_ADV_OPTIONS', 'Erweiterte Suche');
	define('LBL_SEARCH_FILE_TYPES', 'Dateityp:');
	define('SEARCH_TYPE_EXE', 'Executable');
	
	define('SEARCH_TYPE_IMG', 'Image');
	define('SEARCH_TYPE_ARCHIVE', 'Archiv');
	define('SEARCH_TYPE_HTML', 'HTML');
	define('SEARCH_TYPE_VIDEO', 'Image');
	define('SEARCH_TYPE_MOVIE', 'Movies');
	define('SEARCH_TYPE_MUSIC', 'Audio');
	define('SEARCH_TYPE_FLASH', 'Flash');
	define('SEARCH_TYPE_PPT', 'Präsentation');
	define('SEARCH_TYPE_DOC', 'Dokumentation');
	define('SEARCH_TYPE_WORD', 'Word-Dokument');
	define('SEARCH_TYPE_PDF', 'PDF');
	define('SEARCH_TYPE_EXCEL', 'Excel');
	define('SEARCH_TYPE_TEXT', 'Text-Datei');
	define('SEARCH_TYPE_UNKNOWN', 'Anzeigen Wissen');
	define('SEARCH_TYPE_XML', 'XML');
	define('SEARCH_ALL_FILE_TYPES', 'Alle Dateitypen');
	define('LBL_SEARCH_RECURSIVELY', 'Unterordner durchsuchen:');
	define('LBL_RECURSIVELY_YES', 'Ist');
	define('LBL_RECURSIVELY_NO', 'Nein');
	define('BTN_SEARCH', 'Suche');
	//thickbox
	define('THICKBOX_NEXT', 'Weiter;');
	define('THICKBOX_PREVIOUS', 'Vor einem');
	define('THICKBOX_CLOSE', 'Schließen');
	//Calendar
	define('CALENDAR_CLOSE', 'Schließen');
	define('CALENDAR_CLEAR', 'Klar');
	define('CALENDAR_PREVIOUS', 'Backward');
	define('CALENDAR_NEXT', 'Forward');
	define('CALENDAR_CURRENT', 'Heute');
	define('CALENDAR_MON', 'Montag');
	define('CALENDAR_TUE', 'Dienstag');
	define('CALENDAR_WED', 'Mittwoch');
	define('CALENDAR_THU', 'Donnerstag');
	define('CALENDAR_FRI', 'Freitag');
	define('CALENDAR_SAT', 'Samstag');
	define('CALENDAR_SUN', 'Sonntag');
	define('CALENDAR_JAN', 'Januar');
	define('CALENDAR_FEB', 'Februar');
	define('CALENDAR_MAR', 'März');
	define('CALENDAR_APR', 'April');
	define('CALENDAR_MAY', 'Dürfen');
	define('CALENDAR_JUN', 'Juni');
	define('CALENDAR_JUL', 'Juli');
	define('CALENDAR_AUG', 'August');
	define('CALENDAR_SEP', 'September');
	define('CALENDAR_OCT', 'Oktober');
	define('CALENDAR_NOV', 'November');
	define('CALENDAR_DEC', 'Dezember');
	//ERROR MESSAGES
		//deletion
	define('ERR_NOT_FILE_SELECTED', 'Bitte wählen Sie ein Dokument');
	define('ERR_NOT_DOC_SELECTED', 'Bitte wählen Sie das Dokument, das Sie löschen möchten');
	define('ERR_DELTED_FAILED', 'Kann das gewählte Dokument zu löschen.');
	define('ERR_FOLDER_PATH_NOT_ALLOWED', 'Nicht erlaubt, um Dateien in den Ordner zu löschen.');
		//class manager
	define('ERR_FOLDER_NOT_FOUND', 'Sie finden nicht die angegebenen Ordner: ');
		//rename
	define('ERR_RENAME_FORMAT', 'Dateinamen können nur aus Buchstaben, Zahlen, - und _');
	define('ERR_RENAME_EXISTS', 'Dokumentieren Sie die gleichen Namen existiert bereits');
	define('ERR_RENAME_FILE_NOT_EXISTS', 'Ausgewählte die Original-Datei ist nicht vorhanden.');
	define('ERR_RENAME_FAILED', 'Kann nicht umbenannt werden, bitte versuchen Sie es erneut.');
	define('ERR_RENAME_EMPTY', 'Bitte geben Sie ein neues Dokument Name.');
	define('ERR_NO_CHANGES_MADE', 'Dateiname hat sich nicht verändert.');
	define('ERR_RENAME_FILE_TYPE_NOT_PERMITED', 'Nicht erlaubt, um das Dokument zu solchen Verlängerung ändern.');
		//folder creation
	define('ERR_FOLDER_FORMAT', 'Dateinamen können nur aus Buchstaben, Zahlen, - und _');
	define('ERR_FOLDER_EXISTS', 'Dieser Ordner existiert bereits.');
	define('ERR_FOLDER_CREATION_FAILED', 'Kann nicht erstellt einen Ordner, bitte versuchen Sie es erneut.');
	define('ERR_FOLDER_NAME_EMPTY', 'Bitte geben Sie den Namen des Ordners.');
	define('FOLDER_FORM_TITLE', 'Neue Fenster Ordner');
	define('FOLDER_LBL_TITLE', 'Name:');
	define('FOLDER_LBL_CREATE', 'Neuer Ordner');
	//New File
	define('NEW_FILE_FORM_TITLE', 'Fenster Neues Dokument');
	define('NEW_FILE_LBL_TITLE', 'Name:');
	define('NEW_FILE_CREATE', 'Neues Dokument');
		//file upload
	define('ERR_FILE_NAME_FORMAT', 'Dateinamen können nur aus Buchstaben, Zahlen, - und _');
	define('ERR_FILE_NOT_UPLOADED', 'Es wurde keine Datei hochgeladen ausgewählt.');
	define('ERR_FILE_TYPE_NOT_ALLOWED', 'Ein solches Dokument nicht möglich hochladen.');
	define('ERR_FILE_MOVE_FAILED', 'Kann sich nicht bewegen hochgeladenen Dateien.');
	define('ERR_FILE_NOT_AVAILABLE', 'File does not exist.');
	define('ERROR_FILE_TOO_BID', 'Die hochgeladene Datei ist zu groß erlaubt');
	define('FILE_FORM_TITLE', 'Datei-Upload-Fenster');
	define('FILE_LABEL_SELECT', 'Wählen Sie Datei');
	define('FILE_LBL_MORE', 'Add file upload field');
	define('FILE_CANCEL_UPLOAD', 'Upload abbrechen');
	define('FILE_LBL_UPLOAD', 'Upload');
	//file download
	define('ERR_DOWNLOAD_FILE_NOT_FOUND', 'Keine Dokumente wurden zum Download ausgewählt');
	//Rename
	define('RENAME_FORM_TITLE', 'Umbenennen Fenster');
	define('RENAME_NEW_NAME', 'Neuer Name');
	define('RENAME_LBL_RENAME', 'Umbenennen');

	//Tips
	define('TIP_FOLDER_GO_DOWN', 'Klicken Sie in den Ordner...');
	define('TIP_DOC_RENAME', 'Doppelklicken Sie auf das Umbenennen...');
	define('TIP_FOLDER_GO_UP', 'Klicken Sie wieder auf den Boden...');
	define('TIP_SELECT_ALL', 'Anzeige aller Dokumente');
	define('TIP_UNSELECT_ALL', 'Stornieren Sie alle ausgewählten');
	//WARNING
	define('WARNING_DELETE', 'Sie sicher, dass Sie das ausgewählte Dokument zu löschen.');
	define('WARNING_IMAGE_EDIT', 'Bitte wählen Sie das gewünschte Bild zu bearbeiten.');
	define('WARNING_NOT_FILE_EDIT', 'Bitte wählen Sie die Datei, die Sie bearbeiten möchten.');
	define('WARING_WINDOW_CLOSE', 'Sicher, dass Sie das Fenster zu schließen?');
	//Preview
	define('PREVIEW_NOT_PREVIEW', 'Keine Vorschau anzeigen.');
	define('PREVIEW_OPEN_FAILED', 'Datei kann nicht geöffnet.');
	define('PREVIEW_IMAGE_LOAD_FAILED', 'Unable to load image');

	//Login
	define('LOGIN_PAGE_TITLE', 'Datei-und Bild-Manager');
	define('LOGIN_FORM_TITLE', 'Login Window');
	define('LOGIN_USERNAME', 'Benutzername:');
	define('LOGIN_PASSWORD', 'Passwort:');
	define('LOGIN_FAILED', 'Ungültiger Benutzername / Passwort.');
	
	
	//88888888888   Below for Image Editor   888888888888888888888
		//Warning 
		define('IMG_WARNING_NO_CHANGE_BEFORE_SAVE', 'Hat kein operativen Aufzeichnungen über das Bild.');
		
		//General
		define('IMG_GEN_IMG_NOT_EXISTS', 'Image ist nicht vorhanden');
		define('IMG_WARNING_LOST_CHANAGES', 'Der Betrieb aller gespeicherten verloren gehen Sie sicher, dass Sie weiterhin?');
		define('IMG_WARNING_REST', 'Alle Operationen werden abgesagt werden Sie sicher, dass Sie die Reset ?');
		define('IMG_WARNING_EMPTY_RESET', 'Hat noch keine operative Datensätze');
		define('IMG_WARING_WIN_CLOSE', 'Sicher, dass Sie das Fenster zu schließen?');
		define('IMG_WARNING_UNDO', 'Sie sicher, dass Sie zum vorherigen Schritt Wiederherstellung?');
		define('IMG_WARING_FLIP_H', 'Sicher, dass Sie Horizontal?');
		define('IMG_WARING_FLIP_V', 'Sicher, dass Sie vertikal spiegeln?');
		define('IMG_INFO', 'Image Information');
		
		//Mode
			define('IMG_MODE_RESIZE', 'Retractable:');
			define('IMG_MODE_CROP', 'Shear:');
			define('IMG_MODE_ROTATE', 'Rotation:');
			define('IMG_MODE_FLIP', 'Flip:');		
		//Button
		
			define('IMG_BTN_ROTATE_LEFT', 'Reverse');
			define('IMG_BTN_ROTATE_RIGHT', 'Veering');
			define('IMG_BTN_FLIP_H', 'Vertikal spiegeln');
			define('IMG_BTN_FLIP_V', 'Horizontal spiegeln');
			define('IMG_BTN_RESET', 'Reset');
			define('IMG_BTN_UNDO', 'Machen Sie einen Schritt zurück');
			define('IMG_BTN_SAVE', 'Sichern');
			define('IMG_BTN_CLOSE', 'Schließen');
			define('IMG_BTN_SAVE_AS', 'Sichern');
			define('IMG_BTN_CANCEL', 'Abbrechen');
		//Checkbox
			define('IMG_CHECKBOX_CONSTRAINT', 'Zur Aufrechterhaltung der Anteil der?');
		//Label
			define('IMG_LBL_WIDTH', 'Breite:');
			define('IMG_LBL_HEIGHT', 'Höhe:');
			define('IMG_LBL_X', 'X-Achse:');
			define('IMG_LBL_Y', 'Y-Achse:');
			define('IMG_LBL_RATIO', 'Proportional:');
			define('IMG_LBL_ANGLE', 'Angle:');
			define('IMG_LBL_NEW_NAME', 'Neuer Name:');
			define('IMG_LBL_SAVE_AS', '"Speichern unter"-Fenster');
			define('IMG_LBL_SAVE_TO', 'Speichern:');
			define('IMG_LBL_ROOT_FOLDER', 'Root Folder');
		//Editor
		//Save as 
		define('IMG_NEW_NAME_COMMENTS', 'Bitte fügen Sie nicht das Bild des Dokuments Erweiterung');
		define('IMG_SAVE_AS_ERR_NAME_INVALID', 'Dateinamen können nur aus Buchstaben, Zahlen, - und _');
		define('IMG_SAVE_AS_NOT_FOLDER_SELECTED', 'Haben Sie nicht wählen Sie den Zielordner.');	
		define('IMG_SAVE_AS_FOLDER_NOT_FOUND', 'Der Zielordner nicht vorhanden.');
		define('IMG_SAVE_AS_NEW_IMAGE_EXISTS', 'Die gleiche Datei existiert bereits.');

		//Save
		define('IMG_SAVE_EMPTY_PATH', 'Die Image-Pfad ist leer.');
		define('IMG_SAVE_NOT_EXISTS', 'Image ist nicht vorhanden.');
		define('IMG_SAVE_PATH_DISALLOWED', 'Kann nicht auf das ausgewählte Dokument.');
		define('IMG_SAVE_UNKNOWN_MODE', 'Unbekannt Bild Betriebsart');
		define('IMG_SAVE_RESIZE_FAILED', 'Zoom Image fehlgeschlagen.');
		define('IMG_SAVE_CROP_FAILED', 'Bild neigen Failed.');
		define('IMG_SAVE_FAILED', 'Bild konnte nicht speichern.');
		define('IMG_SAVE_BACKUP_FAILED', 'Cant back up das Originalbild');
		define('IMG_SAVE_ROTATE_FAILED', 'Kann das Bild drehen');
		define('IMG_SAVE_FLIP_FAILED', 'Kann nicht spiegeln Sie ein Bild');
		define('IMG_SAVE_SESSION_IMG_OPEN_FAILED', 'Kann nicht geöffnet werden die Bilder-Ordner aus dem Prozess, das Dokument');
		define('IMG_SAVE_IMG_OPEN_FAILED', 'Nicht in der Lage, um das Dokument Bild zu öffnen');
		
		
		//UNDO
		define('IMG_UNDO_NO_HISTORY_AVAIALBE', 'Eine Aufzeichnung des erzielbaren');
		define('IMG_UNDO_COPY_FAILED', 'Kann nicht wieder auf das ursprüngliche Bild des Dokuments');
		define('IMG_UNDO_DEL_FAILED', 'Nicht löschen können, einen Ordner mit Bildern in den Prozess der Dokumentation');
	
	//88888888888   Above for Image Editor   888888888888888888888
	
	//88888888888   Session   888888888888888888888
		define('SESSION_PERSONAL_DIR_NOT_FOUND', 'Einzelnen Prozesse ist nicht vorhanden');
		define('SESSION_COUNTER_FILE_CREATE_FAILED', 'Nicht in der Lage, den Prozess des Zählens die Datei zu öffnen.');
		define('SESSION_COUNTER_FILE_WRITE_FAILED', 'Der Prozess des Zählens kann nicht lesen und Schreiben von Dateien.');
	//88888888888   Session   888888888888888888888
	
	//88888888888   Below for Text Editor   888888888888888888888
		define('TXT_FILE_NOT_FOUND', 'File does not exist.');
		define('TXT_EXT_NOT_SELECTED', 'Bitte wählen Sie die Datei-Endung');
		define('TXT_DEST_FOLDER_NOT_SELECTED', 'Bitte wählen Sie den Zielordner');
		define('TXT_UNKNOWN_REQUEST', 'Unbekannte Anfrage.');
		define('TXT_DISALLOWED_EXT', 'Ist es nicht gestattet, solche Dateien zu erstellen.');
		define('TXT_FILE_EXIST', 'Die Datei existiert bereits.');
		define('TXT_FILE_NOT_EXIST', 'Die angegebene Datei existiert nicht.');
		define('TXT_CREATE_FAILED', 'Kann nicht erstellt eine neue Datei.');
		define('TXT_CONTENT_WRITE_FAILED', 'Kann nicht schreiben den Inhalt.');
		define('TXT_FILE_OPEN_FAILED', 'Kann die ausgewählte Datei öffnen');
		define('TXT_CONTENT_UPDATE_FAILED', 'Kann nicht aktualisieren Sie die Inhalte der Datei');
		define('TXT_SAVE_AS_ERR_NAME_INVALID', 'Dateinamen können nur aus Buchstaben, Zahlen, - und _');
	//88888888888   Above for Text Editor   888888888888888888888
	
	
?>