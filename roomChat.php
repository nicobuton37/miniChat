<?php include "views/header.php"; ?>
<?php include "lib/db.php"; ?>
<?php include "lib/buildChatRoom.php"; ?>

<?php
$queryName = $db->query('SELECT name FROM users');
$name = $queryName->fetch();
$queryId = $db->query('SELECT id FROM users');
$idUser = $queryId->fetch();

?>

<div class="form-group">
    <form action="roomChat.php" method="post">
        <input type="text" name="pseudo" value='<?= $name['name'];?>' disabled="true" class="form-control">
        <textarea name="message" rows="8" cols="80" placeholder="Votre message" class="form-control"></textarea>
        <button type="submit" name="sendMess" class="btn btn-info">Poster</button>
        <?php if(isset($_POST['message'])){
            $insert = $db->prepare("INSERT INTO messages(id_user, message, date_pub)VALUES(:id_user, :message, :date_pub)");
            $insert->execute(array(
                'id_user' => $idUser['id'],
                'message' => $_POST['message'],
                'date_pub' => date('Y-m-d H:i:s')
            ));
        }?>
    </form>
</div>
<div>
    <?= buildRoom($name['name']); ?>

</div>


<?php include "views/footer.php"; ?>
