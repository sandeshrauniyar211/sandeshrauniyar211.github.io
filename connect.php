 <?php
    $fname = $_POST['fname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

// DATABASE CONNECTION

$connection = new mysqli('localhost','root','','reg');
if($connection->connect_error){
    die('Connection Failed  :'.$connection->connect_error);
}
else{
    $stmt = $connection->prepare("insert into reg(fname, number, email, password) values(?,?,?,?)");
    $stmt->bind_param("siss",$fname, $number,$email, $password);
    $stmt->execute();
    header("Location:https://www.google.com/");
    echo "registration successulll";
    $stmt->close();
    $connection->close();
}
?>    