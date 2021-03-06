<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2016 VINADES.,JSC. All rights reserved
 * @License: GNU/GPL version 2 or any later version
 * @Createdate Sat, 26 Mar 2016 00:39:30 GMT
 */

if ( ! defined( 'NV_IS_FILE_MODULES' ) ) die( 'Stop!!!' );

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_customer";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "(
  id mediumint(8) NOT NULL AUTO_INCREMENT,
  a_title varchar(255) NOT NULL COMMENT 'Tiêu đề liên kết',
  a_url varchar(255) NOT NULL COMMENT 'Địa chỉ liên kết',
  attr_title_use tinyint(1) unsigned NOT NULL DEFAULT '1',
  attr_title_content varchar(255) NOT NULL,
  customer_id smallint(4) unsigned NOT NULL COMMENT 'ID khách hàng',
  begin_time int(11) unsigned NOT NULL COMMENT 'Thời gian bắt đầu',
  end_time int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'Thời gian kết thúc',
  weight mediumint(8) unsigned NOT NULL DEFAULT '0',
  status tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT 'Trạng thái',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_customer(
  id smallint(4) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  phone varchar(20) NOT NULL,
  email varchar(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";