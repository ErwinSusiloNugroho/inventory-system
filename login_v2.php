<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>

<?php include_once('layouts/header.php'); ?>
<div class="login-wrapper">
    <div class="login-box">
        <div class="login-title">
            <h1>Masuk</h1>
            <p>Akses sistem Anda sekarang</p>
        </div>
        <?php echo display_msg($msg); ?>
        <form method="post" action="auth_v2.php" class="login-form">
            <div class="input-wrapper">
                <label for="username" class="input-label">Username</label>
                <input type="text" class="input-field" name="username" placeholder="Username Anda">
            </div>
            <div class="input-wrapper">
                <label for="password" class="input-label">Password</label>
                <input type="password" class="input-field" name="password" placeholder="Kata sandi Anda">
            </div>
            <div class="button-wrapper">
                <button type="submit" class="login-button">Login</button>
            </div>
        </form>
    </div>
</div>
<?php include_once('layouts/header.php'); ?>
