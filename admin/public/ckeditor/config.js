/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	 config.language = 'vi';
	config.uiColor = '#AADC6E';
//cau hinh ckfinder


    config.filebrowserBrowseUrl         ='http://localhost:8888/baitap_onluyen_video_hoclap_trinh/lap_trinh_vien/admin/public/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl  	='http://localhost:8888/baitap_onluyen_video_hoclap_trinh/lap_trinh_vien/admin/public/ckfinder/ckfinder.html?type=Images';
    config.filebrowserFlashBrowseUrl 	='http://localhost:8888/baitap_onluyen_video_hoclap_trinh/lap_trinh_vien/admin/public/ckfinder/ckfinder.html?type=Flash';
    config.filebrowserUploadUrl 	='http://localhost:8888/baitap_onluyen_video_hoclap_trinh/lap_trinh_vien/admin/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl 	='http://localhost:8888/baitap_onluyen_video_hoclap_trinh/lap_trinh_vien/admin/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl 	='http://localhost:8888/baitap_onluyen_video_hoclap_trinh/lap_trinh_vien/admin/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

	
};
