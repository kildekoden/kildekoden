SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema for example-php-challenge
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `commits`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `commits` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sha` CHAR(40) NOT NULL,
  `timestamp` DATETIME NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `author_username` VARCHAR(150) NOT NULL,
  `author_email` VARCHAR(150) NOT NULL,
  `author_url` VARCHAR(255) NOT NULL,
  `author_avatar` VARCHAR(150) NULL DEFAULT NULL,
  `message` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `sha_UNIQUE` (`sha` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
