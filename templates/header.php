<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>UNSAFE | <?php echo $title; ?></title>
</head>
<body>
    <header>
        <ul id="menu-left">
            <a class="link" href="/">
                <li>Home</li>
            </a>
        </ul>

        <ul id="menu-right">
            <?php if (!isset($_SESSION['user'])) : ?>
                <a class="link" href="/login.php">
                    <li>Login</li>
                </a>
            <?php else : ?>
                <a class="link" href="/profile.php">
                    <li>Profile</li>
                </a>
                
                <a class="link" href="/logout.php">
                    <li>Logout</li>
                </a>
            <?php endif; ?>
        </ul>
    </header>
    <main>