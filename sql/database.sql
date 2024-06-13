CREATE TABLE juegos (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  lanzamiento VARCHAR(100) NOT NULL,
  plataforma VARCHAR(100) NOT NULL,
  ventas INT UNSIGNED NOT NULL,
  desarrollador VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Pokemon', '1995', 'Gameboy', 70000000, 'Nintendo');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Monster Hunter', '1999', 'Gameboy advanced', 90000000, 'Capcom');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Resident Evil', '1997', 'Game Cube', 50000000, 'Capcom');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Horizon Zero Dawn', '2017', 'PlayStation 4', 200000000, 'Guerrilla Games');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('The Last of US', '2013', 'PlayStation 3', 250000000, 'Naughty Dogs');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Kirby', '1993', 'Game Cube', 220000000, 'Nintendo');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('Pikmin', '1996', 'Game Cube', 180000000, 'Nintendo');
INSERT INTO juegos (nombre, lanzamiento, plataforma, ventas, desarrollador) VALUES('GTA', '1997', 'PlayStation 1', 240000000, 'Rockstar Games');



