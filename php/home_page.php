<?php
    include('user.php');

    if (!try_session()) {
        session_abort();
        redirect('login_page.php');
    }

    function random_greeting() {
        $r = mt_rand(0, 10) / 10;
        $username = $_SESSION['user']['username'];
        $firstname = $_SESSION['user']['firstname'];
        $lastname = $_SESSION['user']['lastname'];
        return ($r < 0.5) ? "HEJ PÅ DIG, $username." : "Var hälsad, $firstname $lastname.";
    }
?>
<!DOCTYPE html>
<html lang="sv">
    <?php
        $GLOBALS['title'] = 'Home Page';
        include("page_head.php"); 
    ?>
    <body>

        <header>
            <h1><?= random_greeting() ?></h1>
            <?php
            ?>
        </header>

        <main>
            <button class="logout">Log Out</button>
        </main>

    </body>
</html>