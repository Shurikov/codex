ALTER TABLE `Users` ADD `access_token` VARCHAR(128) NULL , ADD UNIQUE (`access_token`) ;