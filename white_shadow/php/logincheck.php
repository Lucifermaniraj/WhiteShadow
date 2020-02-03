<?php
include_once '../config.php';
session_start();

if(isset($_POST['login-submit'])){
login();

}




//codes for login function
function login(){
    $con=connect_db();

    $myusername =trim($_POST['username']," ");
    $mypassword = $_POST['password']; 

    // prepare and bind
    $stmt = $con->prepare('SELECT * FROM tb_users WHERE user_name = ?');
    $stmt->bind_param("s", $user);

    // set parameters and execute
    $user =  $myusername;
    $stmt->execute();

    $arr = [];
    $result= $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["user_id"]. " - Name: " . $row["username"]. " Password: " . $row["pass"]." email: ".$row["email"]." Permission: ".$row["permission"]. "<br>";
       $arr[] = $row;
    }
    //var_export($arr);
    $stmt->close();
    $con->close();
    $con=null;

    if(count($arr)>0){
        if(password_verify($mypassword, $arr[0]['user_password'])){
            $_SESSION['login_user'] = $arr[0]['user_name'];
            header('location: ../admin/');
        }
        else
        {
            header('location: ../login.php?loginerror=true');
        }
        
        
    }
    else{
        header('location: ../login.php?loginerror=true');
    }
   
}

?>