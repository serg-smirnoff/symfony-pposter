
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- pp_meta
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pp_meta`;


CREATE TABLE `pp_meta`
(
	`title` VARCHAR(255)  NOT NULL,
	`keywords` VARCHAR(255)  NOT NULL,
	`description` TEXT,
	`is_active` TINYINT default 0 NOT NULL,
	`created_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pp_config
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pp_config`;


CREATE TABLE `pp_config`
(
	`param` VARCHAR(255)  NOT NULL,
	`value` VARCHAR(3000)  NOT NULL,
	`description` VARCHAR(500)  NOT NULL,
	`is_active` TINYINT default 0 NOT NULL,
	`created_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pp_menu
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pp_menu`;


CREATE TABLE `pp_menu`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`parent_id` INTEGER,
	`name` VARCHAR(255)  NOT NULL,
	`announce` VARCHAR(255),
	`text` TEXT,
	`ord` INTEGER,
	`url` VARCHAR(255)  NOT NULL,
	`is_active` TINYINT default 0 NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pp_parts
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pp_parts`;


CREATE TABLE `pp_parts`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta_id` INTEGER,
	`ord` INTEGER,
	`photo` VARCHAR(255),
	`name` VARCHAR(255)  NOT NULL,
	`description` VARCHAR(1000),
	`is_active` TINYINT default 0 NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `pp_parts_FI_1` (`meta_id`),
	CONSTRAINT `pp_parts_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pp_authors
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pp_authors`;


CREATE TABLE `pp_authors`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta_id` INTEGER,
	`name` VARCHAR(255)  NOT NULL,
	`is_active` TINYINT default 0 NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `pp_authors_FI_1` (`meta_id`),
	CONSTRAINT `pp_authors_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pp_photos
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pp_photos`;


CREATE TABLE `pp_photos`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta_id` INTEGER,
	`name` VARCHAR(255)  NOT NULL,
	`description` VARCHAR(1000),
	`part_id` INTEGER,
	`author_id` INTEGER,
	`photo_s` VARCHAR(255),
	`photo_b` VARCHAR(255),
	`size` VARCHAR(255),
	`price` INTEGER,
	`ord` VARCHAR(255),
	`is_new` TINYINT default 0 NOT NULL,
	`is_spec` TINYINT default 0 NOT NULL,
	`is_active` TINYINT default 0 NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `pp_photos_FI_1` (`meta_id`),
	CONSTRAINT `pp_photos_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT,
	INDEX `pp_photos_FI_2` (`part_id`),
	CONSTRAINT `pp_photos_FK_2`
		FOREIGN KEY (`part_id`)
		REFERENCES `pp_parts` (`id`)
		ON UPDATE RESTRICT,
	INDEX `pp_photos_FI_3` (`author_id`),
	CONSTRAINT `pp_photos_FK_3`
		FOREIGN KEY (`author_id`)
		REFERENCES `pp_authors` (`id`)
		ON UPDATE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pp_pages
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pp_pages`;


CREATE TABLE `pp_pages`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta_id` INTEGER,
	`url` VARCHAR(255),
	`title` VARCHAR(255),
	`announce` VARCHAR(255),
	`text` VARCHAR(1000),
	`ord` VARCHAR(255),
	`is_active` TINYINT default 0 NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `pp_pages_FI_1` (`meta_id`),
	CONSTRAINT `pp_pages_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pp_faq
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pp_faq`;


CREATE TABLE `pp_faq`
(
	`meta_id` INTEGER,
	`question` VARCHAR(1000),
	`answer` VARCHAR(1000),
	`ord` VARCHAR(255),
	`is_active` TINYINT default 0 NOT NULL,
	`created_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	INDEX `pp_faq_FI_1` (`meta_id`),
	CONSTRAINT `pp_faq_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pp_articles
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pp_articles`;


CREATE TABLE `pp_articles`
(
	`meta_id` INTEGER,
	`title` VARCHAR(255),
	`announce` VARCHAR(1000),
	`text` VARCHAR(10000),
	`ord` VARCHAR(255),
	`is_active` TINYINT default 0 NOT NULL,
	`created_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	INDEX `pp_articles_FI_1` (`meta_id`),
	CONSTRAINT `pp_articles_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pp_news
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pp_news`;


CREATE TABLE `pp_news`
(
	`meta_id` INTEGER,
	`title` VARCHAR(255),
	`announce` VARCHAR(1000),
	`text` VARCHAR(10000),
	`ord` VARCHAR(255),
	`is_active` TINYINT default 0 NOT NULL,
	`created_at` DATETIME,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	INDEX `pp_news_FI_1` (`meta_id`),
	CONSTRAINT `pp_news_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
