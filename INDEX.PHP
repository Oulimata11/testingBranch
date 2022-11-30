 <!doctype html>
<html>
<head>
	<title> 15 </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/SENE_Oulimatou21.INDEX.css">
	<link rel="stylesheet" type="text/css" href="css/Ouly.css">
</head>
<body>
	<center>
        <img src="beauty.jpg">
        <div id="Canim">
             <p> <u> <a href="?Connect=Tableau"> Tableau </a> </u> </p>
             <p> <u> <a href=""> Forms  </a></u> </p>
             <p>  <u> <a href="?Connect=AUTRE"> Autres </a> </u> </p>
             <p> <u> <a href=""> Téléchargez</a> </u> </p>
        </div>
        <div id="Best">
        	<marquee> <h3>Zone de PUB</h3></marquee>
        </div>
        <div class="Connect">
        	<fieldset>
        		<legend align="left"> CONNEXION</legend>
        		<form action="" method="POST">
        			LOGIN
        			</br> <input type="text" name="log" size="20px" style="border-radius:6px;"> 
        			<P> PASS
        			</br> <input type="pass" name="pdm" size="20px" style="border-radius:6px;">
                    <P> <center> 
                    	<input type="submit" name="connexion" value="Connexion"> </center> </P>
                </form>
            </fieldset>
        <?php
  if(isset($_REQUEST['Connect']))
  {
  @$Connect=$_REQUEST['Connect'];
  }
    if(@$Connect=="AUTRE")
      {
        include("AUTRE.PHP");
      } 
     elseif( @$Connect=="Tableau")
     	{ 
     		include("Tableau.PHP");
     	}
    ?>
        </div>
        <div class="cos">
        	<marquee> <h3> Copyright@SENE_Oulimatou </h3> </marquee>
        </div>
    </center>
</body>
</html>
