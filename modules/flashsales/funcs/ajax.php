<?php

/**
 * @Project NUKEVIET 4.x
 * @Author HONGUYEN <honguyentapdoan@gmail.com>
 * @Copyright (C) 2024 HONGUYEN. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Mon, 27 May 2024 08:28:05 GMT
 */

if (!defined('NV_IS_MOD_FLASHSALES'))
    die('Stop!!!');

$page_title = $module_info['site_title'];
$key_words = $module_info['keywords'];

$array_data = array();

//------------------
// Viết code vào đây
//------------------

$contents = nv_theme_flashsales_ajax($array_data);

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
