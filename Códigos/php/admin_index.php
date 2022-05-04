
<body>
    <div class="container">
        <div class="row">
		
                    <center> 
                        <i>Login As:</i>
                        <select onchange = "page(this.value)">
                            <option selected disables>System Admin</option>
                            <option value = "../login.php">Student Voter</option> 
                    </select>
                        
                    </center>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    
                    <div class="form-heading">
                        <center>Admin Log in</center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                                <div class="form-group">
                                    <label for = "username" >Matrícula</label>
                                        <input class="form-control" placeholder="Ingrese Matrícula" name="matricula" type="text" autofocus>
                                </div>
												
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Ingrese contraseña" name="password" type="password" value="">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
							
									<?php include ('login_query.php');?>
                        </form>
                    </div>
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
