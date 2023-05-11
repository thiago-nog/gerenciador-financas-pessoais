CREATE TABLE aplicacoes_renda_fixa (
    id SERIAL PRIMARY KEY,
    valor_aplicado MONEY NOT NULL,
    data_aplicacao DATE NOT NULL,
    valor_atual MONEY NOT NULL,
    usuario_id INTEGER NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) 
);

INSERT INTO aplicacoes_renda_fixa(
    valor_aplicado, 
    data_aplicacao, 
    valor_atual, 
    usuario_id)
VALUES 
    ('1000', '20230101', '2500', '1');
