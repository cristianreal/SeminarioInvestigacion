-- JORNADA = 1->Matutina, 2->Vespertina
DROP TABLE IF EXISTS vendedor;
CREATE TABLE vendedor(
	pk_vendedor			INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	fecha_nacimiento	DATE,
	fecha_vinculacion	DATE,
	jornada				INT,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);