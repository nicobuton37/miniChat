<?php
include "lib/db.php";

// function for building roomChat dynamic
function buildRoom($name){
    if(isset($_POST['message'])){
        return "<div class='panel panel-info'>
                    <div class='panel-heading'>Pseudo : " . $name . "</div>
                    <div class='panel-body'>" .  $_POST['message'] . "</div>
                    <div class='panel-footer'>Posté le : </div>
                </div>";
    }
}
