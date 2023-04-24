CREATE TABLE aplicacoes_renda_fixa (
    id SERIAL,
    valor_aplicado MONEY,
    data_aplicacao DATE,
    valor_atual MONEY,
    usuario_id INTEGER,
    primary key (id)
);
