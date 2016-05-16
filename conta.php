<?php
include 'header.php';
$mysqli = new mysqli("localhost", "root", "", "licenta");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Nu se poate realiza conexiunea : %s\n", $mysqli->connect_error);
    exit();
}

?>
<!-- Modale -->

 <!-- Modal Incasare casa-->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <form method="post" action="#">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">Incasare</h4>
       </div>
       <div class="modal-body">
            <div class="form-group">
             <label for="SUMA">Se incaseaza </label>
             <input type="text" class="form-control" id="suma"  nume="suma " placeholder="Suma">
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">De la </label>
             <input type="text" class="form-control" id="nume" name="nume" placeholder="Numele depunatorului">
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Reprezentand</label>
             <input type="text" class="form-control" id="nume" name="nume" placeholder="Numele depunatorului">
           </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
         <button type="button" class="btn btn-primary">Salveaza</button>
       </div>
       </form>
     </div>
   </div>
 </div>

<!-- Modal plata casa -->

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Plata</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="#">

          <div class="form-group">
            <label for="SUMA">Se plateste </label>
            <input type="text" class="form-control" id="suma"  nume="suma " placeholder="Suma">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">De la </label>
            <input type="text" class="form-control" id="nume" name="nume" placeholder="Numele depunatorului">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Reprezentand</label>
            <input type="text" class="form-control" id="nume" name="reprezinta" placeholder="Reprezinta">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
        <button type="button" class="btn btn-primary">Salveaza</button>
      </div>
      </form>
    </div>
  </div>
  </div>



<!-- Modal vizualizare sold casa -->
<form method="post" action="#">
<div class="modal fade" id="myModalv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sold casa</h4>
      </div>
      <div class="modal-body">
        Soldul casierie este :
        <?php
        $result = mysqli_query($mysqli,"SELECT id, sold FROM casa ORDER BY id DESC LIMIT 1");
        while($row = mysqli_fetch_array($result))
        {
        echo $row['sold'] . " RON ";
        }
        mysqli_close($mysqli);
        $timezone = date_default_timezone_get();
        $date = date('d-m-Y H:i:s');
        echo  "la data de " . $date;
         ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
      </div>
    </div>
  </div>
</div>
</form>
 <!-- End modals -->

 <!-- Modal adaugare angajat -->

 <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">Adaugare angajat</h4>
       </div>
       <div class="modal-body">
         <form method="post" action="#">
           <?php
           if (!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['CNP']) && !empty($_POST['datan']) && !empty($_POST['functia']) &&
           !empty($_POST['salariul']) && !empty($_POST['domciliul'])) {
             $nume = $_POST['nume'];
             $prenume = $_POST['prenume'];
             $CNP = $_POST['CNP'];
             $datan = $_POST['datan'];
             $functia = $_POST['functia'];
             $salariu = $_POST['salariu'];
             $domiciliu = $_POST['domciliul'];
             $sql = "INSERT INTO salariati (nume, prenume, CNP, datan, functia, salariul, domiciliul ) VALUES
              ('$nume', '$prenume', '$CNP', '$datan', '$functia', '$salariul', '$domiciliul')";
             /*if (mysqli_query($mysqli, $sql)) {
               echo "New record created successfully";
           } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
             */
           } else {
             $_SERVER['PHP_SELF'];
             echo "Va rugam copletati toate campurile";
           }
           ?>
           <div class="form-group">
             <label for="nume">Nume</label>
             <input type="text" class="form-control" id="nume"  name="nume " placeholder="Nume">
           </div>
          <div class="form-group">
              <label for="prenume">Prenume</label>
              <input type="text" class="form-control" id="suma"  name="prenume " placeholder="Prenume">
          </div>
         <div class="form-group">
             <label for="CNP">CNP</label>
             <input type="text" class="form-control" id="suma"  name="CNP " placeholder="CNP">
         </div>

         <div class="input-group date" data-provide="datepicker">
           <label for="datan">Data nasterii</label>
           <input type="text" class="form-control">
           <div class="input-group-addon">
             <span class="glyphicon glyphicon-th"></span>
           </div>
         </div>         
         <div class="form-group">
             <label for="functia">Functia</label>
             <input type="text" class="form-control" id="suma"  name="functia" placeholder="functia">
         </div>
         <div class="form-group">
             <label for="salariul">Salariul</label>
             <input type="text" class="form-control" id="suma"  name="salariul" placeholder="salariul">
         </div>
         <div class="form-group">
             <label for="domiciiul">Domiciliul</label>
             <input type="text" class="form-control" id="suma"  name="domiciliul" placeholder="domiciliu">
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
         <input type="submit" type="button" value="Salveaza" class="btn btn-primary"></input>
       </div>
       </form>
     </div>
   </div>
   </div>


<div class="container">
  <div class="row">
    <p>
<div class="col-md-3">
<h3>Casa:</h3>
<img src="pics/casa.jpg" alt="casa" class="img-circle" width="100" height="100">
</div>
<div class="col-md-8" "pull-right">
<div class="btn-group btn-group-justified btn-lg" role="group" >
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#myModal">Incasari</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn  btn-lg btn-default" data-toggle="modal" data-target="#myModal1">Plati</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#myModalv">Vizualizare sold</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-lg btn-default">Registru</button>
  </div>
</div>
</div>
<br />
</p>
<hr>
<br />
<br /><br /><br /><br /><br />
<p>
<div class="col-md-3">
<h3>Banca</h3>
<img src="pics/banca.jpg" alt="banca" class="img-circle" width="100" height="100">
</div>
<div class="col-md-8" "pull-right">
<div class="btn-group btn-group-justified btn-lg" role="group" >
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#myModal"> Incasari
    </button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn  btn-lg btn-default">Plati</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-lg btn-default">Sold cont banca</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-lg btn-default">Tranzactii</button>
  </div>
</div>
</div>
</p>
<hr>
<br /><br /><br /><br /><br />
<p>
<br />
<div class="col-md-3">
<h3>Salarii</h3>
<img src="pics/salariu.jpg" alt="salariu" class="img-circle" width="100" height="100">
</div>
<div class="col-md-8" "pull-right">
<div class="btn-group btn-group-justified btn-lg" role="group" >
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-lg btn-default">Stat de plata</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn  btn-lg btn-default" data-toggle="modal" data-target="#myModal4">Adauga salariat</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-lg btn-default">Sterge salariat</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-lg btn-default">Calcul salariu</button>
  </div>
</div>
</div>
</p>

</div>
</div>




<?php
include 'footer.php';
?>
