-- consulta php --

-- crear tabla --

CREATE DATABASE IF NOT EXISTS `login-angel` DEFAULT CHARACTER SET utf8mb4;
USE `login-angel`;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo_documento` VARCHAR(10) NOT NULL,
  `numero_documento` VARCHAR(20) NOT NULL,
  `nombres_completos` VARCHAR(150) NOT NULL,
  `correo_electronico` VARCHAR(150) NOT NULL,
  `usuario` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `perfil` VARCHAR(10) NOT NULL,
  `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE INDEX (`numero_documento` ASC),
  UNIQUE INDEX (`correo_electronico` ASC),
  UNIQUE INDEX (`usuario` ASC)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;