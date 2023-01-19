
  
 <?php
if (isset($_GET['id'])){
  $id=$_GET['id'];
  $delete=mysqli_query($connection,"delete FROM 'supplier' where 'id'='$id'");
header("location:vendor portal.php");
die();
}
  ?>

 <?php include('./footer.php');?>
          
 
       



        </body>

      <style>
        .container-fluid{
          width: 200px;
           
          height:600px;
        }
      
  
        
      
        .bor{
          margin-left: 401px;
          margin-top: -661px;
    
         
        }
      

        
      </style>

</html>