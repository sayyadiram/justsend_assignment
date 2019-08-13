<?php 
    session_start();
    //inlcude file
    include_once('conn.php');
    //fetch the record to be updated 
    $code=$_SESSION['random_code'];	
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Justsend</title>
</head>
<body>
    <div class="contaner">
        
        <div class="main">
            <h1 class="title">JUstSend</h1>
            <div class="link">
                <h2>Meassage code</h2>
            </div>   <!--close links-->
            <div class="link">
                <input type="text" value="<?php echo $code; ?>">
            </div>
            
        </div><!--close main-->
    
    </div><!--close container-->
</body>
</html>