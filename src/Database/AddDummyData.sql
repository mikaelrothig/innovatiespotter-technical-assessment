INSERT INTO companies (name, website, address, source, inserted_at) VALUES
    ('Google', 'https://google.com', '1600 Amphitheatre Parkway, Mountain View, CA', 'API_1', NOW()),
    ('google', 'http://www.google.com', '1600 Amphitheatre Parkway, Mountain View, CA', 'SCRAPER_2', NOW()),
    ('Google Inc.', 'https://google.com', '1600 Amphitheatre Parkway, Mountain View, CA', 'MANUAL', NOW()),

    ('Apple', 'https://apple.com', 'One Apple Park Way, Cupertino, CA', 'API_1', NOW()),
    ('Apple Inc.', 'http://apple.com', 'One Apple Park Way, Cupertino, CA', 'SCRAPER_2', NOW()),

    ('Microsoft', 'https://microsoft.com', 'Redmond, WA', 'API_1', NOW()),
    ('microsoft corp', 'https://microsoft.com', 'Redmond, WA', 'MANUAL', NOW()),

    ('Amazon', 'https://amazon.com', 'Seattle, WA', 'SCRAPER_2', NOW()),
    ('Amazon.com', 'https://amazon.com', 'Seattle, WA', 'API_1', NOW()),

    ('Tesla', 'https://tesla.com', '3500 Deer Creek Road, Palo Alto, CA', 'MANUAL', NOW()),

    ('OpenAI', 'https://openai.com', 'San Francisco, CA', 'API_2', NOW()),
    ('OpenAI Inc.', 'https://openai.com', 'San Francisco, CA', 'SCRAPER_1', NOW());