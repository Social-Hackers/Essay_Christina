<?php


function essayMetaSettings() {
	return 'include_parts/basis/meta_settings.php';
}


function essayHeaderContent() {
	return 'include_parts/basis/header_angel.php';
}


function essayNavContent() {
    return 'include_parts/basis/nav_common.php';
}

function essayFooterContent() {
	return 'include_parts/basis/footer_angel.php';
}


function essayMainContents($file_name) {

    $content_file = basename($file_name);
    $content_path = 'include_parts/content_main/';

    return $content_path.$content_file;
}


function essayStyleSetting($file_name) {
	
	$content_file = basename($file_name);
    $content_path = 'include_parts/style/';

    return $content_path.$content_file;
}


