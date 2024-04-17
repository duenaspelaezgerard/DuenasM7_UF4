CREATE TABLE nasa (
	id SERIAL PRIMARY KEY NOT NULL,
	idAPI VARCHAR(255),
    date TIMESTAMP,
    dataset VARCHAR(255),
    planet VARCHAR(255),
    service_version VARCHAR(255)
);