<!DOCTYPE html>
<html lang="en">
    <head>

    <title>registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>
    <body>
    
            <!--php later on-->
             <br>
        <div class="container" style=" width:400px;">
        <div class="panel panel-default">
      <div class="panel-heading"style="height: 650px;">
      <div class="panel-body">
            <div class="col-md-4 offset-md-4 registerContainer" style="color:green;">
                   <h2 class="center"><p>&nbsp;&nbsp;&nbsp;REGISTRATION </p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FORM </br> </h2>
     
            </div>

          

      </div>
            <form action="register.php"method="post">
                <div class="form-group" >
                 <label for="username">given name</label>
                 <input type="username" name="username" class="form-control form-conttrol-lg" values="<?php echo $username; ?>" placeholder="username">
       

       
         <div class="form-group" >
                 <label for="username">last name</label>
                 <input type="username" name="username" class="form-control form-conttrol-lg" values="<?php echo $username; ?>" placeholder="username">
         
          
             <div class="form-group">
                 <label for="username">Age</label>
                 <input type="username" name="password" class="form-control form-conttrol-lg" placeholder="password">
             

             <div class="form-group">
                 <label for="username">birthday</label>
                 <input type="username" name="password" class="form-control form-conttrol-lg" placeholder="password">
             </div>
         <div class="form-group">
                 <label for="username">username</label>
                 <input type="username" name="confirm password" class="form-control form-conttrol-lg" placeholder="Confirm password">
             
    
                <div class="form-group">
                 <label for="email">email</label>
                 <input type="email" name="email" class="form-control form-conttrol-lg"  placeholder="email">
          
     
             <div class="form-group">
                 <label for="username">password</label>
                 <input type="username" name="password" class="form-control form-conttrol-lg" placeholder="password">
         
      
             <div class="form-group">
                 <label for="username">confirm password</label>
                 <input type="username" name="confirm password" class="form-control form-conttrol-lg" placeholder="Confirm password">
             </div>
     
             <div class="form-group">
                 
                 <button type="submit" name="register button" class="btn btn-block btn-lg btn-primary"> REGISTER</buttom>
                 </div>
                 
                    <p class="text-center">have account? <a href="login.php"> sign in</a></p>
             </div>
          
             <style>
                body{
                    margin-top: 1px;
                    background-image:url("hos.jpg");
                    background-image:url(hos.jpg);
                    background-size: 1740px 1270px;
                    background-position:center ;
                    background-repeat: no-repeat;
                
       
        
                }
             
                .container{
                position:center;
                height: 100px;
                color:blueviolet;
                margin-bottom: 200px;
                 

                }
                .h2{
                    font-style: italic;
              
                }
                </style>
    </body>
</html>