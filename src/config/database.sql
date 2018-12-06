CREATE TABLE IF NOT EXISTS `PREFIX_permissions` (
  `id` int(11) NOT NULL auto_increment,
  `title` char(50) NOT NULL,
  `desc` char(50) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `title` (`title`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `PREFIX_rolepermissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY  (`role_id`,`permission_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `PREFIX_roles` (
  `id` int(11) NOT NULL auto_increment,
  `title` char(50) NOT NULL,
  `desc` char(50) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `title` (`title`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `PREFIX_userroles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY  (`user_id`,`role_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
