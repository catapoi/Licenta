<?php
include 'header.php';
?>
<!-- Single button -->
<div class="container">
<h4>  Rapoarte clienti </h4></br>
<div class="btn-group btn-group-justified" role="group">
  <div class="btn-group" role="group">
    <a target='_blank' href="php/raportclienti.php" class="btn btn-default btn-info">Lista clienti</a>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-info">Lista incasari clienti</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-info">Tickete clienti</button>
  </div>
</div>
<h4>Rapoarte furnizori </h4></br>
<div class="btn-group btn-group-justified" role="group">
<div class="btn-group" role="group">
  <a target='_blank' href="php/raportfurnizori.php" class="btn btn-default btn-success">Lista furnizori</a>
</div>
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-success">Lista plati furnizori</button>
</div>
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-success">Servicii oferite</button>
</div>
</div>
<h4>Rapoarte tickete </h4></br>
<div class="btn-group btn-group-justified" role="group">
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-warning">Tickete active</button>
</div>
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-warning">Tickete prio 1</button>
</div>
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-warning">Tickete prio 2</button>
</div>
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-warning">Tickete prio 3</button>
</div>
</div>
<h4>Rapoarte utilizatori </h4></br>
<div class="btn-group btn-group-justified" role="group">
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-primary">Administratori</button>
</div>
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-primary">Clienti</button>
</div>
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-primary">Furnizori</button>
</div>
</div>
<h4>Rapoarte contabile </h4></br>
<div class="btn-group btn-group-justified" role="group">
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-danger">Jurnal incasari plati</button>
</div>
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-danger">Registru banca</button>
</div>
<div class="btn-group" role="group">
  <button type="button" class="btn btn-default btn-danger">Stat de plata</button>
</div>
</div>

</div>
<?php
include 'footer.php';
 ?>
