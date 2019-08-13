<?php
    session_start();
    include'conn.php';
    $db=mysqli_connect($servername,$username,$password,$dbname);
     
    //delete recrds
      if(isset($_GET['del'])){
        $id=$_GET['del'];
        
        mysqli_query($db,"DELETE FROM  message WHERE msg_id=$id");
    
        $_SESSION['msg']="Details Deleted";
    
        header('location:index.php');
    }   

   
?>
