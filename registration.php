<?php

    $name = $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $password = $_POST["password"];
    
    require_once 'connect.php';

$findexist="select * from registration where name='$name'";

        $resultsearch=mysqli_query($conn,$findexist);
    if(mysqli_num_rows($resultsearch)>0)
    {
           while($row=mysqli_fetch_array($resultsearch))
          {
              $result["success"] = "3";
              $result["message"] = "user Already exist";

              echo json_encode($result);
              mysqli_close($conn);
          }
  }
else{

    $sql = "INSERT INTO registration (name,email,phone,password) VALUES ('$name','$email','$phone','$password');";

    if ( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "Registration success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {
        $result["success"] = "0";
        $result["message"] = "error in Registration";
        echo json_encode($result);
        mysqli_close($conn);
    }
}

?>