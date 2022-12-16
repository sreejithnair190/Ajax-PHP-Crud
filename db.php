<?php

class Database{
    private $dsn = "mysql:host=localhost;dbname=test2";
    private $username = "root";
    private $password = "";
    public $conn;

    public function __construct(){
        try{
            $this->conn = new PDO($this->dsn, $this->username, $this->password);
            // $this->conn = new mysqli($server,$username,$password,$db);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function insert($fname, $lname, $email, $phone){
        $sql = "INSERT INTO users(fname,lname,email,phone) VALUES(:fname,:lname,:email,:phone)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['fname'=>$fname,'lname'=>$lname,'email'=>$email,'phone'=>$phone]);
        // echo $fname, $lname, $email, $phone;
        // $result = $this->conn->query($sql);
        return true;
    }

    public function read()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $row ){
            $data[] = $row;
        }
        return $data;
    /**
     * $result = $this->conn->query($sql);
     * $numRows = $result->num_rows;
     * if($numRows>0){
     *      while($row = $result){
     *          $data[] = $row;
     *      }
     *      return $data;
     * }
     */
    }

    public function getUserById($id){
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id,$fname, $lname, $email, $phone){
        $sql = "UPDATE users SET fname = :fname, lname = :lname, email = :email, phone = :phone WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['fname' => $fname,'lname' => $lname,'email' => $email,'phone' => $phone,'id' => $id]);
        return true;
    }

    public function delete($id){
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        return true;
    }

    public function totalRowCount(){
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return true;
    }
}
?>