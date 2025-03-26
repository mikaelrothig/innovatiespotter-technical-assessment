CREATE TABLE companies (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255),
    website VARCHAR(255),
    address TEXT,
    source VARCHAR(50),
    inserted_at TIMESTAMP DEFAULT NOW()
);
CREATE TABLE normalized_companies (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) UNIQUE,
    canonical_website VARCHAR(255),
    address TEXT
);