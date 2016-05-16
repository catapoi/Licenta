<?php
include 'header.php';
?>
<div class="container">
  <div class="row">

<ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active"><a href="#">Adauga ticket<span class="badge"></span></a></li>
  <li role="presentation"><a href="searchti.php">Cauta ticket</a></li>
  <li role="presentation"><a href="prio1.php">Ticket Prio 1 <span class="badge">3</span></a></li>
  <li role="presentation"><a href="prio2.php">Ticket Prio 2 <span class="badge">34</span></a></li>
  <li role="presentation"><a href="prio3.php">Ticket Prio 3 <span class="badge">23</span></a></li>
  <li role="presentation"><a href="closedti.php">Tickete inchise <span class="badge">12</span></a></li>
  <li role="presentation"><a href="wiptickets.php">Tickete in lucru<span class="badge">4</span></a></li>
</ul>
</div>
<p class="text-info">
<div class="col-md-6">
  <form method="post" action="addticket.php">
    <select class="form-control">
    <option>Cloud</option>
    <option>Dezvoltare software</option>
    <option>Suport</option>
    <option>Access in sisteme</option>
    <option>Prio 1</option>
    </select>
    <div class="form-group">
    <label for="exampleInputEmail1">Cerere</label>
    <input type="text" class="form-control" id="example1" placeholder="Request" name="request">
    </div>
    <div class="form-group">
    <label for="example">Domeniu</label>
    <input type="text" class="form-control" id="example2" placeholder="Domain">
    </div>
    <div class="form-group">
    <label for="example">Client</label>
    <input type="text" class="form-control" id="example2" placeholder="Client" name="client">
    </div>
    <div class="form-group">
    <label for="example">Utilizator</label>
    <input type="text" class="form-control" id="example2" name="utilizator" placeholder="Utilizator">
    </div>
    <div class="form-group">
    <label for="example">Observatii</label>
    <textarea class="form-control" rows="3" name="observatii"></textarea>
    </div>
    <div class="form-group">
    <label for="exampleInputFile">Atasamente</label>
    <input type="file" id="exampleInputFile" name="atasamente">
  </div>
    <div class="form-group">
      <button type="submit" class="btn btn-default">Creare ticket</button>
    </div>


</div>
</p>

<?php
include 'footer.php';
?>
