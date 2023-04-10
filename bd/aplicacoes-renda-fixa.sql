CREATE TABLE aplicacoes_renda_fixa{
  id SERIAL,
  valor_aplicado MONEY,
  data_aplicacao DATE,
  valor_atual money,
  usuario_id INTEGER,
  primary key (id)
  };
