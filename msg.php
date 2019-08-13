<!DOCTYPE html>
<html>
<head>
	<title>JUstSend</title>
	<link rel="stylesheet" type="text/css" href="./asset/css/style.css">
</head> 
<body>
	<div class="contaner1">
        
        <form method="post" action="msg_details.php"  enctype="multipart/form-data" class="main1">
           
            <div class="link">
                <input  type="text" name="name"  placeholder="Your name"><br>
            </div>
            <div class="link">
                <input type="email" name="mail_id"  placeholder="Your email"><br>
            </div>
            <div class="link"> 	
                <input  type="text" name="subject" placeholder="Subject"><br>
            </div>
            <div class="link"> 	
                <textarea  cols="30"  rows="4" name="msg" placeholder="Message"></textarea>
            </div> 	
            <div class="link">
                <!-- <label for="img1">pict</label> -->
                    <input name="pict_file" type="file" placeholder="select image" class="#img1">
                    
                <!-- <label for="file">file</label> 
                <input  name="files" type="file"  placeholder="select file">-->
            </div>
            <!--<div class="link">
                <label for="profile">file</label>
                <input class="btn2" name="files" type="file"  placeholder="select file">
            </div>-->
            
            <div class="links">
                <button class="btn read" name="submit" type="submit">Send</button> 
            </div>
        
        </form><!--close form-->
   
   </div><!--close container-->
</body>
</html>