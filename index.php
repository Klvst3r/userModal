<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/dashboard/"> -->

    <title>PHP Customerdb - Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        /**
         * Abrimos la ventana modal para crear un nuevo elemento.
         * We open a modal window to create a new element.
         * @returns {undefined}
         */
        function newCbLanguage(){                 
            openCbLanguage('new', null, null, null, null, null, null, null);
        }
        /**
         * Abrimos la ventana modal teniendo en cuenta la acción (action) para 
         * utilizarla como creación (Create), lectura (Read) o actualización (Update).
         * We opened the modal window considering the action (action) to use 
         * as creation (Create), reading (Read) or upgrade (Update).
         * @param {type} action las acciones que utilizamos son : new para Create, see para Read y edit para Update.
         *      Actions we use are :  new for Create, see for Read and edit for Update.
         * @param {type} idlanguage
         * @param {type} namelanguage
         * @param {type} isactive
         * @param {type} languageiso
         * @param {type} countrycode
         * @param {type} isbaselanguage
         * @param {type} issystemlanguage
         * @returns {undefined}
         */
        function openCbLanguage(action, idlanguage, namelanguage, isactive, languageiso, countrycode, isbaselanguage, issystemlanguage){    
            document.formCbLanguage.id_user.value = id_user;
            document.formCbLanguage.name.value = name;
            document.formCbLanguage.user_name.value = user_name;
            
             
            document.formCbLanguage.id_user.disabled = (action === 'see')?true:false;                
            document.formCbLanguage.name.disabled = (action === 'see')?true:false; 
            document.formCbLanguage.user_name.disabled = (action === 'see')?true:false; 
            
             
            $('#myModal').on('shown.bs.modal', function () {
                var modal = $(this);
                if (action === 'new'){                            
                    modal.find('.modal-title').text('Datos del Usuario');  
                    $('#save-language').show();
                    $('#update-language').hide();                
                }else if (action === 'edit'){
                    modal.find('.modal-title').text('Actualizar idioma');
                    $('#save-language').hide();                    
                    $('#update-language').show();   
                }else if (action === 'see'){
                    modal.find('.modal-title').text('Ver idioma');
                    $('#save-language').hide();   
                    $('#update-language').hide();   
                }
                $('#idlanguage').focus()
             
            });
        }        
         
    </script>



  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <!-- <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li> -->
            <li><a href="#">Help</a></li>
            <li><a href="#" target="blanck">Klvst3r Site</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Usuarios <span class="sr-only">(current)</span></a></li>
                        <li><a href="">Monedas</a></li>
                        <li><a href="">Países</a></li>          
                    </ul>
                    <ul class="nav nav-sidebar">            
                        <li><a href="">Empresa</a></li>
                        <li><a href="">Clientes</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">            
                        <li><a href="#">Informes</a></li>
                        <li><a href="#">Análisis</a></li>  
                        <li><a href="">Ayuda</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header">Dashboard</h1>
 
                    <div class="row placeholders">
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Empresas</h4>
                            <span class="text-muted">Empresas definidas</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Clientes</h4>
                            <span class="text-muted">Clientes por empresa</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Administración</h4>
                            <span class="text-muted">Administración de tablas auxiliares</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="150" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Ayuda</h4>
                            <span class="text-muted">Documentación de ayuda</span>
                        </div>
                    </div>
                     
                   <!-- Código PHP CRUD para presentar los idiomas. -->
                    <h2 class="sub-header">Usuarios</h2>                
  
                    <?php
                        include './database/DatabaseConnect.php';

                        //Controller
                        include './controller/UserController.php';
                         
                        $dConnect = new DatabaseConnect;
                        $cdb = $dConnect->dbConnectSimple();           

                       /* if (isset($_POST["save-language"]) ) {  
                            $idlanguage = $_POST['idlanguage'];
                            $namelanguage = $_POST['namelanguage'];
                            $isactive  = $_POST['isactive'];
                            $languageiso = $_POST['languageiso'];
                            $countrycode = $_POST['countrycode'];
                            $isbaselanguage = $_POST['isbaselanguage'];
                            $issystemlanguage = $_POST['issystemlanguage']; 

                            //$userController  = new userController(); 
                            
                            //$userController -> create($idlanguage, $namelanguage, $isactive, $languageiso, $countrycode, $isbaselanguage, $issystemlanguage);
                            
                        }*/


                             
                    ?>  

            <!-- Añadimos un botón para el diálogo modal -->
            <button type="button"
            class="btn btn-lg btn-primary"
            data-toggle="modal"
            data-target="#myModal"
            onclick="newCbLanguage()">NUEVO</button> 

            <!-- Botón para el diálogo modal -->

    <!-- 
    Create - Read - Update    
    Creamos una ventana Modal que utilizaremos para crear un nuevo idioma, actualizarlo o mostrarlo.
    We create a modal window used to create a new language, update or display.-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Datos del Usuario</h4>
            </div>
                <div class="modal-body">  
            <form role="form" name="formCbLanguage" method="post" action="index.php">

                <!-- <div class="col-md-6"> -->

                    <div class="input-group">
                        <label for="idlanguage">ID</label>
                        <input type="text" class="form-control" id="idlanguage" name="idlanguage" placeholder="es_ES (por ejemplo)" disabled>
                        <small class="text-muted">User.</small>
                    </div>
                    <div class="input-group"> 
                        <label for="namelanguage">Nombre</label>
                        <input type="text" class="form-control" id="namelanguage" name="namelanguage" placeholder="Nombre" aria-describedby="sizing-addon2" disabled>
                    </div>
                                      
                    

                <!-- </div> -->
                <!-- <div class="col-md-6">

                    <div class="input-group">
                        <label for="idlanguage">ID</label>
                        <input type="text" class="form-control" id="idlanguage" name="idlanguage" placeholder="es_ES (por ejemplo)" >
                        <small class="text-muted">User.</small>
                    </div>
                    <div class="input-group"> 
                        <label for="namelanguage"> - </label>
                        <input type="text" class="form-control" id="namelanguage" name="namelanguage" placeholder="Nombre" aria-describedby="sizing-addon2" disabled>
                    </div>
                                      
                    

                </div> -->


                </form>
                </div>
                <div class="modal-footer">

                    <button id="save-language" name="save-language" type="submit" class="btn btn-primary">Guardar</button>
                     
                    <button id="cancel"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>                                    
                </div>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    

<!--                    Ventana Modal.                       -->

                        


             
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>USER</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form role="form" name="formListCbLanguage" method="post" action="index.php">
                                <?php
                                try {
                                   /* $query = "SELECT * FROM cb_language;";
                                    $statement = $cdb->prepare($query);
                                    $result = $statement->execute();
                                    $rows = $statement->fetchAll(\PDO::FETCH_OBJ); */

                                    /*-----------  Sustitución de la consulta por el controlador -------------*/
                                    //include 'controller/userController.php';  

                                    $userController = new UserController();
                                    $userController->cdb = $cdb;  

                                    $rows = $userController->readAll();

                                    /*-----------  Sustitución de la consulta por el controlador -------------*/
                                    foreach ($rows as $row) {
                                        ?>
                                        <tr>
                                            <td><?php print($row->id_user); ?></td>
                                            <td><?php print($row->name); ?></td>
                                            <td><?php print($row->user_name); ?></td>
                                            
                                            <!-- <td>BOTONES DE ACCIONES</td> -->
                                            <td>
                                            <button id="see-language" name="see-language"type="button" class="btn btn-success"
                                            data-toggle="modal"
                                            data-target="#myModal"
                                            onclick="openCbLanguage('see', 
                                                        '<?php print($row->id_user); ?>', 
                                                        '<?php print($row->name); ?>',
                                                        '<?php print($row->user_name); ?>')">
                                            Ver</button>



                                            </td>
                                            </tr>      
                                         
                                    <?php
                                    }
                                } catch (Exception $exception) {
                                    echo 'Error hacer la consulta: ' . $exception;
                                }
                                ?>  
                                   
                                </form>        
                            </tbody>      
                        </table>                    
                    </div>
                    <!-- Fin código PHP CRUD -->
                     
                     
                </div>
            </div>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>-->

    <script src="js/jquery-1.12.4.min.js"></script>

    <script>window.jQuery || document.write('<script src="js/jquery-1.12.4.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
