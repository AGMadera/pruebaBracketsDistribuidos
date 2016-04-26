CREATE TABLE cliente(
id_cliente int AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(150),
    email varchar(150)
);

CREATE TABLE amortizacion(
id_amort int AUTO_INCREMENT PRIMARY KEY,
    id_cliente int,
    saldo float,
    interes_anual integer,
    num_meses INTEGER,
    CONSTRAINT FK_id_cliente  foreign key (id_cliente) REFERENCES cliente(id_cliente)
);