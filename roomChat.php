<?php include "views/header.php"; ?>
<?php include "lib/db.php"; ?>
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
<div class="panel panel-info">
    <div class="panel-heading">Pseudo : <?= $name['name']; ?> </div>
    <div class="panel-body">
        <?php if(isset($_POST['message'])){
            echo $_POST['message'];
        } ?>
    </div>
    <div class="panel-footer">Posté le : </div>
</div>

<?php include "views/footer.php"; ?>
