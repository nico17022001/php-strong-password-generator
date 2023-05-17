<form method="GET">
  <div class="form-group">
    <label for="exampleInputEmail1">Inserisci il numero che desideri</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="esempio 10" name="selectNumber" style="-moz-appearance: textfield">
  </div>
    <button type="submit" class="btn btn-primary">Genera</button>
  <div>
    <?php 
      if (isset($_GET["selectNumber"]) && $password = generatePassword($_GET["selectNumber"])){
        echo '<span>La tua password è ' . $password . '</span>';
      } 
    ?>
  </div>
</form>