<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="Cs/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="Cs/Register.css" />

  <script src="Js/Register.js"></script>
  <script src="Js/jQuery3.3.1.js"></script>

  <style type="text/css">

    body{
      margin:5%;
    }

    .error{
      color: red;
    }

  </style>

  <title>Register</title>
</head>

<body>
    <?php
    include_once "PHP/RegisterBack.php";
    ?>
</div>
  <div class="container">
    <form id="Registration" name="RegistrationForm" class="" enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return ValidateForm(document.RegistrationForm);">
      <div class="form-group ">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" name="firstname" value="" id="first_name" placeholder="First Name" />
        <small id="firstNameError" class="error hide"></small>
      </div>
      <div class="form-group ">
        <label for="last_name" >Last Name</label>
        <input type="text" class="form-control" name="lastname" value="" id="last_name" placeholder="Last Name" />
        <small id="lastNameError" class="error hide">dsad</small>
      </div>

      <div class="form-group">
        <label for="txtemail">Email address</label>
        <input type="text" name="email" class="form-control" value="" id="txtemail" placeholder="Email" />
        <small id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else.</small>
        <small id="emailError" class="error hide"></small>
      </div>

      <div class="form-group">
        <label for="txtpass">Password</label>
        <input type="password" name="passwd" class="form-control" value="" id="txtpass" placeholder="Password" />
        <small id="passwordError" class="error hide"></small>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control" name="cpasswd" value="" id="txtcpass" placeholder="Confirm Password" />
        <small id="confirmError" class="error hide"></small>
      </div>


      <div class="form-group">
        <span class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="boker_or_owner" id="booker" value="booker"
            checked>
          <label class="form-check-label" for="booker">Booker</label>
        </span>
        <span class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="boker_or_owner" id="hotel_owner" value="hotel_owner">
          <label class="form-check-label" for="hotel_owner">Hotel Owner</label>
        </span>
      </div>
      
      <span class="error"> <?php echo $error ?> </span>
      <button class="btn btn-lg btn-primary btn-block" type="submit" >Register</button>
    </form>
  </div>
</body>

</html>