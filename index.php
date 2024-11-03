<?php 
session_start();
$title = "Home";
include 'templates/header.php'; 
?>
<div class="page-content">
    <h1>Session Hijacking Lab</h1>
    <p>This website serves as an educational platform to demonstrate the vulnerabilities of <b>HTTP</b> traffic in a <a class="link" href="https://github.com/Fred-Khan/Cybersecurity_Session-Hijacking_Demo">session hijacking demo</a> using Wireshark. The site illustrates how unencrypted <b>HTTP</b> connections can put user sessions at risk, showcasing why using secure practices like <b>HTTPS</b> is essential.</p>
    <h2>Why is this important?</h2>
    <p><b>HTTP</b> lacks the encryption needed to protect data exchanged between a user's browser and the web server. This leaves session cookies, login credentials, and other sensitive data exposed to interception. Understanding these vulnerabilities is crucial for anyone learning about web security and the importance of <b>HTTPS</b>.</p>
    <h2 class="warning">Caution</h2>
    <p>Entering data into the login form on this site and submitting it will transmit your information unencrypted. <b>Do not enter any personal or sensitive information.</b></p>
    <img src="/images/wireshark-capture.png" width="600px"/>
</div>


<?php include 'templates/footer.php'; ?>