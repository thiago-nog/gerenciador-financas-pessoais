CREATE TABLE tipos_despesa (
    id SERIAL PRIMARY KEY,
    descricao VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO tipos_despesa (descricao)
VALUES
    ('ALUGUEL'),
    ('PRESTAÇÃO CASA'),
    ('ENERGIA'),
    ('ÁGUA'),
    ('ALIMENTAÇÃO');
