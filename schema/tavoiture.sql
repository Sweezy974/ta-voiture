
CREATE SCHEMA IF NOT EXISTS `tavoiture` DEFAULT CHARACTER SET utf8 ;
USE `tavoiture` ;



-- -----------------------------------------------------
-- Table `user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstname` VARCHAR(50) NOT NULL,
  `lastname` VARCHAR(50) NOT NULL,
  `phone_number` INT(15) NOT NULL,
  `mail` VARCHAR(255) NOT NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brand`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brand` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `models`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `models` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL,
  `brand_id` INT NOT NULL,
  INDEX `fk_models_brands1_idx` (`brand_id` ASC),
  CONSTRAINT `fk_models_brands1`
    FOREIGN KEY (`brand_id`)
    REFERENCES `tavoiture`.`brand` (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `address` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `address` VARCHAR(255) NOT NULL,
  `city` VARCHAR(50) NOT NULL,
  `zipcode` INT(5) NOT NULL,
  `country` VARCHAR(50) NOT NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vehicle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vehicle` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `price` DECIMAL(9,2) NULL,
  `color` VARCHAR(20) NOT NULL,
  `available` TINYINT(1) NOT NULL,
  `user_id` INT NOT NULL,
  `model_id` INT NOT NULL,
  `address_id` INT NOT NULL,
  `fuel` VARCHAR(20) CHARACTER SET 'big5' COLLATE 'big5_bin' NOT NULL,
  `status` VARCHAR(20) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `places` INT(2) NOT NULL ,
  INDEX `fk_vehicles_users1_idx` (`user_id` ASC),
  INDEX `fk_vehicles_models1_idx` (`model_id` ASC),
  INDEX `fk_vehicles_address1_idx` (`address_id` ASC),
  CONSTRAINT `fk_vehicles_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `tavoiture`.`user` (`id`),
  CONSTRAINT `fk_vehicles_models1`
    FOREIGN KEY (`model_id`)
    REFERENCES `tavoiture`.`models` (`id`),
  CONSTRAINT `fk_vehicles_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `tavoiture`.`address` (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reservation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `vehicle_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `start_booking` DATETIME NOT NULL,
  `end_booking` DATETIME NOT NULL,
  `status` TINYINT(1) NOT NULL,
  INDEX `fk_reservations_vehicles1_idx` (`vehicle_id` ASC),
  INDEX `fk_reservations_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_reservations_vehicles1`
    FOREIGN KEY (`vehicle_id`)
    REFERENCES `tavoiture`.`vehicle` (`id`),
  CONSTRAINT `fk_reservations_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `tavoiture`.`user` (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `user_address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_address` (
  `user_id` INT NOT NULL ,
  `address_id` INT NOT NULL,
  PRIMARY KEY (`user_id`, `address_id`),
  INDEX `fk_users_has_address_address1_idx` (`address_id` ASC),
  INDEX `fk_users_has_address_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_users_has_address_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `tavoiture`.`user` (`id`),
  CONSTRAINT `fk_users_has_address_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `tavoiture`.`address` (`id`))
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Insertion de donnée dans bdd tavoiture
-- -----------------------------------------------------
INSERT INTO `user` (`firstname`, `lastname`, `phone_number`, `mail`)
VALUES
('propriétaire1', 'propriétaire1', '0262435678', 'proprietaire1@gmail.COM'),
('locataire1', 'locataire1', '0033848892', 'locataire1@gmail.com');

INSERT INTO `brand` (`name`)
VALUES ('Citroën'), ('Renault'), ('Peugeot'), ('Audi');

INSERT INTO `models` (`name`, `brand_id`)
VALUES
('saxo', '1'), ('picasso', '1'), ('clio', '2'), ('mégane', '2'),
('2008', '3'), ('308 ', '3'), ('RS6', '4'), ('QRS5', '4');


INSERT INTO `address` (`address`, `city`, `zipcode`, `country`)
VALUES
('120 CHEMIN DU CAP', 'LA POSSESSION', '97419', 'REUNION'),
('52 AVENUE DE LA FORET', 'STE CLOTILDE', '97490', 'REUNION'),
('121 AVENUE LAMBERT', 'ST LOUIS', '97450', 'REUNION');

INSERT INTO `vehicle` (`price`, `color`, `available`,`user_id`, `model_id`, `address_id`, `fuel`, `status`, `description`,`places`)
VALUES
('500', 'noire', '1','1', '7', '1', 'essence', 'très bon état', 'je met à disposition ma voiture qui est très bien entretenu','4'),
('80', 'rouge', '0', '1', '8', '1', 'essence', 'bon état', 'peinture fresh','2');

INSERT INTO `reservation` (`vehicle_id`, `user_id`, `start_booking`, `end_booking`, `status`)
VALUES ('1', '1', '2017-04-13 00:00:00', '2017-04-17 00:00:00', '1'),
       ('1', '1', '2017-04-24 00:00:00', '2017-04-30 00:00:00', '0');

INSERT INTO `user_address` (`user_id`, `address_id`) VALUES ('1', '1'), ('2', '3');
