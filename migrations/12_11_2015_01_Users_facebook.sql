ALTER TABLE `Users` ADD `fb_id` VARCHAR(64) NULL AFTER `vk_uri`, ADD `fb_uri` VARCHAR(64) NULL AFTER `fb_id`, ADD UNIQUE (`fb_id`, `fb_uri`) ;