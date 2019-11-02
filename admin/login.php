<?php
include "includes/header.php"
 ?>
<body>
      <div class="row">
    <div class="col l6 offset-l3 m8 offset-m2 s12">
      <div class="card-panel center #448aff blue accent-2" style="margin-bottom: 0px">
      <ul class="tabs #448aff blue accent-2">
        <li class="tab"><a href="#login" class="white-text">Login</a></li>
        <li class="tab"><a href="#signup" class="white-text">Signup</a></li>
      </ul>
      </div>
      </div>

      <div class="col l6 offset-l3 m8 offset-m2 s12" id="login">
      <div class="card-panel center" style="margin-top: 1px">
        <h5>Login to continue</h5>
        <?php
        if(isset($_SESSION['message']))
        {
          echo $_SESSION['message'];
          unset($_SESSION['message']);
        }
        ?>
        <div class="row">
    <form class="col s12" action="login_check.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">person</i>
          <input name="username" type="text" class="validate" id="username">
          <label for="text" data-error="Invalid Username" data-success="Valid Username">Enter Username</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">https</i>
          <input id="password" type="password" class="validate" name="password">
          <label for="password" data-error="Invalid Username" data-success="Valid Username">Enter Password</label>
        </div>

        <input type="submit" name="login" class="btn #448aff blue accent-2" value="Login">
      </div>
    </form>
  </div>
      </div>
      </div>
      <div class="col l6 offset-l3 m8 offset-m2 s12" id="signup">
      <div class="card-panel center" style="margin-top: 1px">
        <h5>SignUp Now</h5>
         <div class="row">
    <form class="col s12" action="signup.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input name="email" type="email" class="validate" id="email">
          <label for="email" data-error="Invalid Email" data-success="Valid Email">Enter Email</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">person</i>
          <input name="username" type="text" class="validate" id="username">
          <label for="text" data-error="Invalid Username" data-success="Valid Username">Enter Username</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">https</i>
          <input id="password" type="password" class="validate" name="password">
          <label for="password" data-error="Invalid password" data-success="Valid password">Enter Password</label>
        </div>
        <input type="submit" name="signup" class="btn #448aff blue accent-2" value="Sign Up">

      </div>
    </form>
  </div>
      </div>
      </div>

    
  </div>
<?php
include "includes/footer.php"
 ?>

  

      