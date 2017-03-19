<?php include "views/header.php"; ?>
<?php include "lib/db.php"; ?>
<?php include "lib/buildChatRoom.php"; ?>

<?php
$queryName = $db->query('SELECT name FROM users');
$name = $queryName->fetch();
?>

<div class="form-group">
    <form action="roomChat.php" method="post">
        <input type="text" name="pseudo" value='<?= $name['name'];?>' disabled="true" class="form-control">
        <textarea name="message" rows="8" cols="80" placeholder="Votre message" class="form-control"></textarea>
        <button type="submit" name="sendMess" class="btn btn-info">Poster</button>
    </form>
</div>
<div>
    <?= buildRoom($name['name']); ?>
</div>


<?php include "views/footer.php"; ?>
