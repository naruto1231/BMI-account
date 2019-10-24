<?php

/*

Plugin Name: paka3 AddText

Plugin URI: http://www.paka3.com/wpplugin

Description: テキストを末尾に追加するプラグイン

Author: Shoji ENDO

Version: 0.1

Author URI:http://www.paka3.com/

*/



function paka3_addtext($contentData) {

    $str = $contentData."<h3>【１日１プラグインはじめました！！】</h3>";

    return $str;

}

add_filter('the_content','paka3_addtext');

?>
