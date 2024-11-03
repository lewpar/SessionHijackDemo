<?php
// CREDITS: https://github.com/Fred-Khan/Cybersecurity_Session-Hijacking_Demo
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>

<?php 
$title = "Profile";
include 'templates/header.php'; 
?>

<div class="page-content">
    <h2>Profile</h2>

    <h3>Welcome, <?php echo $_SESSION['user']; ?>!</h3>
    <p>Your session ID: <?php echo session_id(); ?></p>
</div>

<?php include 'templates/footer.php'; ?>