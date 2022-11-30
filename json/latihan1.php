<?php

//$mahasiswa = [
    //[
    //"nama" => "Dimas Putra",
    //"nrp" => "203040088",
    //"email" => "203040088@mail.unpas.ac.id"
    //],
    //[
        //"nama" => "Mirage",
        //"nrp" => "153040088",
        //"email" => "153040088@mail.unpas.ac.id"
        //],
//];


$dbh = new PDO('mysql:host=localhost;dbname=prakweb_b_203040088_rest_api','root','');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>