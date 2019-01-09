<?php 
require "db.php";

$data = $_POST;
if( isset($data['do_login']) )
{
 $errors = array();
 $user = R::findOne('user','login=?',array($data['login']));
 if( $user )
{
 //login existe 
 if ( password_verify($data['password'], $user->password) )
{
    //tout va bien , avec le login
    $_SESSION['logged_user'] = $user;
    echo '<div style="color:green;font-weight:bold">VOUS ETES CONNECTER SUR 
    <form style="display: inline-block;" action="http://localhost/Projet%20Back-End%20(copie)/index.php">
   <input type="submit" value="E-SPORT">
    </form></div><hr>';


}else
{
    $errors[] = 'PASSWORD INCORRECT';
}

}else
{
 $errors[] = 'IL NEXISTE PAS USER AVEC CE LOGIN';
  }

if( ! empty($errors) )
{
 echo '<div style="color:red;font-weight:bold">'.array_shift($errors).'</div><hr>';
    
}


}

?>

<link rel="stylesheet" href="style-incsrp.css">

<div class="login">
    <h1>Login to E-sport</h1>
<form action="login.php" method="POST">
    
<p>  
    <p><strong>Login</strong>:</p>
    <input type="text" name="login" value="<?php echo @$data['login'];?>">
</p>  

<p>  
    <p><strong>Password</strong>:</p>
    <input type="password" name="password" value="<?php echo @$data['password'];?>">
</p>  

<p style="text-align: center;">
   <form action="index.php" method="post" style="text-align: center;"> 
<input  type="submit" value="CONNEXION" name="do_login">
</form>


</p>

</form>
</div>