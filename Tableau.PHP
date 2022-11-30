<!doctype html>
<html>
<head>
    <title>5 </title>
    <meta charset="utf-8">
</head>
<body>
    <fieldset style="width:300px;margin-left:50%;margin-top:-20%; height:500px;">
        <?php 

$Tab = array(2,-4, 8, 12,-15,16,5,-9,23,-3);
$Somme=1;
$NBN=0;
echo" les elements du tableau sont "."</br>";
foreach ($Tab as $elt)
{
    echo $elt."</br>";
    if($elt % 2 ==0)
      {
    $Somme= $Somme + $elt;
      }
    else
      {
   $NBN= $NBN + 1;
      }
}
echo"La somme des nombres pairs est ".$Somme."</br>";
echo"Le nombre de nombres impairs est ".$NBN."</br>";

?>
</fieldset>