<!doctype html>
<html>
<head>
	<title> 10 </title>
	<meta charset="utf-8">
</head>
<body>
 <fieldset style="width:300px;margin-left:50%;margin-top:-20%; height:500px;">
    	<legend align="center">Livraison</legend>
    <form action="" method="POST">
           <P> Id Fournisseur <input type="text" name="IdFour" size="25px" style="border-radius:6px;" placeholder="Saisissez le code du produit"> </P>
           <P> Nom <input type="text" name="nm" size="25px" placeholder="Entrez votre nom" style="border-radius:6px;"> </P>
            <P> Prenom  <input type="text" name="prm" size="25px" placeholder="Saisissez votre prenom" style="border-radius:6px;"> </P>
            <P> Date De Livraison  <input type="text" name="dteL" size="25px" placeholder="Entrez la date de Livraison" style="border-radius:6px;"> </P>
             <P> Quantite Livraison <input type="text" name="qteL" placeholder="Saisissez la quantite Souhaité" size="25px" style="border-radius:6px;"> </P>
            <P> Prix Livraison <input type="text" name="prixL" size="25px" placeholder="Entrez le prix de la Livraison" style="border-radius:6px;"> </P>
            <center> <P>
            <input type="submit" name="val" value="Valider">
        </center> </P>
    </form>
    </fieldset>
</body>
</html>
<?php
 if(isset($_REQUEST['val']))
 {
 	extract($_REQUEST);
 	@$montantTotal=$qteL*$prixL;
 	@$Rabais;
 	@$montantNet;
 }
 echo "le montant total est de : ".@$montantTotal."FCFA"."</br>";
 if(@$montantTotal > 1000000)
 {
    echo"Vous avez un rabais de 10%"."</br>";
    @$Rabais=@$montantTotal*(10/100);
    echo "Le montant de la rabais est de : ".@$Rabais."FCFA"."</br>";
    @$montantNet=@$montantTotal-@$Rabais;
    echo"Donc le montant total est".@$montantNet."FCFA"."</br>";
 }
 else
 {
    echo"Vous avez un rabais de 5%"."</br>";
    @$Rabais=@$montantTotal*(5/100);
    echo "Le montant de la rabais est de : ".@$Rabais."FCFA"."</br>";
    @$montantNet=@$montantTotal-@$Rabais;
    echo"Donc le montant total est".@$montantNet."FCFA"."</br>";
 }
 

?>