<?php

include 'header.php';

?>

<div> <h1>Reserveren</h1> </div>

    
    <form class="form-horizontal" method="POST" action="class/reserveren.php">
        <label class="col-sm-2 control-label">Datum en Tijd</label>
        <div class="form-group">    
        <script>
              webshims.setOptions('waitReady', false);
              webshims.setOptions('forms-ext', {types: 'date'});
              webshims.polyfill('forms forms-ext');
            </script>
            <input name='date' type="date" />
        <input name="time" type="time" ng-model="model.time" />
        </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Aantal personen</label>
        <div class="col-sm-10">
          <input name='personen' type="text" class="form-control" id="inputEmail3" placeholder="Aantal Personen">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Volledige Naam</label>
        <div class="col-sm-10">
          <input name='name' type="text" class="form-control" id="inputPassword3" placeholder="Volledige Naam">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">E-mailadres</label>
        <div class="col-sm-10">
          <input name='email' type="text" class="form-control" id="inputPassword3" placeholder="E-mailadres">
        </div>
      </div>
    <textarea name='opmerkingen' type="text" class="form-control" style="width:1036px; margin-left:213px;" rows="3" placeholder="Overige Opmerkingen"></textarea>
        <input class="btn btn-default" type="submit" value="Submit">
    </form>
    


<?php

include 'footer.php';

?>