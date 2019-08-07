/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
		config.language = 'id';
		config.bodyClass = 'contents';
		
		config.height = 200;		
	   config.filebrowserBrowseUrl = 'http://seleksi.ilmuprogrammer.com/assets/plugins/kcfinder/browse.php?type=files';

       config.filebrowserImageBrowseUrl = 'http://seleksi.ilmuprogrammer.com/assets/plugins/kcfinder/browse.php?type=images';

       config.filebrowserFlashBrowseUrl = 'http://seleksi.ilmuprogrammer.com/assets/plugins/kcfinder/browse.php?type=flash';

       config.filebrowserUploadUrl = 'http://seleksi.ilmuprogrammer.com/assets/plugins/kcfinder/upload.php?type=files';

       config.filebrowserImageUploadUrl = 'http://seleksi.ilmuprogrammer.com/assets/plugins/kcfinder/upload.php?type=images';

       config.filebrowserFlashUploadUrl = 'http://seleksi.ilmuprogrammer.com/assets/plugins/kcfinder/upload.php?type=flash';
};
