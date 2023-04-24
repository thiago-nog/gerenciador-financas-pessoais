--douglas

CREATE TABLE aplicacoes_renda_variavel (
    id SERIAL PRIMARY KEY,
    empresa_id INTEGER NOT NULL,
    dthr_aplicacao TIMESTAMP NOT NULL,
    quantidade INTEGER NOT NULL,
    valor_unitario MONEY NOT NULL,
    usuario_id INTEGER NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);
