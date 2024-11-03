<?php
// CREDITS: https://github.com/Fred-Khan/Cybersecurity_Session-Hijacking_Demo
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>

<?php 
$title = "Welcome";
include 'templates/header.php'; 
?>
    <h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
    <p>Your session ID: <?php echo session_id(); ?></p>
    <a href="logout.php">Logout</a>
<?php include 'templates/footer.php'; ?>