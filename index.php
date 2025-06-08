<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>


<div class="login-container">
    <div class="login-left">
        <div class="login-header">
            <h2>Welcome Dear...!</h2>
            <h1>Login</h1>
        </div>
        <?php echo display_msg($msg); ?>
        <form method="post" action="auth_v2.php" class="login-form">
            <div class="input-group">
                <input type="text" class="input-field" name="username" placeholder="username">
            </div>
            <div class="input-group password-group">
                <input type="password" class="input-field" name="password" placeholder="Password">
                <span class="toggle-password">&#128065;</span>
            </div>
            <div class="options">
                <label><input type="checkbox" name="remember"> Remember me</label>
                <a href="#">Forget Password?</a>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
    <div class="login-right">
        <img src="assets/img/background.jpg" alt="Background Image">
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
