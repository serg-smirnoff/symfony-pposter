ALTER TABLE `pp_parts` ADD CONSTRAINT `pp_parts_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT;
ALTER TABLE `pp_authors` ADD CONSTRAINT `pp_authors_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT;
ALTER TABLE `pp_photos` ADD CONSTRAINT `pp_photos_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT;
ALTER TABLE `pp_photos` ADD CONSTRAINT `pp_photos_FK_2`
		FOREIGN KEY (`part_id`)
		REFERENCES `pp_parts` (`id`)
		ON UPDATE RESTRICT;
ALTER TABLE `pp_photos` ADD CONSTRAINT `pp_photos_FK_3`
		FOREIGN KEY (`author_id`)
		REFERENCES `pp_authors` (`id`)
		ON UPDATE RESTRICT;
ALTER TABLE `pp_pages` ADD `url` VARCHAR(255);
ALTER TABLE `pp_pages` ADD CONSTRAINT `pp_pages_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT;
ALTER TABLE `pp_faq` ADD CONSTRAINT `pp_faq_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT;
ALTER TABLE `pp_articles` ADD CONSTRAINT `pp_articles_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT;
ALTER TABLE `pp_news` ADD CONSTRAINT `pp_news_FK_1`
		FOREIGN KEY (`meta_id`)
		REFERENCES `pp_meta` (`id`)
		ON UPDATE RESTRICT;
/* old definition: int(11) NOT NULL auto_increment
   new definition: INTEGER(11)  NOT NULL AUTO_INCREMENT */
ALTER TABLE `sf_seo_url_friendly` CHANGE `id` `id` INTEGER(11)  NOT NULL AUTO_INCREMENT;
