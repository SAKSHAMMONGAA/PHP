<?php

class database{
  private $servername = "172.31.22.43";
  private $username   = "Saksham200520311";
  private $password   = "D7RvopldSu";
  private $database   = "Saksham200520311";
  public  $con;


  // Database Connection
  public function __construct()
  {
    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
    if(mysqli_connect_error()) {
      trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
    }else{
      return $this->con;
    }
  }

  // Insert customer data into customer table
  public function insertData($post)
  {
    $name = $this->con->real_escape_string($_POST['name']);
    $email = $this->con->real_escape_string($_POST['email']);
    $phone = $this->con->real_escape_string($_POST['phone']);
    $query="INSERT INTO foodie(name,email,phone) VALUES('$name','$email','$phone')";
    $sql = $this->con->query($query);
    if ($sql==true) {
      header("Location:index.php?msg1=insert");
    }else{
      echo "Registration failed try again!";
    }
  }

  // Fetch customer records for show listing
  public function displayData()
  {
    $query = "SELECT * FROM foodie";
    $result = $this->con->query($query);
    if ($result->num_rows > 0) {
      $data = array();
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }else{
      echo "No records";
    }
  }

  // Fetch single data for edit from customer table
  public function displyaRecordById($id)
  {
    $query = "SELECT * FROM foodie WHERE id = '$id'";
    $result = $this->con->query($query);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row;
    }else{
      echo "No Record found";
    }
  }

  // Update customer data into customer table
  public function updateRecord($postData)
  {
    $name = $this->con->real_escape_string($_POST['uname']);
    $email = $this->con->real_escape_string($_POST['uemail']);
    $phone = $this->con->real_escape_string($_POST['uphone']);
    $id = $this->con->real_escape_string($_POST['id']);
    if (!empty($id) && !empty($postData)) {
      $query = "UPDATE foodie SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id'";
      $sql = $this->con->query($query);
      if ($sql==true) {
        header("Location:index.php?msg2=update");
      }else{
        echo "Registration failed !";
      }
    }

  }

  // Delete customer data from customer table
  public function deleteRecord($id)
  {
    $query = "DELETE FROM foodie WHERE id = '$id'";
    $sql = $this->con->query($query);
    if ($sql==true) {
      header("Location:index.php?msg3=delete");
    }else{
      echo "Record does not delete try again";
    }
  }
}
