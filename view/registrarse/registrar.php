<div class="container ">
        <div class="row d-flex  justify-content-center mt-4">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registro de informacion</h3>
                    </div>
                    <div class="panel-body">
                       <form role="form" action="controller/registrar/agregando.php" method ="post">
                              
                                  <div class="form-group">
                                    <label for="idTipoIdentificacion">Tipo De Identificacion</label>
                                    <select class="form-control" id="idTipoIdentificacion" name="idTipoIdentificacion" required>
                                       <option>Seleccione una Opcion</option>
                                      <option value="31">CC</option>
                                      <option value="32">TI</option>
                                      
                                    </select>
                                  </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">identificacion</label>
                                <input type="text" class="form-control" id="identificacion" name="identificacion"onkeypress="return numeros(event)" required>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type=text class="form-control" id="nombre" name="nombres" onkeypress="return soloLetras(event)" required>
                                
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellidos" onkeypress="return soloLetras(event)" required>
                              </div>
                              
                                
                                <div class="form-group">
                                <label for="exampleInputPassword1">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                              </div>
                               <div class="form-group">
                                <label for="exampleInputPassword1">Telefono</label>
                                <input type="text" class="form-control" id="tel" name="telefono" onkeypress="return numeros(event)" required>
                              </div>
                             <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tipo De Persona</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="idTipoPersona" required>
                                       <option>Seleccione una Opcion</option>
                                      <option value="33">Cliente</option>
                                      <option value="34">Empleado</option>
                                      
                                    </select>
                                  </div>
                              <div class="form-group">
                                    <label for="exampleFormControlSelect1">Estado De Persona</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="idEstadoPersona" required>
                                       <option>Seleccione una Opcion</option>
                                      <option value="29">Activo</option>
                                      <option value="30">Inactivo</option>
                                      
                                    </select>
                                  </div>
                              <button type="submit" class="btn btn-primary" href="index.php?pag=7">Enviar</button>        
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/metodos.js"></script>
