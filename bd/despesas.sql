CREATE TABLE despesas (
    id INTEGER PRIMARY KEY,
    valor MONEY NOT NULL,
    data_vencimento DATE NOT NULL,
    tipo_despesa_id INTEGER NOT NULL,
    descricao VARCHAR(100) NOT NULL,
    usuario_id INTEGER NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (tipo_despesa_id) REFERENCES tipos_despesa (id)
);
