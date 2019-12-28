<?php
$msg=''; $msg2=''; $msg3='';$msg4='';$msg5='';$msg6='';$msg7='';$msg8='';
include('inculdes/header.php');
if(isset($_POST['submit']))
{
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['mail'];
    $date=$_POST['dob'];
    $password=$_POST['pass'];
    $c_password=$_POST['cpass'];
    $image=$_FILES['image']['name'];
    $tmp_image=$_FILES['image']['tmp_name'];
    $checkbox=isset($_POST['check']);
    echo $firstname.'</br>'.$lastname.'</br>'.$email.'</br>'.$date.'</br>'
     .$password.'</br>'.$c_password.'</br>'.$image.'</br>'.$checkbox;
    if(strlen($firstname)<3)
    {
      $msg="<div class='error'>First name must contain atleast 3 characters</div>";

    }
    if(strlen($lastname)<3)
    {
      $msg2="<div class='error'>Last name must contain atleast 3 characters</div>";

    }
   if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $msg3="<div class='error'>Enter valid Email</div>";
     } 
  if(empty($date))
   {
         $msg4="<div class='error'>Please Enter Your Date of Birth </div>";  
  } 
  if(strlen($password)<5) 
  {
    $msg5="<div class='error'>Password must contain atleast 5 characters</div>";
  }    
  if($password!==$c_password)
   {
    $msg6="<div class='error'>Password is not same </div>";    
  }
  if ($image=='')
  {
   $msg7="<div class='error'>Please Upload Profile Image</div>";
  }
  if($checkbox!=='check')
  {
   $msg8="<div class='error'>Please Agree Our Terms And Conditions</div>";
  }
}

?>
<title>Sign Up Form</title>
</head>
<style type='text/css'>
 #body-bg
 {
 background: url("images/Shwapno.jpg") center no-repeat fixed;
 
 }
 .error
 {
     color:red;
 }
 </style>
<body id='body-bg'>
<div class='container'>
 <div class ='login-form col-md-4 offset-md-4'>
   <div class='jumbotron' style='margin-top:20px;padding-top :20px'>
    <h3 align='center'> Sign Up Form</h3><br>
    <form method ='post' enctype="multipart/form-data">
     <div class='form-group'>
     <label>First Name :</label>
     <input type='text' name='fname' placeholder='Your First Name' class='form-control'>
     <?php echo $msg; ?>
     </div>

     <div class='form-group'>
     <label>Last Name :</label>
     <input type='text' name='lname' placeholder='Your Last Name' class='form-control'>
     <?php echo $msg2; ?>
     </div>
     <div class='form-group'>
     <label>Email :</label>
     <input type='email' name='mail' placeholder='Your Email' class='form-control'>
     <?php echo $msg3; ?>
     </div>
     <div class='form-group'>
     <label>Date of Birth:</label>
     <input type='date' name='dob' placeholder='Your Email' class='form-control'>
     <?php echo $msg4; ?>
     </div>
     <div class='form-group'>
     <label>password :</label>
     <input type='password' name='pass' placeholder='Password' class='form-control'>
     <?php echo $msg5; ?>
     </div>
     <div class='form-group'>
     <label>Re-enter Password :</label>
     <input type='password' name='cpass' placeholder='Re-enter Password' class='form-control'>
     <?php echo $msg6; ?>
     </div>
     <div class='form-group' >
     <label>Profile Image:</label>
     <input type='file' name='image'/>
     <?php echo $msg7; ?>
      </div></br>
     <div class='form-group'>
     <input type='checkbox' name='check'/>
     I Agree the terms and conditions
     <?php echo $msg8; ?>
     </div></br>
    <center> <input type='submit' value='Submit' name='submit' class='btn btn-success' /></center>
    </from>
</div>
</div>
</div>
</body>
</html>