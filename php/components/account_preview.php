<div class="account row">
    <a class="notlink" href="profile_page.php"><p class="username"><?= $_SESSION['user']['username'] ?></p></a>
    <div class="profile-picture-container">
        <a href="profile_page.php"><img class="profile-picture" src="<?= join_paths('../../', $_SESSION['user']['profile_image']) ?>"></a>
    </div>
</div>