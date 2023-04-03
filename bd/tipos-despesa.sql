CREATE TABLE tipos_despesa (
    id INTEGER PRIMARY KEY,
    descricao VARCHAR(50) NOT NULL
);

--ALTER TABLE despesas ADD CONSTRAINT fk_tipo_despesa_id FOREIGN KEY (tipo_despesa_id) REFERENCES tipos_despesa(id) ON DELETE CASCADE;
--pode ser usado  caso um tipo de despesa seja excluído da tabela tipos_despesa, todas as despesas que o referenciam também serão excluídas automaticamente
--opcional
