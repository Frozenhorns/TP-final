<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Appreciation de fin de module</title>
    <link rel="stylesheet" type="text/css" href="styles.css" media="all"/>
    <link rel="icon" type="image/png" href="images/icone.png" />
    <script type="text/javascript" src="cursus.js"></script>
    <link rel="stylesheet" href="calendar.css" />
    <script src="jquery.js"></script>
    <script src="jqueryUI.js"></script>
    <script type="text/javascript">
      $(function() {
        var date = new Date();
      var currentMonth = date.getMonth();
      var currentDate = date.getDate();
      var currentYear = date.getFullYear();
      $('#datepicker').datepicker({
      maxDate: new Date(currentYear,  currentMonth,  currentDate)
      });
      });
    </script>
  </head>
  <body>
    <?php include("header.php"); ?>
    <a href="http://www.imie-ecole-informatique.fr/" title="Accueil" id="logo" class="left">
      <img src="images/logo_imie.png">
    </a>
    <form method="post" action="index.php">
      <div class="blocg">
	<h3>INFORMATIONS</h3>
	<label for="Lname">NOM :</label>
	<input type="text" name="Lname" id="name" placeholder="Facultatif" size="15" maxlength="15">
	<label for="Fname">Prénom :</label>
	<input type="text" name="Fname" id="name" placeholder="Facultatif" size="15" maxlength="15">
	/ SESSION : <select id="cursus" name="cursus"></select>
	<select name="session" id="session"></select>					
	<hr>
	<label for="campus">Campus : </label>
	<select name="campus" id="campus">
	  <option value="Nantes">NANTES</option>
	  <option value="Angers">ANGERS</option>
	  <option value="Rennes">RENNES</option>
	</select>
	Nom du Module :
	<select name="module" id="module"></select>
	<label for="contributor">Intervenant :</label>
	<select name="contributor" id="contributor">
	  <option value="VB">Vianney BOUCHAUD</option>
	  <option value="EF">Erwan FOURNEL</option>
	  <option value="SB">Stéphane BEIGNET</option>
	  <option value="BB">Baptiste BEAUPLAT</option>
	</select>
        <script language="javascript">
          funcCursus("cursus", "session", "module");
        </script>
        <p>Date: <input type="text" id="datepicker" /></p>
      </div>
    </form>
    <form>
      <div class="blocy">
	<p>
	  <h3>SATISFACTION GENERALE</h3>
	  <div class="cont">
	    <div class="desc">Cette formation a répondu à mes attentes</div>
	    <div class="radio">Très satisfaisant
	      <input type="radio" name="general" value="ts">
	      <input type="radio" name="general" value="s">
	      <input type="radio" name="general" value="ps">
	      <input type="radio" name="general" value="i">
	      <input type="radio" name="general" value="ti">
	      Très insatisfaisant</div>
	  </div>
	</p>
	<p>
	  <h3>PERTINENCE DE LA PEDAGOGIE</h3>
	  <div class="cont">
	    <div class="desc">Contenu du module adapté à mon niveau</div>
	    <div class="radio">Très satisfaisant
	      <input type="radio" name="niveau" value="ts">
	      <input type="radio" name="niveau" value="s">
	      <input type="radio" name="niveau" value="ps">
	      <input type="radio" name="niveau" value="i">
	      <input type="radio" name="niveau" value="ti">
	      Très insatisfaisant</div>
	    <div class="desc">Objectif de compétences à acquérir atteint</div>
	    <div class="radio">Très satisfaisant
	      <input type="radio" name="competences" value="ts">
	      <input type="radio" name="competences" value="s">
	      <input type="radio" name="competences" value="ps">
	      <input type="radio" name="competences" value="i">
	      <input type="radio" name="competences" value="ti">
	      Très insatisfaisant</div>
	    <div class="desc">Pertinence du formateur</div>
	    <div class="radio">Très satisfaisant
	      <input type="radio" name="pertinence" value="ts">
	      <input type="radio" name="pertinence" value="s">
	      <input type="radio" name="pertinence" value="ps">
	      <input type="radio" name="pertinence" value="i">
	      <input type="radio" name="pertinence" value="ti">
	      Très insatisfaisant</div>
	    <div class="desc">Durée adaptée</div>
	    <div class="radio">Très satisfaisant
	      <input type="radio" name="duree" value="ts">
	      <input type="radio" name="duree" value="s">
	      <input type="radio" name="duree" value="ps">
	      <input type="radio" name="duree" value="i">
	      <input type="radio" name="duree" value="ti">
	      Très insatisfaisant</div>
	  </div>
	</p>
	<p>
	  <h3>QUALITE DU MODULE</h3>
	  <div class="cont">
	    <div class="desc">Equilibre en théorie et pratique</div>
	    <div class="radio">Très satisfaisant
	      <input type="radio" name="equilibre" value="ts">
	      <input type="radio" name="equilibre" value="s">
	      <input type="radio" name="equilibre" value="ps">
	      <input type="radio" name="equilibre" value="i">
	      <input type="radio" name="equilibre" value="ti">
	      Très insatisfaisant</div>
	    <div class="desc">Qualité des supports</div>
	    <div class="radio">Très satisfaisant
	      <input type="radio" name="supports" value="ts">
	      <input type="radio" name="supports" value="s">
	      <input type="radio" name="supports" value="ps">
	      <input type="radio" name="supports" value="i">
	      <input type="radio" name="supports" value="ti">
	      Très insatisfaisant</div>
	    <div class="desc">Qualité du suivi lors des TP</div>
	    <div class="radio">Très satisfaisant
	      <input type="radio" name="suivi" value="ts">
	      <input type="radio" name="suivi" value="s">
	      <input type="radio" name="suivi" value="ps">
	      <input type="radio" name="suivi" value="i">
	      <input type="radio" name="suivi" value="ti">
	      Très insatisfaisant</div>
	    <div class="desc">Matériel utilisé</div>
	    <div class="radio">Très satisfaisant
	      <input type="radio" name="materiel" value="ts">
	      <input type="radio" name="materiel" value="s">
	      <input type="radio" name="materiel" value="ps">
	      <input type="radio" name="materiel" value="i">
	      <input type="radio" name="materiel" value="ti">
	      Très insatisfaisant</div>
	  </div>
	</p>
      </div>
      <p>
        <div class="blocr">
          <form method="post" action="traitement.php">
            <h3>Commentaires</h3>
            <textarea name="com" id="com" placeholder="Laissez un commentaire sur la prestation (optionnel)" tabindex="5" class="txtblock"></textarea>
        </div>
      </p>
      </form>
      <div class="sblocb"><a href="valid.php">Valider</a></div>
    </form>
    <?php include("footer.php"); ?>
  </body>
</html>
