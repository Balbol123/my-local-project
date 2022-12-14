<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Project</title>
    <style>
      <?php include_once "../css_files/signup.css"; ?>
    </style>
  </head>
  <body>
    <header>
      <h1 class="logo">Belal</h1>
      <nav>
      <ul class="nav__links">
          <li><a id="lnk1" href="home">Home</a></li>
          <li><a id="lnk2" href="login">Login</a></li>
          <li><a id="lnk3" href="signup">SignUp</a></li>
        </ul>
      </nav>
      <a class="cta" href="contact_us"><button>Contact Us</button></a>
    </header>
    <div class="login-box">
      <h1 class="title">Signup</h1>
      <form action="../inc_files/signup.inc.php" method="POST">
        <div class="input-un">
          <input 
          type="text" 
          name="fullname" 
          autocomplete="off"
          >
          <span>Full Name</span>
        </div>
        <div class="input-un">
          <input 
          type="email" 
          name="email" 
          autocomplete="off">
          <span>E-mail</span>
        </div>
        <div class="input-un">
          <input 
          type="text" 
          name="username" 
          autocomplete="off">
          <span>Username</span>
        </div>
        <div class="input-un">
          <input 
          type="password" 
          name="pwd" 
          autocomplete="off">
          <span>Password</span>
        </div>
        <div class="input-un">
          <input 
          type="password" 
          name="rpwd" 
          autocomplete="off">
          <span>Repeat Password</span>
        </div>
        <input class="sbmt" type="submit" name="submit" value="Create account">
      </form>
    </div>
    <script>
      <?php include_once "../inc_files/js.js"; ?>
    </script>
  </body>
</html>