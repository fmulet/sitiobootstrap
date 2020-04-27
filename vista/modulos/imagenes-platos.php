    <div class="my-5">

      <h2 class="font-weight-bold text-center">NUESTROS PLATOS</h2>

      <h3 class="text-danger text-center">Pastas</h3>

      <div class="container-fluid">
        <diV class="row text-center justify-content-center">

          <!--PLATO 1-->
          <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="vista/images/plato1.jpg" alt="Card image cap">

            <div class="card-body">
              <h5 class="card-title text-success font-weight-bold">Pasta con salsa bolognesa</h5>
              <p class="card-text">Pasta con salsa bolognesa y aderezos a elección</p>
              <button type="button" class="btn btn-danger rounded-0" data-toggle="modal" data-target="#exampleModal">
                COMPRAR
              </button>

              <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-success text-center">
                      <h5 class="modal-title text-white font-weight-bold">CONFIRMACIÓN</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>¿Confirma que desea hacer la compra?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger rounded-0" data-toggle="modal" data-dismiss="modal" data-target="#exampleModal2" on>Aceptar</button>
                      <button type="button" class="btn btn-outline-danger rounded-0" data-dismiss="modal">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-success text-center">
                      <h5 class="modal-title  text-white font-weight-bold" id="exampleModalLabel">CREDENCIALES DE ACCESO</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body">
                      <form action="modelo/conexion.php" method="POST">
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="font-weight-bold">Usuario</label>
                          <input type="email" name="nombre_usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email" required>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1" class="font-weight-bold">Contraseña</label>
                          <input type="password" name="password_usuario" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" required>
                        </div>
                        <button type="submit" name="funcion" value="ingresar" class="btn btn-outline-danger rounded-0">Entrar</button>
                      </form>
                    </div>

                  </div>
                </div>
              </div>

            </div>

          </div>

          <!--PLATO 2-->

          <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="vista/images/plato2.jpg" alt="Card image cap">

            <div class="card-body">
              <h5 class="card-title text-success font-weight-bold">Pasta al pesto y carne picada</h5>
              <p class="card-text">Pasta al pesto con acompañamiento de nuestras exquisitas carnes picada</p>
              <button type="button" class="btn btn-danger rounded-0" data-toggle="modal" data-target="#exampleModal">
                COMPRAR
              </button>

              <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-success text-center">
                      <h5 class="modal-title text-white font-weight-bold">CONFIRMACIÓN</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body">
                      <p>¿Confirma que desea hacer la compra?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger rounded-0" data-toggle="modal" data-dismiss="modal" data-target="#exampleModal2" on>Aceptar</button>
                      <button type="button" class="btn btn-outline-danger rounded-0" data-dismiss="modal">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-success text-center">
                      <h5 class="modal-title  text-white font-weight-bold" id="exampleModalLabel">CREDENCIALES DE ACCESO</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body">
                      <form action="modelo/conexion.php" method="POST">
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="font-weight-bold">Usuario</label>
                          <input type="email" name="nombre_usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email" required>
                        </div>
                        
                        <div class="form-group">
                          <label for="exampleInputPassword1" class="font-weight-bold">Contraseña</label>
                          <input type="password" name="password_usuario" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" required>
                        </div>
                        <button type="submit" name="funcion" value="ingresar" class="btn btn-outline-danger rounded-0">Entrar</button>
                      </form>
                    </div>

                  </div>
                </div>
              </div>

            </div>

          </div>

          <!--PLATO 3-->

          <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="vista/images/plato3.jpg" alt="Card image cap">

            <div class="card-body">
              <h5 class="card-title text-success font-weight-bold">Ñoquis con hierbas finas</h5>
              <p class="card-text">Ñoquis con hierbas finas y un poco de picante</p>
              <button type="button" class="btn btn-danger rounded-0" data-toggle="modal" data-target="#exampleModal">
                COMPRAR
              </button>

              <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-success text-center">
                      <h5 class="modal-title text-white font-weight-bold">CONFIRMACIÓN</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>¿Confirma que desea hacer la compra?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger rounded-0" data-toggle="modal" data-dismiss="modal" data-target="#exampleModal2" on>Aceptar</button>
                      <button type="button" class="btn btn-outline-danger rounded-0" data-dismiss="modal">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-success text-center">
                      <h5 class="modal-title  text-white font-weight-bold" id="exampleModalLabel">CREDENCIALES DE ACCESO</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="modelo/conexion.php" method="POST">
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="font-weight-bold">Usuario</label>
                          <input type="email" name="nombre_usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" class="font-weight-bold">Contraseña</label>
                          <input type="password" name="password_usuario" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" required>
                        </div>
                        <button type="submit" name="funcion" value="ingresar" class="btn btn-outline-danger rounded-0">Entrar</button>
                      </form>
                    </div>

                  </div>
                </div>
              </div>

            </div>

          </div>


          <!--CIERRE-->



        </div>

      </div>

    </div>