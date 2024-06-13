CREATE TABLE juegos (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  lanzamiento VARCHAR(100) NOT NULL,
  plataforma VARCHAR(100) NOT NULL,
  ventas VARCHAR(100) NOT NULL,
  desarrollador VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Pokemon', '1995', 'Gameboy', '70.000.000', 'Nintendo');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Monster Hunter', '1999', 'Gameboy advanced', '90.000.000', 'Capcom');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Resident Evil', '1997', 'Game Cube', '50.000.000', 'Capcom');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Horizon Zero Dawn', '2017', 'PlayStation 4', '200.000.000', 'Guerrilla Games');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('The Last of US', '2013', 'PlayStation 3', '250.000.000', 'Santa Monica Studios');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Kirby', '1993', 'Game Cube', '220.000.000', 'Nintendo');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Pikmin', '1996', 'Game Cube', '180.000.000', 'Nintendo');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('GTA', '1997', 'PlayStation 1', '240.000.000', 'Rockstar Games');



