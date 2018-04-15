USE `pruebas` ;

-- -----------------------------------------------------
-- Table `pruebas`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pruebas`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  `nombre` VARCHAR(255) NULL,
  `apellido` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
