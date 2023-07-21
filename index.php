<?php

require_once('db.php');


class Crud extends Connection{
    public function insert($name, $email, $password)
    {
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if (mysqli_query($this->conn, $sql)) {
            echo "Data Inserted";
        } else {
            echo "Data Not Inserted";
        }
        
    }

    public function select($name)
    {
        $sql = "SELECT * FROM users WHERE name = '$name'";
        $query = mysqli_query($this->conn, $sql);
        $fetch = mysqli_fetch_array($query);
        echo 'Name : ' . $fetch['name'] . '<br>';
        echo 'Email : ' . $fetch['email'] . '<br>';
        echo 'Password : ' . $fetch['password'] . '<br>';
         
    }

    public function update($cemail ,$name, $email, $password)
    {
        $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE email = '$cemail'";
        $query = mysqli_query($this->conn, $sql);
        if (mysqli_query($this->conn, $sql)) {
            echo "Data Updated";
        } else {
            echo "Data Not Updated";
        }
    }

    public function delete($email)
    {
        $sql = "DELETE FROM `users` WHERE email = '$email'";
        $query = mysqli_query($this->conn, $sql);
        if (mysqli_query($this->conn, $sql)) {
            echo "Data Deleted";
        } else {
            echo "Data Not Deleted";
        }
    }
}

$crud = new Crud('localhost', 'root', '', 'oop_crud');
// $crud->insert('anik', 'anik@gmail.com', '123456');
// $crud->select('wadud');
// $crud->update('ahad@gmail.com', 'abdul ahad islam', 'ahad@gmail.com', '123456');
$crud->delete('anik@gmail.com');
