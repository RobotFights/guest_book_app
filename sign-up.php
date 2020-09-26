<!DOCTYPE html>
<html>
<style>

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/*  signup buttons  */
 .signupbtn {  
  width: 100%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

p.success{
  color: green;
}

/* Change style for signup button on extra small screens */
@media screen and (max-width: 300px) {
   .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<div class='parent-div'> 
<?php  
        include 'header.php';
       include 'database.php';      
      
?>

<form action="sign-up.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>    
    <p>Please fill in this form to create an account.</p>
   
     
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
    <div class="clearfix">      
      <button type="submit" name='sign-up' class="signupbtn">Sign-Up</button>
    </div>
  </div>
</form>
</div> 
      <?php 
        // include 'footer.php';
      ?>
</body>
</html>
