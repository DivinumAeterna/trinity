<?php
$calc=$_POST['calc'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];
if($calc=="add"){ $res=$n1+$n2; }
if($calc=="sub"){ $res=$n1-$n2;}
if($calc=="mul"){ $res=$n1*$n2; }
if($calc=="div"){ $res=$n1/$n2; }
?>
<p>Ответ: <?php echo $res; ?></p>