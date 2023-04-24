CREATE TABLE usuarios (
    id SERIAL,
    login VARCHAR (30) NOT NULL UNIQUE,
    password VARCHAR (256) NOT NULL,
    PRIMARY KEY (id)
	
);
