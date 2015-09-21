<?php

include 'header.php';

?>

<div> <h1>Reserveren</h1> </div>

    
    <form class="form-horizontal">
        <label for="inputEmail3" class="col-sm-2 control-label">Datum en Tijd</label>
        <div class="container" style="margin-left:215px;">
            <div class="row">
                <div class='col-sm-6'>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker5'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker5').datetimepicker({
                            defaultDate: "11/1/2013",
                            disabledDates: [
                                moment("12/25/2013"),
                                new Date(2013, 11 - 1, 21),
                                "11/22/2013 00:53"
                            ]
                        });
                    });
                </script>
            </div>
        </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Aantal personen</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Aantal Personen">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Volledige Naam</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Volledige Naam">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">E-mailadres</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="E-mailadres">
        </div>
      </div>

    <textarea class="form-control" style="width:1035px; margin-left:215px;" rows="3" placeholder="Overige Opmerkingen"></textarea>

    </form>


<?php

include 'footer.php';

?>