
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- sf_seo_url_friendly
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_seo_url_friendly`;


CREATE TABLE `sf_seo_url_friendly`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`internal_url` VARCHAR(255),
	`external_url` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `uk_external_url` (`external_url`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
