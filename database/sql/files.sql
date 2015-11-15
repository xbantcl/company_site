DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` int(11) unsigned  NOT NULL AUTO_INCREMENT, 
  `intro` varchar(255) NOT NULL DEFAULT '' COMMENT '文件描述', 
  `curl` varchar(255) NOT NULL COMMENT '文件地址', 
  `aurl` varchar(255) NOT NULL COMMENT '水印文件地址', 
  `size` int(11) NOT NULL DEFAULT 0 COMMENT '文件大小',
  `with` int(11) NOT NULL DEFAULT 0 COMMENT '文件寬度',
  `height` int(11) NOT NULL DEFAULT 0 COMMENT '文件高度',
  `created_at` int(11) unsigned NOT NULL COMMENT '插入時間', 
  `updated_at` int(11) unsigned NOT NULL COMMENT '修改時間',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='文件表';
