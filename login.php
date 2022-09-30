<?php
if($_POST)
{
    include 'config.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sUser=mysqli_real_escape_string($conn,$username);
    $sPass=mysqli_real_escape_string($conn,$password);
    // For Security 
    $query="SELECT * From users where username='$sUser' and password='$sPass'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['anything']='something';
        header('location:index.php');
    }
}

?>
<div class="form-container">
<form method="POST">
Username:<br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <input type="submit">

</form>
</div>
<style>
    .form-container{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
    background: #eee;
}

.form-container form{
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0,0,0,.1);
    background: #fff;
    text-align: center;
    width: 500px;
}

.form-container h3{
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 10PX;
    color: #333;
}

.form-container form input,
.form-container form select{
    width: 100%;
    padding: 10px 15px;
    font-size: 17px;
    margin: 8px 0;
    background: #eee;
    border-radius: 5px;
}

.form-container form select option{
    background: #fff;
}

.form-container form .form-btn{
    background: #fbd0d9;
    color: blue;
    text-transform: capitalize;
    font-size: 20px;
    cursor: pointer;
}
.form-container form .form-btn:hover{
    background: blue;
    color: #fff;
}

.form-container form p{
    margin-top: 10px;
    font-size: 20px;
    color: #333;
}
.form-container form p a{
    color: blue;
}
</style>