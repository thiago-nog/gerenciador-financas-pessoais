CREATE TABLE tipos_recebimento (
    id SERIAL PRIMARY KEY,
    descricao VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO tipos_recebimento (descricao) VALUES
('SALÁRIO'),
('ALUGUEL'),
('OUTROS');