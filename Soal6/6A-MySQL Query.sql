//Create Database
CREATE DATABASE tes_arkademy;





//Create Table
CREATE TABLE IF NOT EXISTS nama (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    id_work INT,
    id_salary INT,
    CONSTRAINT fk_work_nama
    FOREIGN KEY (id_work)
        REFERENCES work(id),
    CONSTRAINT fk_salary_nama
    FOREIGN KEY (id_salary)
        REFERENCES kategori(id)
);


CREATE TABLE IF NOT EXISTS work (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    id_salary INT,
    CONSTRAINT fk_salary
    FOREIGN KEY (id_salary)
        REFERENCES kategori(id)
);

CREATE TABLE IF NOT EXISTS kategori (
    id INT AUTO_INCREMENT PRIMARY KEY,
    salary INT NOT NULL
);




//Insert Data

INSERT INTO kategori(salary)
VALUES (10000000),
(12000000);

INSERT INTO work (name, id_salary)
VALUES ('Frontend DEV', 1)
('Backend DEV', 2);

INSERT INTO nama(name, id_work, id_salary)
VALUES ('Bintang', 1, 1),
('Tasya', 2, 2);




//Query Data
SELECT nama.name AS 'name', work.name AS 'work', kategori.salary AS 'salary' from nama, work, kategori
WHERE work.id = nama.id_work AND kategori.id = nama.id_salary
GROUP BY nama.id