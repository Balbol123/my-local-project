<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Project</title>
    <style>
      <?php include_once "../css_files/login.css"; ?>
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
      <h1 class="title">Login</h1>
      <form action="../inc_files/login.inc.php" method="POST">
        <div class="input-un">
          <input 
            type="text" 
            name="username"
            id="username" 
            required 
            autocomplete="off"
          >
          <span>Username</span>
        </div>
        <div class="input-un">
          <input 
            type="email" 
            name="email" 
            id="email" 
            required 
            autocomplete="off"
          >
          <span>E-mail</span>
        </div>
        <div class="input-un">
          <input 
            type="password" 
            name="pwd" 
            id="pwd" 
            required 
            autocomplete="off"
          >
          <span>Password</span>
        </div>
        <input 
          class="sbmt" 
          name="submit" 
          type="submit" 
          value="Login"
        >
      </form>
      <div class="lnks">
        <a class="lnk" href="signup">create account?</a>
        <a class="lnk" href="#">Forgot password</a>
      </div>
    </div>
    <script>
      <?php include_once "../inc_files/js.js"; ?>
    </script>
  </body>
</html>