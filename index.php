  <head>
    <html>
      <meta charset="utf-8"/>
      <link rel="stylesheet" type="text/css" href="index.css">
      <title>Appréciation de fin de module</title>
  </head>
  <body>
    <h1 align="center">APPRECIATION DE FIN DE MODULE</h1>
      <fieldset>
      <legend>Information</legend> 
          <label for="Lname">NOM :</label>
          <input type="text" name="Lname" id="name" placeholder="Facultatif" size="15" maxlength="15">
          <label for="Fname">Prénom :</label>
          <input type="text" name="Fname" id="name" placeholder="Facultatif" size="15" maxlength="15">
          <label for="session">/SESSION : </label>
          <select name="session" id="session">
            <option value="IT01">ITStart01</option>
            <option value="IT02">ITStart02</option>
            <option value="IT03">ITStart03</option>
            <option value="IT04">ITStart04</option>
            <option value="IT05">ITStart05</option>
            <option value="IT06">ITStart06</option>
            <option value="IT07">ITStart07</option>
          </select>
      </fieldset>
      <fieldset>
          <label for="campus">Campus : </label>
          <select name="campus" id="campus">
            <option value="Nantes">NANTES</option>
            <option value="Angers">ANGERS</option>
            <option value="Rennes">RENNES</option>
          </select>
          <label for="module">Nom du Module :</label>
          <select name="module" id="module">
            <option value="EN">Anglais</option>
            <option value="JS">JavaScript</option>
            <option value="SYSAD">Administration réseau</option>
            <option value="CT">Culture Informatique</option>
            <option value="COM">Communication</option>
          </select>
          <label for="contributor">Intervenant :</label>
          <select name="conributor" id="contributor">
            <option value="VB">Vianney BOUCHAUD</option>
            <option value="EF">Erwan FOURNEL</option>
            <option value="SB">Stéphane BEIGNET</option>
            <option value="BB">Baptiste BEAUPLAT</option>
          </select>
      </fieldset>
      </br>
      <fieldset>
        <legend>SATISFACTION GENERALE</legend>
        <div id="appreciation">
	  <p>
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
    </fieldset>
  </body>
  <footer>
    <div>
      <p align="center"> IMIE - Siège : 1 rue Victor Hugo - 44400 REZE - Tel : 02.28.01.37.54 </p>
    </div>
  </footer>
</html>
