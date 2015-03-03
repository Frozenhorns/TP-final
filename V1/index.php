  <head>
    <html>
      <meta charset="utf-8"/>
      <link rel="stylesheet" type="text/css" href="index.css">
      <title>Appréciation de fin de module</title>
  </head>
  <body>
    <h1 align="center">APPRECIATION DE FIN DE MODULE</h1>
    <form method="post" action="index.php">
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
  </body>
  <footer>
    <div>
      <p align="center"> IMIE - Siège : 1 rue Victor Hugo - 44400 REZE - Tel : 02.28.01.37.54 </p>
    </div>
  </footer>
</html>
