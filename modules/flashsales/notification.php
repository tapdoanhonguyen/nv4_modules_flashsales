<?php

/**
 * @Project NUKEVIET 4.x
 * @Author HONGUYEN <honguyentapdoan@gmail.com>
 * @Copyright (C) 2024 HONGUYEN. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Mon, 27 May 2024 08:28:05 GMT
 */

if (!defined('NV_IS_FILE_SITEINFO')) {
    die('Stop!!!');
}

$lang_siteinfo = nv_get_lang_module($mod);

// Dưới đây là code mẫu. Xem hướng dẫn ở https://wiki.nukeviet.vn/programming4:module:notification

/*
$data['title'] = sprintf($lang_siteinfo['notification_contact_new'], $data['send_from'], $data['content']['title']);
$data['link'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $data['module'] . '&amp;' . NV_OP_VARIABLE . '=view&amp;id=' . $data['obid'];
 */
