<?php
include "header.php";
include "php/functii.php";
?>
<div class="container">
  <div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">Adaugare utilizator</div>
        <div class="panel-body">
          <form method="post" action="php/adduser.php" >
            <fieldset class="form-group">
              <label for="username">Nume utilizator</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Nume utilizator">
            </fieldset>
            <fieldset class="form-group">
              <label for="Email">Adresa Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              <small class="text-muted">We'll never share your email with anyone else.</small>
            </fieldset>
            <fieldset class="form-group">
              <label for="exampleSelect1">Rol</label>
              <select class="form-control" id="role" name="role">
                <option>Admin</option>
                <option>Operator</option>
                <option>Client</option>
                <option>Furnizor</option>
                <option>Manager</option>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="Password">Parola</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Parola">
            </fieldset>
          <input type="submit" class="btn btn-primary" value="Adauga">
          </form>
        </div>
      </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">Utilizatori inregistrati</div>
            <div class="panel-body">
              <table class="table">
                <tr><th>Nume Utilizator</th><th>Email</th><th>Rol</th></tr>
                <?php
                $sql = "SELECT * FROM users";
                $result = mysqli_query($mysqli,$sql)or die(mysqli_error());
                while($row = mysqli_fetch_array($result)) {
                  $name = $row['name'];
                  $role = $row['role'];
                  $email = $row['email'];
                  echo "<tr><td>".$name ."</td><td>".$role."</td><td>".$email."</td></tr>";
                }
                mysqli_close($mysqli);
                ?>
             </table>

            </div>
          </div>
        </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">Cautare utilizator</div>
            <div class="panel-body">
              <input type="text">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">Raport utilizatori</div>
              <div class="panel-body">
                <a class="btn btn-default" target = '_blank' href="php/raportuseri.php">Genereaza Raport                
              </div>
            </div>
          </div>
  </div>
</div>

<?php
include "footer.php";
 ?>
