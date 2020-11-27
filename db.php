<?php

require_once "config.php";

class Database extends Config{
    // Insert User into DB
    public function insert($fname, $lname, $email, $phone){
        try{
            $sql = "INSERT INTO oo_users(first_name, last_name, email, phone) VALUES(?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$fname, $lname, $email, $phone]);
            return true;
        }catch(PDOException $e){
            die("Error: " . $e->getMessage());
        }
    }
}