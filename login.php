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

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'hijackdemo' && $password == 'password1') {
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
            <p class="warning">Do NOT submit sensitive data into these fields, as it will be transmitted over an unencrypted medium.</p>
        </div>

        <button type="submit">Login</button>

        <?php if($hasError) : ?>
            <p class="error">Invalid Credentials</p>
        <?php endif ?>
    </form>
<?php include 'templates/footer.php'; ?>