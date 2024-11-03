<?php
// CREDITS: https://github.com/Fred-Khan/Cybersecurity_Session-Hijacking_Demo
session_start();

// If the user is logged in, redirect to profile.
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'hijackdemo' && $password == 'password1') {
        $_SESSION['user'] = $username;
        header('Location: profile.php');
    } else {
        echo "Invalid credentials!";
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

        </div>

        <input type="submit" value="Login">
    </form>
<?php include 'templates/footer.php'; ?>