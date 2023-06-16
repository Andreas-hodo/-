<?php
$host = "localhost";
$dbname = "phpmysqltutorial";
$username = "root";
$password = "";



try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "Conection Failed: ".$e;
}
$KH = $_POST["KH"];
$KM1 = $_POST["KM1"];
$KX1 = $_POST["KX1"];
$KC = $_POST["KC"];
$label_week = $_POST["label_week_hidden"];
$label_day = $_POST["label_day_hidden"];
$label_month = $_POST["label_month_hidden"];
$label_year = $_POST["label_year_hidden"];
$date_2  = $_POST["date_2_hidden"];
$hours  = $_POST["hours_hidden"];  
$date = $_POST["date_hidden"];

try{
        
       $sql = "INSERT INTO data VALUES('','$KH','$KM1','$KX1',' $KC','$label_week','$label_day','$label_month','$label_year',' $date_2','$hours','$date')";
    $conn->query($sql);
//$sql = "INSERT INTO customers (firstname,lastname,tel,email,balance) VALUES('Tech','Code','123123','techandcode@gmail.com','998')";
//$sql = "UPDATE customers SET tel = '2345678'";
//$sql = "DELETE FROM customers WHERE id = 0";
$sql = "SELECT * FROM data;";
$data = $conn->query($sql);   
} catch (PDOException $e){
    echo "Query Failed: ".$e;
}

$row = $data->fetch();





