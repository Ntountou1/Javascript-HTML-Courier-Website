
<?php


    $userName = $_POST['userName'];
	$fullName = $_POST['fullName'];
	$email = $_POST['email'];

    $conn = new mysqli('localhost','root','','myphpdb');

    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}else {
        //$stmt = $conn->prepare("insert into registration(userName, fullName, email) values($userName, $fullName, $email)");
        //$stmt->bind_param("sss", $userName, $fullName, $email);
       // $stmt->execute();
        //echo "Registration successfully...";
       // $stmt->close();
        //$conn->close();
        $sql = "INSERT INTO registration (userName, fullName, email) VALUES ('{$userName}', '$fullName', '$email')";

        
    }

?>