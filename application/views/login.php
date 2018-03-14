<!DOCTYPE html>  
 <html>  
 <head>  
      <title> Login  <?php echo $title; ?></title>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>  
 </head>  
 <body>
 	<center><h1> Login Here </h1> </center> 
      <div class="container">  
           <br /><br /><br />  
           <form method="post" action="<?php echo base_url('index.php/welcome/login_validation'); ?>">  
                <div class="form-group">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('username'); ?>
                     </span>                 
                </div>  
                <div class="form-group">  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('password'); ?>
                     </span>  
                </div>  
                <div class="form-group">  
                    <center><input type="submit" name="insert" value="Login" class="btn btn-info" /> &nbsp &nbsp 
                      <a href=<?php echo base_url('index.php/welcome/register'); ?>>Register</a> 
                      </center> 
                     <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                   ?>  
                </div>  
           </form>  
      </div>  
 </body>  
 </html>