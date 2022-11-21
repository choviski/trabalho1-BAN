CREATE TABLE Enderecos(
                          id SERIAL NOT NULL,
                          rua VARCHAR(255) NOT NULL,
                          numero INTEGER NOT NULL,
                          CEP VARCHAR(9) NOT NULL,
                          bairro VARCHAR(255) NOT NULL,
                          cidade VARCHAR(255) NOT NULL,
                          complemento VARCHAR(255),
                          PRIMARY KEY(id)
);

CREATE TABLE Clientes(
                         id SERIAL NOT NULL,
                         nome VARCHAR(255) NOT NULL,
                         fone VARCHAR(13),
                         id_endereco INTEGER NOT NULL,
                         PRIMARY KEY(id),
                         FOREIGN KEY(id_endereco) REFERENCES Enderecos(id)
);

CREATE TABLE Usuarios(
                         id SERIAL NOT NULL,
                         login VARCHAR(255) NOT NULL,
                         senha VARCHAR(255) NOT NULL,
                         email VARCHAR(255) NOT NULL,
                         id_cliente INTEGER NOT NULL,
                         PRIMARY KEY (id),
                         FOREIGN KEY(id_cliente) REFERENCES Clientes(id)
);

CREATE TABLE Hoteis(
                       id SERIAL NOT NULL,
                       nome VARCHAR(255) NOT NULL,
                       fone VARCHAR(13) NOT NULL,
                       id_endereco INTEGER NOT NULL,
                       PRIMARY KEY(id),
                       FOREIGN KEY(id_endereco) REFERENCES Enderecos(id)
);

CREATE TABLE Tipo_quartos(
                             id SERIAL NOT NULL,
                             nome VARCHAR(255) NOT NULL,
                             cama_extra BOOL NOT NULL,
                             PRIMARY KEY(id)
);

CREATE TABLE Precos(
                       id SERIAL NOT NULL,
                       id_hotel INTEGER NOT NULL,
                       id_tipo INTEGER NOT NULL,
                       valor FLOAT NOT NULL,
                       PRIMARY KEY(id),
                       FOREIGN KEY(id_hotel) REFERENCES Hoteis(id),
                       FOREIGN KEY(id_tipo) REFERENCES Tipo_quartos(id)
);

CREATE TABLE Quartos(
                        id SERIAL NOT NULL,
                        id_hotel INTEGER NOT NULL,
                        id_tipo INTEGER NOT NULL,
                        numero INTEGER NOT NULL,
                        andar INTEGER NOT NULL,
                        foto VARCHAR(255) NOT NULL,
                        PRIMARY KEY(id),
                        FOREIGN KEY(id_hotel) REFERENCES Hoteis(id),
                        FOREIGN KEY(id_tipo) REFERENCES Tipo_quartos(id)
);

CREATE TABLE Reservas(
                         id SERIAL NOT NULL,
                         id_cliente INTEGER NOT NULL,
                         id_quarto INTEGER NOT NULL,
                         pago BOOL NOT NULL,
                         data_reserva DATE NOT NULL,
                         data_check_in DATE NOT NULL,
                         data_check_out DATE NOT NULL,
                         PRIMARY KEY(id),
                         FOREIGN KEY(id_quarto) REFERENCES Quartos(id),
                         FOREIGN KEY(id_cliente) REFERENCES Clientes(id)
);

CREATE TABLE Estadias(
                         id SERIAL NOT NULL,
                         id_cliente INTEGER NOT NULL,
                         id_quarto INTEGER NOT NULL,
                         id_reserva INTEGER,
                         data_check_in DATE NOT NULL,
                         data_check_out DATE NOT NULL,
                         PRIMARY KEY(id),
                         FOREIGN KEY(id_quarto) REFERENCES Quartos(id),
                         FOREIGN KEY(id_cliente) REFERENCES Clientes(id),
                         FOREIGN KEY(id_reserva) REFERENCES Reservas(id)
);

CREATE TABLE Empregados(
                           id SERIAL NOT NULL,
                           nome VARCHAR(255) NOT NULL,
                           PRIMARY KEY(id)
);

CREATE TABLE Servicos(
                         id SERIAL NOT NULL,
                         nome VARCHAR(255) NOT NULL,
                         valor FLOAT NOT NULL,
                         id_empregado INTEGER NOT NULL,
                         PRIMARY KEY(id),
                         FOREIGN KEY(id_empregado) REFERENCES Empregados(id)
);

CREATE TABLE Estadia_has_servicos(
                                     id SERIAL NOT NULL,
                                     id_estadia INTEGER NOT NULL,
                                     id_servico INTEGER NOT NULL,
                                     data_hora TIMESTAMP NOT NULL,
                                     PRIMARY KEY(id),
                                     FOREIGN KEY(id_estadia) REFERENCES Estadias(id),
                                     FOREIGN KEY(id_servico) REFERENCES Servicos(id)
);
