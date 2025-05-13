<?php

require "database_connection.php";
if (isset($_GET['type'])) {
    $type = $_GET['type'];
    $sql = "SELECT * FROM cards WHERE type= '$type'";
    $result = mysqli_query($conn, $sql);
    $pokemon_info = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>

<div class="">
    <div class="filter">
        <a href="/" class="filter-btn">Alle types</a>
        <a href="?type=elektrisch" class="filter-btn">elektrisch</a>
        <a href="?type=Gras" class="filter-btn">Gras</a>
        <a href="?type=Vuur" class="filter-btn">Vuur</a>
        <a href="?type=Water" class="filter-btn">Water</a>
        <a href="?type=Normaal" class="filter-btn">Normaal</a>
        <a href="?type=Psychisch" class="filter-btn">Psychisch</a>
    </div>
</div>