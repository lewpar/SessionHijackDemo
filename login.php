<?php
// CREDITS: https://github.com/Fred-Khan/Cybersecurity_Session-Hijacking_Demo
session_start();
$hasError = false;

// If the user is logged in, redirect to profile.
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hasError = false;

    $username = strtolower($_POST['username']);
    $password = strtolower($_POST['password']);

    if (($username == 'hacker' && $password == 'hunter1') ||
        ($username == 'danny' && $password == 'password1')) {
        $_SESSION['user'] = $username;
        header('Location: profile.php');
    }
    else {
        $hasError = true;
    }
}
?>

<?php 
$title = "Login";
include 'templates/header.php'; 
?>
<div class="page-content" style="justify-content: center">
    <h2>Login</h2>

    <form method="POST" action="login.php">
        <div class="form-group">
            <label>Username (hijackdemo)</label>
            <input type="text" name="username">
        </div>

        <div class="form-group">
            <label>Password (password1)</label>
            <input type="password" name="password">
        </div>

        <div class="form-group">
            <p class="warning">Do <b>NOT</b> enter any sensitive information into these fields, as they will be transmitted over an unencrypted medium.</p>
        </div>

        <button type="submit">Login</button>

        <?php if($hasError) : ?>
            <p class="error">Invalid Credentials</p>
        <?php endif ?>
    </form>
</div>
    
<?php include 'templates/footer.php'; ?>