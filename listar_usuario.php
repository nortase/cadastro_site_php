<?php 

$slq = "SELECT * FROM usarios";
$res = $conn -> query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
    print "<table class='table table-rover table-striped table-bordered'>";
}