<?php
require 'data.php';
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://overdata.simplon/css/navbar.css" />
    <link rel="stylesheet" href="http://overdata.simplon/css/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="http://overdata.simplon/css/style2.css" media="screen" title="no title">
    <link rel="stylesheet" href="http://overdata.simplon/font/overfont/stylesheet.css" media="screen" title="no title">
    <title></title>
</head>

<body>

  <?php require 'nav.php' ?>



  <div class="container-stats ">
      <h2 class="mbt" style="text-align:center;">Vos Statistiques</h2>
      <div class="azer">
        <div class="hero-best-perform">
          <p class="align-center">GLOBAL STATS</p>
          <div style="text-align:center;" class="rbrq">GÉNÉRALE</div>
          <div class="ligne">
            <div class="title">PARTIE JOUER</div><div class="value"><?php echo $glb["Played"];?></div>
          </div>
          <div class="ligne">
            <div class="title">PARTIE GAGNER</div><div class="value"><?php echo $glb["GamesWon"];?></div>
          </div>
          <div class="ligne">
            <div class="title">TEMPS DE JEU TOTAL</div><div class="value"><?php echo $glb["TimePlayed"];?></div>
          </div>
          <div style="text-align:center;" class="rbrq">COMBAT</div>
          <div class="ligne">
            <div class="title">ÉLIMINATIONS</div><div class="value"><?php echo $glb["Eliminations"];?></div>
          </div>
          <div class="ligne">
            <div class="title">MORTS</div><div class="value"><?php echo $glb["Deaths"];?></div>
          </div>
          <div class="ligne">
            <div class="title">DÉGATS CAUSÉ</div><div class="value"><?php echo $glb["DamageDone"];?></div>
          </div>
          <div class="ligne">
            <div class="title">SOINS</div><div class="value"><?php echo $glb["HealingDone"];?></div>
          </div>
          <div class="ligne">
            <div class="title">COUP DE GRACE</div><div class="value"><?php echo $glb["FinalBlows"];?></div>
          </div>
          <div class="ligne">
            <div class="title">SOLO KILLS</div><div class="value"><?php echo $glb["SoloKills"];?></div>
          </div>
          <div class="ligne">
            <div class="title">OBJECTIVE KILLS</div><div class="value"><?php echo $glb["ObjectiveKills"];?></div>
          </div>
          <div class="ligne">
            <div class="title">MORT ENVIRONNEMENT</div><div class="value"><?php echo $glb["EnvironmentalDeaths"];?></div>
          </div>
          <div class="ligne">
            <div class="title">TEMPS SUR OBJECTIF</div><div class="value"><?php echo $glb["ObjectiveTime"];?></div>
          </div>
          <div style="text-align:center;" class="rbrq">MEDALS</div>
          <div class="ligne">
            <div class="title">TOTAL MÉDALS</div><div class="value"><?php echo $glb["Medals"];?></div>
          </div>
          <div class="ligne">
            <div class="title">MÉDALS GOLD</div><div class="value"><?php echo $glb["Medals-Gold"];?></div>
          </div>
          <div class="ligne">
            <div class="title">MÉDAL SILVER</div><div class="value"><?php echo $glb["Medals-Silver"];?></div>
          </div>
          <div class="ligne">
            <div class="title">MÉDAL BRONZE</div><div class="value"><?php echo $glb["Medals-Bronze"];?></div>
          </div>
        </div>







      </div>

        <div class="global-stats">



          <?php
          foreach ($all as $key => $value) {
?>
           <div class="hero-stats">
                <div class="hero-card">
                    <img src="<?php echo $all["$key"]["image"];?>" class="hero-avatar" alt="avatar du hero" />
                    <span class="hero-name"><?php echo $all["$key"]["name"]?></span>
                    <span class="play-time">temps joué:<br><?php echo $all["$key"]["TimePlayed"];?></span>
                    <span class="win-loss">victoire:<br><?php echo $all["$key"]["GamesWon"];?></span>
                    <span class="Medals">Médaille:<br><?php echo $all["$key"]["Medals-Gold"] . " " . $all["$key"]["Medals-Silver"] . " " . $all["$key"]["Medals-Bronze"];?></span>
                </div>
                <div class="Elimination-Average"><span class="Avrg">TUES<br><?php echo $all["$key"]["Eliminations"];?></span></div>
                <div class="Deaths-Avrg"><span class="Avrg">MORT<br><?php echo $all["$key"]["Deaths"];?></span></div>
                <div class="DamageDone-Avrg"><span class="Avrg">DÉGATS<br><?php echo $all["$key"]["DamageDone"];?></span></div>
                <div class="FinalBlows-Avrg"><span class="Avrg">COUP DE GRACE<br><?php echo $all["$key"]["FinalBlows"];?></span></div>
                <div class="ObjectiveTime-Avrg"><span class="Avrg">OBJ.TIME<br><?php echo $all["$key"]["ObjectiveTime"];?></span></div>
                <div class="ObjectiveKills-Avrg"><span class="Avrg">OBJ.KILLS<br><?php echo $all["$key"]["ObjectiveKills"];?></span></div>
                <div class="WeaponKill-Avrg"><span class="Avrg">TUES MOYEN<br><?php echo $all["$key"]["Eliminations-Average"];?></span></div>
                <div class="SelfHealing-Avrg"><span class="Avrg">MOYENNE MORT<br><?php echo $all["$key"]["Deaths-Average"];?></span></div>
                <div class="HealingDone-Avrg"><span class="Avrg">DEGATS MOYEN<br><?php echo $all["$key"]["DamageDone-Average"];?></span></div>
                <div class="UltimCapa-Avrg"><span class="Avrg">MOY C.GRACE<br><?php echo $all["$key"]["FinalBlows-Average"];?></span></div>
                <div class="OffAssist-Avrg"><span class="Avrg">MOY OBJ.TIME<br><?php echo $all["$key"]["ObjectiveTime-Average"];?></span></div>
                <div class="DefAssist-Avrg"><span class="Avrg">MOY OBJ.KILLS<br><?php echo $all["$key"]["ObjectiveKills-Average"];?></span></div>
            </div>
<?php
;}
?>




        </div>

      </div>
      <?php include 'footer.php' ?>

</body>

</html>
