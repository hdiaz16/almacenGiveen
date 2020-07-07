 <div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-lg">
    <div class="navbar">
      <div class="pull-center">
       
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b text-sm text-center" >
        <img src="assets/images/logo.png" width="150">
      </div>
      <form  method="POST" action=" <?php echo base_url('user')?> ">
        <div class="md-form-group float-label">
          <input type="text" class="md-input"  id="login-username" name="login-username" required>
          <label>Correo</label>
        </div>
        <div class="md-form-group float-label">
          <input type="password" class="md-input"  id="login-password" name="login-password" required>
          <label>Contraseña</label>
        </div>      
        
        <button type="submit" class="btn primary btn-block p-x-md">Iniciar Sesion</button>
      </form>
    </div>

  
  </div>

<!-- ############ LAYOUT END-->

  </div>