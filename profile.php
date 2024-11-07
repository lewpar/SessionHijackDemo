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

    <div class="profile">
        <img class="profile-img" src="/images/<?php echo $_SESSION['user']; ?>.png"/>
        <div>
            <h3>Welcome, <?php echo $_SESSION['user']; ?>!</h3>
            <p>Your session ID: <?php echo session_id(); ?></p>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>