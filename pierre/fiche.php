<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Appreciation de fin de module</title>
    <link rel="stylesheet" type="text/css" href="styles.css" media="all"/>
    <link rel="icon" type="image/png" href="images/icone.png" />
    <link rel="stylesheet" href="responsive.css" />
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
	<label for="Lname">NOM :
	  <input type="text" name="Lname" id="name" placeholder="Facultatif" size="15" maxlength="15">
        </label>
	<label for="Fname">Prénom :
	  <input type="text" name="Fname" id="name" placeholder="Facultatif" size="15" maxlength="15">
        </label>
	<label for="session">SESSION :
          <select id="cursus" name="cursus"></select>
	  <select name="session" id="session"></select>
        </label>
	<hr>
	<label for="campus">Campus :
	  <select name="campus" id="campus">
	    <option value="Nantes">NANTES</option>
	    <option value="Angers">ANGERS</option>
	    <option value="Rennes">RENNES</option>
	  </select>
        </label>
        <label for="module">Nom du Module :
	  <select name="module" id="module"></select>
        </label>
	<label for="contributor">Intervenant :
	  <select name="contributor" id="contributor">
	    <option value="VB">Vianney BOUCHAUD</option>
	    <option value="EF">Erwan FOURNEL</option>
	    <option value="SB">Stéphane BEIGNET</option>
	    <option value="BB">Baptiste BEAUPLAT</option>
	  </select>
        </label>
        <script language="javascript">
          funcCursus("cursus", "session", "module");
        </script>
        <p>Date de fin de module:<input type="text" id="datepicker" /></p>
      </div>
    </form>
    <form>
      <div class="blocy">
	<p>
	  <h3>SATISFACTION GENERALE</h3>
	  <div class="cont">
	    <div class="desc">Cette formation a répondu à mes attentes</div>
	    <div class="radio">Très insatisfaisant
	      <input type="radio" name="general" value="1">
	      <input type="radio" name="general" value="2">
	      <input type="radio" name="general" value="3">
	      <input type="radio" name="general" value="4">
	      <input type="radio" name="general" value="5">
	      Très satisfaisant</div>
	  </div>
	</p>
	<p>
	  <h3>PERTINENCE DE LA PEDAGOGIE</h3>
	  <div class="cont">
	    <div class="desc">Contenu du module adapté à mon niveau</div>
	    <div class="radio">Très insatisfaisant
	      <input type="radio" name="general" value="1">
	      <input type="radio" name="general" value="2">
	      <input type="radio" name="general" value="3">
	      <input type="radio" name="general" value="4">
	      <input type="radio" name="general" value="5">
	      Très satisfaisant</div>
	    <div class="desc">Objectif de compétences à acquérir atteint</div>
	    <div class="radio">Très insatisfaisant
	      <input type="radio" name="general" value="1">
	      <input type="radio" name="general" value="2">
	      <input type="radio" name="general" value="3">
	      <input type="radio" name="general" value="4">
	      <input type="radio" name="general" value="5">
	      Très satisfaisant</div>
	    <div class="desc">Pertinence du formateur</div>
	    <div class="radio">Très insatisfaisant
	      <input type="radio" name="general" value="1">
	      <input type="radio" name="general" value="2">
	      <input type="radio" name="general" value="3">
	      <input type="radio" name="general" value="4">
	      <input type="radio" name="general" value="5">
	      Très satisfaisant</div>
	    <div class="desc">Durée adaptée</div>
	    <div class="radio">Très insatisfaisant
	      <input type="radio" name="general" value="1">
	      <input type="radio" name="general" value="2">
	      <input type="radio" name="general" value="3">
	      <input type="radio" name="general" value="4">
	      <input type="radio" name="general" value="5">
	      Très satisfaisant</div>
	  </div>
	</p>
	<p>
	  <h3>QUALITE DU MODULE</h3>
	  <div class="cont">
	    <div class="desc">Equilibre en théorie et pratique</div>
	    <div class="radio">Très insatisfaisant
	      <input type="radio" name="general" value="1">
	      <input type="radio" name="general" value="2">
	      <input type="radio" name="general" value="3">
	      <input type="radio" name="general" value="4">
	      <input type="radio" name="general" value="5">
	      Très satisfaisant</div>
	    <div class="desc">Qualité des supports</div>
	    <div class="radio">Très insatisfaisant
	      <input type="radio" name="general" value="1">
	      <input type="radio" name="general" value="2">
	      <input type="radio" name="general" value="3">
	      <input type="radio" name="general" value="4">
	      <input type="radio" name="general" value="5">
	      Très satisfaisant</div>
	    <div class="desc">Qualité du suivi lors des TP</div>
	    <div class="radio">Très insatisfaisant
	      <input type="radio" name="general" value="1">
	      <input type="radio" name="general" value="2">
	      <input type="radio" name="general" value="3">
	      <input type="radio" name="general" value="4">
	      <input type="radio" name="general" value="5">
	      Très satisfaisant</div>
	    <div class="desc">Matériel utilisé</div>
	    <div class="radio">Très insatisfaisant
	      <input type="radio" name="general" value="1">
	      <input type="radio" name="general" value="2">
	      <input type="radio" name="general" value="3">
	      <input type="radio" name="general" value="4">
	      <input type="radio" name="general" value="5">
	      Très satisfaisant</div>
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
