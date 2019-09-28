<?php 
    $servername = "localhost";
    $username = "mugglebyte";
    $password = "87654321";
    $db_name = "tes_arkademy";

    //create connection
    $conn = new mysqli($servername, $username, $password, $db_name);
    //check connection
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }

    function createTable($conn){
        //sql to create KATEGORI
        $sql = "CREATE TABLE IF NOT EXISTS kategori (
            id INT AUTO_INCREMENT PRIMARY KEY,
            salary INT NOT NULL
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table created successfully</br>";
        } else {
            echo "ERROR</br>".$conn->error;
        }

        //CREATE TABLE WORK
        $sql = "CREATE TABLE IF NOT EXISTS work (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            id_salary INT,
            CONSTRAINT fk_salary
            FOREIGN KEY (id_salary)
                REFERENCES kategori(id)
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table created successfully</br>";
        } else {
            echo "ERROR</br>".$conn->error;
        }

        //CREATE TABLE NAMA
        $sql = "CREATE TABLE IF NOT EXISTS nama (
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
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table created successfully</br>";
        } else {
            echo "ERROR</br>".$conn->error;
        }
    }

    function insertData($conn){
        //INSERT DATA

        $sql = "INSERT INTO kategori(salary)
        VALUES (10000000),
        (12000000);";

        if ($conn->query($sql) === TRUE) {
            echo "Insert Data successfully</br>";
        } else {
            echo "ERROR</br>".$conn->error;
        }


        $sql = "INSERT INTO work (name, id_salary)
        VALUES ('Frontend DEV', 1),
        ('Backend DEV', 2);";

        if ($conn->query($sql) === TRUE) {
            echo "Insert Data successfully</br>";
        } else {
            echo "ERROR</br>".$conn->error;
        }
        

        $sql = "INSERT INTO nama(name, id_work, id_salary)
        VALUES ('Bintang', 1, 1),
        ('Tasya', 2, 2);";

        if ($conn->query($sql) === TRUE) {
            echo "Insert Data successfully</br>";
        } else {
            echo "ERROR</br>".$conn->error;
        }
    }

    function dbQuery($conn){
        $sql = "SELECT nama.name AS 'name', work.name AS 'work', kategori.salary AS 'salary' from nama, work, kategori
        WHERE work.id = nama.id_work AND kategori.id = nama.id_salary
        GROUP BY nama.id";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            //output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " | work: " . $row["work"]. " | salary: " . $row["salary"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    createTable($conn);
    insertData($conn);
    dbQuery($conn);

    

    $conn->close();

?>