<?php include "views/header.php"; ?>
<?php include "lib/db.php"; ?>

<div class="form-group">
    <form action="roomChat.php" method="post">
        <input type="text" name="pseudo" value="" disabled="true" class="form-control">
        <textarea name="message" rows="8" cols="80" placeholder="Votre message" class="form-control"></textarea>
    </form>

</div>
<?php
$queryName = $db->query('SELECT name FROM users');
$name = $queryName->fetch();
?>
<div class="panel panel-info">
    <div class="panel-heading">Pseudo : <?= $name['name']; ?> </div>
    <div class="panel-body">
        contenu du message
    </div>
    <div class="panel-footer">Posté le : </div>
</div>

<?php include "views/footer.php"; ?>
