CREATE INDEX idx_email ON customers (email);
SHOW INDEX FROM customers;
DROP INDEX idx_email ON customers;



-- Total amount sold
SELECT SUM(amount_sold) AS total_amount_sold FROM sales;

-- Average amount sold per product
SELECT AVG(amount_sold) AS avg_amount_sold_per_product FROM sales;

-- Count of products sold
SELECT COUNT(product_id) AS total_products_sold FROM sales;




-- Order students by marks in descending order
SELECT * FROM students ORDER BY marks DESC;
-- Group students by class and calculate average marks for each class
SELECT class, AVG(marks) AS avg_marks FROM students GROUP BY class;


-- Syntax for sharding table across multiple servers
CREATE TABLE sharded_table (
    id INT PRIMARY KEY,
    column1 VARCHAR(255),
    ...
)
SHARD KEY (id);
