DROP TABLE IF EXISTS `features`;
CREATE TABLE `features` (
  `id` int(11) unsigned  NOT NULL AUTO_INCREMENT, 
  `name` varchar(255) NOT NULL COMMENT '特色名稱', 
  `file_id` int(11) unsigned NOT NULL COMMENT '文件ID', 
  `file_url` varchar(255) NOT NULL COMMENT '文件地址', 
  `created_at` int(11) unsigned NOT NULL COMMENT '插入時間', 
  `updated_at` int(11) unsigned NOT NULL COMMENT '修改時間',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='產品特色表';
