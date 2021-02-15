<?php
    include_once 'conect.php';
?>
<html>

<head>
    <title>
        Write to Us
    </title>
</head>
<link rel="stylesheet" href="css/header.css">
<body>
<header>
        <nav id="navigations">
        <a id="name" >HOSPITAL MANAGEMENT SYSTEM</a>
        <a id="home" href="index.php">HOME</a>
        <a id="contact" href="contact.php">CONTACT</a>
        <a id="register" href="regist.php">REGISTER</a>
</header>
    
    <main>
        <br><br><br><br>
        <center><b>Contact us</b></center>
        <div>
            <center>
                <form id="form1" action="contact.php" , method="Post">
                Name
                    <input type="text" name="name" placeholder="your name"><br><br>

                Email
                    <input type="email" name="email" placeholder="email"><br><br>
                Topic
                    <input type="text" name="subject" placeholder="subject"><br>
                Message<textarea name="message" placeholder="Message">
                </textarea><br/>
                    <button type="submit" id="send" name="send">send</button>
                </form>
            </center>
        </div>
        <br/></main>


        <?php
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        ?>

<?php
            $sql="INSERT INTO posts(email, username, content) values ('$email', '$name', '$message');";
            if(mysqli_query($conn,$sql)){
                echo"<script>alert('Your Message has been successfully sent, we will review and get back to you in moment');</script>";
            }
            else
            {
               echo "ERROR:". $sql. "<br>". mysqli_error($conn);
            }
            ?>
 



</body>

</html>