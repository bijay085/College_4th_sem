CREATE TABLE example_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    price NUMERIC(10, 2),
    string_column VARCHAR(255),
    date_column DATE,
    blob_column BLOB
);

INSERT INTO example_table (string_column, date_column, blob_column) 
VALUES 
('Example String', '2024-05-20', 'binary data');
