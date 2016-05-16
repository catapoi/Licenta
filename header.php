<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="pics/favicon.ico">
    <title>Proiect de licenta Catalin Poienaru</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker3.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/navbar-static-top.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="login.php">Login</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="tickets.php">Sistem Tichete</a></li>
            <li><a href="reports.php">Rapoarte</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clienti<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="">Vizualizare</a></li>
                <li><a href="">Cautare</a></li>
                <li><a data-toggle="modal" data-target="#myModal2">Adaugare</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Furnizori <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a data toogle="modal" data-target="#myModal3">Adaugare</a></li>
                <li><a href="#">Cautare</a></li>
                <li><a href="#">Vizualizare</a></li>
              </ul>
            </li>
            <li>
<!--_modal furnizori -->
            <li>
                <a href="conta.php">Contabilitate</a>
            </li>
            <li>
              <a href="admin.php">Administrare</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
            <!-- Modal  Add Client-->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Adauga Client</h4>
                  </div>
                  <div class="modal-body">
                      <!-- Add client form -->
                      <form class="form-horizontal" method="post" action="php/addclient.php">
                        <div class="form-group">
                          <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputname" class="col-sm-2 control-label">Nume</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputtext1" name="nume" placeholder="Nume">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputname1" class="col-sm-2 control-label">Nr. Reg. Com.</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputtext2" name="nr_reg_com" placeholder="Numar de inregistrare la Registrul Comertului/ An">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputname" class="col-sm-2 control-label">C.I.F.</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputtext1" name="cif" placeholder="Cod Inregistrare Fiscala">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputname" class="col-sm-2 control-label">Sediul</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputtext1" name="adrsediu" placeholder="Adresa sediu">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputname" class="col-sm-2 control-label">Judet</label>
                          <div class="col-sm-10">
                          <select class="form-control" name="judet">
                            <option>ALBA</option>
                            <option>ARAD</option>
                            <option>ARGES</option>
                            <option>BACAU</option>
                            <option>BIHOR</option>
                            <option>BISTRITA-NASAUD</option>
                            <option>BOTOSANI</option>
                            <option>BRAILA</option>
                            <option>BRASOV</option>
                            <option>BUZAU</option>
                            <option>BUCURESTI</option>
                            <option>CALARASI</option>
                            <option>CARAS-SEVERIN</option>
                            <option>CLUJ</option>
                            <option>CONSTANTA</option>
                            <option>COVASNA</option>
                            <option>DIMBOVITA</option>
                            <option>DOLJ</option>
                            <option>GALATI</option>
                            <option>GIURGIU</option>
                            <option>GORJ</option>
                            <option>HARGHITA</option>
                            <option>HUNEDOARA</option>
                            <option>IALOMITA</option>
                            <option>IASI</option>
                            <option>ILFOV</option>
                            <option>MARAMURES</option>
                            <option>MEHEDINTI</option>
                            <option>MURES</option>
                            <option>NEAMT</option>
                            <option>NECUNOSCUT</option>
                            <option>OLT</option>
                            <option>PRAHOVA</option>
                            <option>SALAJ</option>
                            <option>SATU MARE</option>
                            <option>SIBIU</option>
                            <option>SUCEAVA</option>
                            <option>TELEORMAN</option>
                            <option>TIMIS</option>
                            <option>TULCEA</option>
                            <option>VASLUI</option>
                            <option>VILCEA</option>
                            <option>VRANCEA</option>
                          </select>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="inputname" class="col-sm-2 control-label">Cont IBAN</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputtext1" name="iban" placeholder="Cont IBAN">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputname" class="col-sm-2 control-label">Banca</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputtext1" name="banca" placeholder="Banca">
                          </div>
                        </div>
                        <button type="submit" id='addclient' class="btn btn-primary pull-right">Salveaza</button><br />
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
                  </div>
                </form>
                </div>
              </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>


            <!-- End modal -->
