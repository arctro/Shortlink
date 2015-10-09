# Shortlink
A simple shortlink service

SQL Table code
```
CREATE TABLE IF NOT EXISTS `mydb`.`short` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `link` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;
```
