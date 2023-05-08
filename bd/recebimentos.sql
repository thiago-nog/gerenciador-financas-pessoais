CREATE TABLE recebimentos (
    id INTEGER PRIMARY KEY,
    valor MONEY NOT NULL,
    data_recebimento DATE NOT NULL,
    usuario_id INTEGER NOT NULL,
    tipo_recebimento_id INTEGER NOT NULL,
    descricao VARCHAR(100) NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (tipo_recebimento_id) REFERENCES tipos_recebimento(id)
);
