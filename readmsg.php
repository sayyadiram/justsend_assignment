<?php
    //session_start();
    include'conn.php';
    $db=mysqli_connect($servername,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./asset/css/style.css">
    <title>JUstSend</title>
</head>
<body>
    <div class="contaner1">
       <div class="abc">
        <?php 
            if(isset($_POST['submit'])){
                
                $random_code=$_POST['random_code'];
                
                $ans="SELECT name,mail_id,subject,msg,image,msg_id FROM  message WHERE random_code='$random_code'";
                $id="";
                $res=mysqli_query($db,$ans);        
                
                if(mysqli_num_rows($res) > 0){
                
                    while($roww = mysqli_fetch_array($res)) {
                        $id=$roww[5];
                        echo('
                            <h1 class="title">JUstSend</h1>
                            <lable>Name :</lable>
                            '.$roww[0]." <br>
                                <lable>Email :</lable>
                                ".$roww[1].'<br>
                                 <lable>Subject :</lable>
                            '.$roww[2].'<br>
                                <lable>Message :</lable>
                            '.$roww[3].'<br>
                            <img src="data:image/jpg;base64,'.base64_encode(  $roww[4] ).'"><br>
                        ');
                    }//close while

                }//close if mysqli_num_rows

            }//close if submit
        ?>
        <div class="link">
                <a href="deletmsg.php?del=<?php echo  $id; ?>" class="start"> Delete Message</a>
        </div>
        <div class="link">
                <a href="#" class="read">Read a Message</a> 
        </div>
        
       </div> 
    </div><!---close container-->
</body>
</html>