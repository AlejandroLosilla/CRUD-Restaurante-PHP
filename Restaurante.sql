REATE DATABASE Restaurante;

CREATE TABLE Menu(
plato VARCHAR(50),
id INT PRIMARY KEY,
precio INT);

INSERT INTO Menu VALUES ('Hamburguesa', 01, 5);
INSERT INTO Menu VALUES ('Pollo con curry', 02, 10);
INSERT INTO Menu VALUES ('Fillete empanado', 03, 5);
INSERT INTO Menu VALUES ('Boquerones', 04, 12);
INSERT INTO Menu VALUES ('Patata fritas', 05, 3);
