<div class="container ">
        <div class="row d-flex  justify-content-center mt-4">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registrar Usuario</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="controller/agregarusuario/agregar.php" method ="post">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario">
                            
                          </div>
                          <div class="form-group">
                               <label for="exampleInputEmail1">Contraseña</label>
                                    <input class="form-control" name="password" type="password" value="" required>
                                </div>

                        
                            
                            <input type="hidden" class="form-control" id="idEstadoUsuario" name="idEstadoUsuario">

                            <input type="hidden" class="form-control" id="idRol"name="idRol" value="28">
                          </div>
                      
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>