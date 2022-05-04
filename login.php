<body>

    <div class="container">
        <div class="row">
           
                <div class="menue">
                    
            </div>
            &nbsp;&nbsp;&nbsp;
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel"><!-- has form in it-->
				
                    
                    <div class="form-panel"><center>
                        <i>Login As:</i>
                        <select onchange = "page(this.value)">
                            <option value = "php/admin_index.php">System Admin</option>
                            <option selected disables>Student Voter</option> 
                        </select>
                        <p/>
                    </center>
                        <form role="form" method = "post" class="index-form">
                            <div class="heading">
                            <center>Student Login</center>
                            </div>
                                
                                <div class="form-field">
									<label for = "username">Matrícula: </label><br/>
										<input class="form-control" placeholder="Ingrese Matrícula"name="matricula" type="text" required = "required">
                                </div>
								
                                <div class="form-field">
									<label for = "username" >Password: </label>
										<input class="form-control" placeholder="Ingrese contraseña" name="password" type="password" required = "required">
                                </div>
                             <br/>
                                <center><button class="btn btn-lg btn-success btn-block" style= " margin-bottom:0px;" width="50">Login</button>
                                &nbsp; 
                            <a href="php/registro_usuario_be.php"><button type="button" class="btn btn-lg btn-success btn-block" data-dismiss="modal" style= " margin-bottom:0px;">Registrarse</button></a>
            
                                &nbsp;

                                <?php include ('login_query.php');
                                
                                ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

  <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>
</body>

</html>
