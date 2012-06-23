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
	
	
	
	
	define('MENU_SELECT', 'Изберете');
	define('MENU_DOWNLOAD', 'Свали');
	define('MENU_PREVIEW', 'Преглед');
	define('MENU_RENAME', 'Преименувай');
	define('MENU_EDIT', 'Редактиране');
	define('MENU_CUT', 'Изрежи');
	define('MENU_COPY', 'Копирай');
	define('MENU_DELETE', 'Изтрий');
	define('MENU_PLAY', 'Стартирай');
	define('MENU_PASTE', 'Постави');
	
	//Label
		//Top Action
		define('LBL_ACTION_REFRESH', 'Презареди');
		define('LBL_ACTION_DELETE', 'Изтрий');
		define('LBL_ACTION_CUT', 'Изрежи');
		define('LBL_ACTION_COPY', 'Копирай');
		define('LBL_ACTION_PASTE', 'Постави');
		define('LBL_ACTION_CLOSE', 'Затвори');
		define('LBL_ACTION_SELECT_ALL', 'Маркирай всички');
		//File Listing
	define('LBL_NAME', 'Име на файла');
	define('LBL_SIZE', 'Размер');
	define('LBL_MODIFIED', 'Последна промяна');
		//File Information
	define('LBL_FILE_INFO', 'Инфрормация за файла:');
	define('LBL_FILE_NAME', 'Име на файла:');	
	define('LBL_FILE_CREATED', 'Създаден на:');
	define('LBL_FILE_MODIFIED', 'Променен на:');
	define('LBL_FILE_SIZE', 'Размер на файла:');
	define('LBL_FILE_TYPE', 'Тип на файла:');
	define('LBL_FILE_WRITABLE', 'Записващ?');
	define('LBL_FILE_READABLE', 'Четящ?');
		//Folder Information
	define('LBL_FOLDER_INFO', 'Информация за папката:');
	define('LBL_FOLDER_PATH', 'Директория:');
	define('LBL_CURRENT_FOLDER_PATH', 'Текуща директория');
	define('LBL_FOLDER_CREATED', 'Създадена на:');
	define('LBL_FOLDER_MODIFIED', 'Променена на:');
	define('LBL_FOLDER_SUDDIR', 'Поддиректория:');
	define('LBL_FOLDER_FIELS', 'Под-документи:');
	define('LBL_FOLDER_WRITABLE', 'Записващ?');
	define('LBL_FOLDER_READABLE', 'Четящ?');
	define('LBL_FOLDER_ROOT', 'Директория на папката');
		//Preview
	define('LBL_PREVIEW', 'Прегледай');
	define('LBL_CLICK_PREVIEW', 'Кликнете за визуализация.');
	//Buttons
	define('LBL_BTN_SELECT', 'Маркирай');
	define('LBL_BTN_CANCEL', 'Отказ');
	define('LBL_BTN_UPLOAD', 'Качи');
	define('LBL_BTN_CREATE', 'Създай');
	define('LBL_BTN_CLOSE', 'Затвори');
	define('LBL_BTN_NEW_FOLDER', 'Нова папка');
	define('LBL_BTN_NEW_FILE', 'Нов файл');
	define('LBL_BTN_EDIT_IMAGE', 'Промени снимката');
	define('LBL_BTN_VIEW', 'Преглед');
	define('LBL_BTN_VIEW_TEXT', 'Прегледай текста');
	define('LBL_BTN_VIEW_DETAILS', 'Прегледай детайлите');
	define('LBL_BTN_VIEW_THUMBNAIL', 'Намаляване');
	define('LBL_BTN_VIEW_OPTIONS', 'Режим за преглед:');
	//pagination
	define('PAGINATION_NEXT', 'Следващ');
	define('PAGINATION_PREVIOUS', 'Предишен');
	define('PAGINATION_LAST', 'Последен');
	define('PAGINATION_FIRST', 'Първи');
	define('PAGINATION_ITEMS_PER_PAGE', 'Брой елементи на страница');
	define('PAGINATION_GO_PARENT', 'Върни се в началото');
	//System
	define('SYS_DISABLED', 'Деактивиран');
	
	//Cut
	define('ERR_NOT_DOC_SELECTED_FOR_CUT', 'Не е посочен документ за изрязване');
	//Copy
	define('ERR_NOT_DOC_SELECTED_FOR_COPY', 'Не е посочен документ за копиране');
	//Paste
	define('ERR_NOT_DOC_SELECTED_FOR_PASTE', 'Не е посочен документ за поставяне');
	define('WARNING_CUT_PASTE', 'Сигурни ли сте, че искате да поставите избраните файлове в текущата папка?');
	define('WARNING_COPY_PASTE', 'Сигурни ли сте, че искате да копирате избраните файлове в текущата папка?');
	define('ERR_NOT_DEST_FOLDER_SPECIFIED', 'Не е посочена папка');
	define('ERR_DEST_FOLDER_NOT_FOUND', 'Папката не е намерена');
	define('ERR_DEST_FOLDER_NOT_ALLOWED', 'Папката не е достъпна');
	define('ERR_UNABLE_TO_MOVE_TO_SAME_DEST', 'Не може да местите в същата директория');
	define('ERR_UNABLE_TO_MOVE_NOT_FOUND', 'Документа е преместен или не съществува');
	define('ERR_UNABLE_TO_MOVE_NOT_ALLOWED', 'Преместването не е разрешено');
 
	define('ERR_NOT_FILES_PASTED', 'Файловете не са поставени');

	//Search
	define('LBL_SEARCH', 'Търсене');
	define('LBL_SEARCH_NAME', 'Име');
	define('LBL_SEARCH_FOLDER', 'Папка:');
	define('LBL_SEARCH_QUICK', 'Бързо');
	define('LBL_SEARCH_MTIME', 'Последно променена:');
	define('LBL_SEARCH_SIZE', 'Размер');
	define('LBL_SEARCH_ADV_OPTIONS', 'Разширено търсене');
	define('LBL_SEARCH_FILE_TYPES', 'Тип на файловете:');
	define('SEARCH_TYPE_EXE', 'Изпълняващ файл');
	
	define('SEARCH_TYPE_IMG', 'Изображение');
	define('SEARCH_TYPE_ARCHIVE', 'Архив');
	define('SEARCH_TYPE_HTML', 'HTML');
	define('SEARCH_TYPE_VIDEO', 'Видео');
	define('SEARCH_TYPE_MOVIE', 'Филм');
	define('SEARCH_TYPE_MUSIC', 'Музика');
	define('SEARCH_TYPE_FLASH', 'Flash');
	define('SEARCH_TYPE_PPT', 'Презентация');
	define('SEARCH_TYPE_DOC', 'Документация');
	define('SEARCH_TYPE_WORD', 'Word документ');
	define('SEARCH_TYPE_PDF', 'PDF');
	define('SEARCH_TYPE_EXCEL', 'Excel документ');
	define('SEARCH_TYPE_TEXT', 'Текст на файла');
	define('SEARCH_TYPE_UNKNOWN', 'Непознат');
	define('SEARCH_TYPE_XML', 'XML');
	define('SEARCH_ALL_FILE_TYPES', 'Всички видове файлове');
	define('LBL_SEARCH_RECURSIVELY', 'Търсене в поддиректориите:');
	define('LBL_RECURSIVELY_YES', 'Да');
	define('LBL_RECURSIVELY_NO', 'Не');
	define('BTN_SEARCH', 'Търсене');
	//thickbox
	define('THICKBOX_NEXT', 'Следваща');
	define('THICKBOX_PREVIOUS', 'Предишна');
	define('THICKBOX_CLOSE', 'Затвори');
	//Calendar
	define('CALENDAR_CLOSE', 'Затвори');
	define('CALENDAR_CLEAR', 'Изчисти');
	define('CALENDAR_PREVIOUS', 'Предишен');
	define('CALENDAR_NEXT', 'Следващ');
	define('CALENDAR_CURRENT', 'Текущ');
	define('CALENDAR_MON', 'Понеделник');
	define('CALENDAR_TUE', 'Вторник');
	define('CALENDAR_WED', 'Сряда');
	define('CALENDAR_THU', 'Четвъртък');
	define('CALENDAR_FRI', 'Петък');
	define('CALENDAR_SAT', 'Събота');
	define('CALENDAR_SUN', 'Неделя');
	define('CALENDAR_JAN', 'Януари');
	define('CALENDAR_FEB', 'Февруари');
	define('CALENDAR_MAR', 'Март');
	define('CALENDAR_APR', 'Април');
	define('CALENDAR_MAY', 'Май');
	define('CALENDAR_JUN', 'Юни');
	define('CALENDAR_JUL', 'Юли');
	define('CALENDAR_AUG', 'Август');
	define('CALENDAR_SEP', 'Септември');
	define('CALENDAR_OCT', 'Октомври');
	define('CALENDAR_NOV', 'Ноември');
	define('CALENDAR_DEC', 'Декември');
	//ERROR MESSAGES
		//deletion
	define('ERR_NOT_FILE_SELECTED', 'Моля изберете друг документ');
	define('ERR_NOT_DOC_SELECTED', 'Моля изберете документа, който искате да изтриете');
	define('ERR_DELTED_FAILED', 'Не може да изтриете избрания документ');
	define('ERR_FOLDER_PATH_NOT_ALLOWED', 'Не е позволено триенето на файловете в папката');
		//class manager
	define('ERR_FOLDER_NOT_FOUND', 'Указаната папка не може да бъде намерена:');
		//rename
	define('ERR_RENAME_FORMAT', 'Имената на файловете могат да съдържат само букви, цифри, - и _');
	define('ERR_RENAME_EXISTS', 'Има документ със същото име');
	define('ERR_RENAME_FILE_NOT_EXISTS', 'Файлът не съществува');
	define('ERR_RENAME_FAILED', 'Файлът не може да се преименува,моля опитайте отново');
	define('ERR_RENAME_EMPTY', 'Моля, въведете име на документа');
	define('ERR_NO_CHANGES_MADE', 'Името на файла не се е променило');
	define('ERR_RENAME_FILE_TYPE_NOT_PERMITED', 'Не е позволено да се промени с това разширение');
		//folder creation
	define('ERR_FOLDER_FORMAT', 'Имената на файловете могат да съдържат само букви, цифри, - и _');
	define('ERR_FOLDER_EXISTS', 'Такава папка вече съществува');
	define('ERR_FOLDER_CREATION_FAILED', 'Не може да се създаде папка, моля опитайте отново');
	define('ERR_FOLDER_NAME_EMPTY', 'Моля въведете името на папката');
	define('FOLDER_FORM_TITLE', 'Заглавие');
	define('FOLDER_LBL_TITLE', 'Име:');
	define('FOLDER_LBL_CREATE', 'Нова папка');
	//New File
	define('NEW_FILE_FORM_TITLE', 'Заглавие');
	define('NEW_FILE_LBL_TITLE', 'Име:');
	define('NEW_FILE_CREATE', 'Нов файл');
		//file upload
	define('ERR_FILE_NAME_FORMAT', 'Имената на файловете могат да съдържат само букви, цифри, - и _');
	define('ERR_FILE_NOT_UPLOADED', 'Файлът не е качен');
	define('ERR_FILE_TYPE_NOT_ALLOWED', 'Този тип файл не може да бъде качен');
	define('ERR_FILE_MOVE_FAILED', 'Този файл не може да бъде преместен');
	define('ERR_FILE_NOT_AVAILABLE', 'Файлът не съществува');
	define('ERROR_FILE_TOO_BID', 'Файлът е прекалено голям и не може да бъде качен');
	define('FILE_FORM_TITLE', 'Заглавие');
	define('FILE_LABEL_SELECT', 'Изберете файл');
	define('FILE_LBL_MORE', 'Качване на повече от един файл');
	define('FILE_CANCEL_UPLOAD', 'Отказ');
	define('FILE_LBL_UPLOAD', 'Качи');
	//file download
	define('ERR_DOWNLOAD_FILE_NOT_FOUND', 'Файлът който искате да свалите не е намерен');
	//Rename
	define('RENAME_FORM_TITLE', 'Заглавие');
	define('RENAME_NEW_NAME', 'Ново име');
	define('RENAME_LBL_RENAME', 'Преименуване');

	//Tips
	define('TIP_FOLDER_GO_DOWN', 'Премести надолу...');
	define('TIP_DOC_RENAME', 'Преименуване...');
	define('TIP_FOLDER_GO_UP', 'Премести нагоре...');
	define('TIP_SELECT_ALL', 'Избери всички');
	define('TIP_UNSELECT_ALL', 'Демаркирай всички');
	//WARNING
	define('WARNING_DELETE', 'Сигурни ли сте, че искате да изтриете избрания документ?');
	define('WARNING_IMAGE_EDIT', 'Моля, изберете изображението което искате да редактирате');
	define('WARNING_NOT_FILE_EDIT', 'Моля, изберете файла който искате да редактирате');
	define('WARING_WINDOW_CLOSE', 'Сигурни ли сте, че искате да затворите прозореца?');
	//Preview
	define('PREVIEW_NOT_PREVIEW', 'Не е преглед');
	define('PREVIEW_OPEN_FAILED', 'Файлът не може да се отвори');
	define('PREVIEW_IMAGE_LOAD_FAILED', 'Изображението не може да се зареди');

	//Login
	define('LOGIN_PAGE_TITLE', 'Промяна на файлове');
	define('LOGIN_FORM_TITLE', 'Заглавие');
	define('LOGIN_USERNAME', 'Потребителско име:');
	define('LOGIN_PASSWORD', 'Парола:');
	define('LOGIN_FAILED', 'Невалидно потребителско име и парола.');
	
	
	//88888888888   Below for Image Editor   888888888888888888888
		//Warning 
		define('IMG_WARNING_NO_CHANGE_BEFORE_SAVE', 'Неможе да се променя преди да се запази');
		
		//General
		define('IMG_GEN_IMG_NOT_EXISTS', 'Изображението не съществува');
		define('IMG_WARNING_LOST_CHANAGES', 'Промените които направихте ще бъдат загубени, искате ли да продължите?');
		define('IMG_WARNING_REST', 'Всички операции ще бъдат премахнати, сигурни ли сте че искате да продължите?');
		define('IMG_WARNING_EMPTY_RESET', 'Няма записи за каквито и да е операции');
		define('IMG_WARING_WIN_CLOSE', 'Искате ли да затворите прозореца ?');
		define('IMG_WARNING_UNDO', 'Искате ли да се върнете към предишната стъпка от промените?');
		define('IMG_WARING_FLIP_H', 'Искате ли да завъртите изображението хоризонтално?');
		define('IMG_WARING_FLIP_V', 'Искате ли да завъртите изображението вертикално?');
		define('IMG_INFO', 'Информация за изображението');
		
		//Mode
			define('IMG_MODE_RESIZE', 'Промени размери:');
			define('IMG_MODE_CROP', 'Изрежи:');
			define('IMG_MODE_ROTATE', 'Завърти:');
			define('IMG_MODE_FLIP', 'Обърни:');		
		//Button
		
			define('IMG_BTN_ROTATE_LEFT', 'Завърти наляво');
			define('IMG_BTN_ROTATE_RIGHT', 'Завърти надясно');
			define('IMG_BTN_FLIP_H', 'Искате ли да завъртите бутона хоризонтално?');
			define('IMG_BTN_FLIP_V', 'Искате ли да завъртите бутона вертикално?');
			define('IMG_BTN_RESET', 'Занули');
			define('IMG_BTN_UNDO', 'Стъпка назад');
			define('IMG_BTN_SAVE', 'Запази');
			define('IMG_BTN_CLOSE', 'Затвори');
			define('IMG_BTN_SAVE_AS', 'Запази като');
			define('IMG_BTN_CANCEL', 'Отказ');
		//Checkbox
			define('IMG_CHECKBOX_CONSTRAINT', 'Да се запази ли съотношението?');
		//Label
			define('IMG_LBL_WIDTH', 'Ширина:');
			define('IMG_LBL_HEIGHT', 'Височина:');
			define('IMG_LBL_X', 'X-ос:');
			define('IMG_LBL_Y', 'Y-ос:');
			define('IMG_LBL_RATIO', 'Съотношение:');
			define('IMG_LBL_ANGLE', 'Ъгъл:');
			define('IMG_LBL_NEW_NAME', 'Ново име:');
			define('IMG_LBL_SAVE_AS', 'Запиши като:');
			define('IMG_LBL_SAVE_TO', 'Запиши във:');
			define('IMG_LBL_ROOT_FOLDER', 'Главна папка');
		//Editor
		//Save as 
		define('IMG_NEW_NAME_COMMENTS', 'Коментар');
		define('IMG_SAVE_AS_ERR_NAME_INVALID', 'Имената на файловете могат да съдържат само букви, цифри, - и _');
		define('IMG_SAVE_AS_NOT_FOLDER_SELECTED', 'Не е избрана папка');	
		define('IMG_SAVE_AS_FOLDER_NOT_FOUND', 'Такава папка не съществува');
		define('IMG_SAVE_AS_NEW_IMAGE_EXISTS', 'Вече има изображение с това име');

		//Save
		define('IMG_SAVE_EMPTY_PATH', 'Празна директория');
		define('IMG_SAVE_NOT_EXISTS', 'Изображението не съществува');
		define('IMG_SAVE_PATH_DISALLOWED', 'Няма достъп до избрания документ');
		define('IMG_SAVE_UNKNOWN_MODE', 'Неизвестен режим');
		define('IMG_SAVE_RESIZE_FAILED', 'Грешка в промяната на размера');
		define('IMG_SAVE_CROP_FAILED', 'Грешка в изрязването');
		define('IMG_SAVE_FAILED', 'Записът на изображението е невъзможен');
		define('IMG_SAVE_BACKUP_FAILED', 'Не е направено резервно копие на оригиналното изображение');
		define('IMG_SAVE_ROTATE_FAILED', 'Не може да завъртите изображението');
		define('IMG_SAVE_FLIP_FAILED', 'Изображението не може да се обърне');
		define('IMG_SAVE_SESSION_IMG_OPEN_FAILED', 'Не може да се отвори папката с изображенията');
		define('IMG_SAVE_IMG_OPEN_FAILED', 'Изображението не може да се отвори');
		
		
		//UNDO
		define('IMG_UNDO_NO_HISTORY_AVAIALBE', 'Няма запис за възтановяване');
		define('IMG_UNDO_COPY_FAILED', 'Не може да се върнете към оригиналното изображение на документа');
		define('IMG_UNDO_DEL_FAILED', 'Изображението не може да бъде изтрито в процес на работа');
	
	//88888888888   Above for Image Editor   888888888888888888888
	
	//88888888888   Session   888888888888888888888
		define('SESSION_PERSONAL_DIR_NOT_FOUND', 'Директорията не е открита');
		define('SESSION_COUNTER_FILE_CREATE_FAILED', 'В процес на отчитане не могат да се създават файлове');
		define('SESSION_COUNTER_FILE_WRITE_FAILED', 'В процес на отчитане не могат да се пишат и четат файлове');
	//88888888888   Session   888888888888888888888
	
	//88888888888   Below for Text Editor   888888888888888888888
		define('TXT_FILE_NOT_FOUND', 'Файлът не е намерен');
		define('TXT_EXT_NOT_SELECTED', 'Моля, изберете разширението на файла');
		define('TXT_DEST_FOLDER_NOT_SELECTED', 'Моля, изберете папка');
		define('TXT_UNKNOWN_REQUEST', 'Неизвестно искане');
		define('TXT_DISALLOWED_EXT', 'Не са позволени такива разширения');
		define('TXT_FILE_EXIST', 'Файлът вече съществува');
		define('TXT_FILE_NOT_EXIST', 'файлът не съществува');
		define('TXT_CREATE_FAILED', 'Не може да създавате нови файлове');
		define('TXT_CONTENT_WRITE_FAILED', 'Не може да променяте съдържанието');
		define('TXT_FILE_OPEN_FAILED', 'Избраният файл не може да се отвори');
		define('TXT_CONTENT_UPDATE_FAILED', 'Не може да се актуализира съдържанието на файла');
		define('TXT_SAVE_AS_ERR_NAME_INVALID', 'Грешно име');
	//88888888888   Above for Text Editor   888888888888888888888
	
	
?>