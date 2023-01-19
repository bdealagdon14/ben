<?php
include 'header.php';

?>
<!DOCTYPE html>
<html>


<head>
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
   //connect to database
$conn = mysqli_connect("localhost","root","","logistic 2");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$conn = mysqli_connect('localhost','admin123','1234','logistic 2');

//delete database

if (isset($_POST['delete'])){
  $id=$_POST['id'];
  

$query ="DELETE FROM supplier WHERE id='$id'";

header('location:vendor portal.php');
header("location:vendor portal.php");
die();
}

// check connection
if (!$conn) {
  echo 'connection error: ' .mysqli_connect_error();
}


  //get database
  $sql = "SELECT * FROM supplier";

  //make query & get result
  $result = mysqli_query($conn, $sql);

  //fetch the result
  $supplier = mysqli_fetch_all($result, MYSQLI_ASSOC);
  


?>



</div>
<div class="card-body">
<table  class="table table-bordered"  style="position:relative; ; width:750px; margin-left:400px;" >
<ul class="nav nav-pills" style=" margin-left:400px; margin-top:140px">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
</li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
<thead>
<tr>

      <th scope="col">NO.</th>
      <th scope="col">First name</th>
      <th scope="col">Last  name</th>
      <th scope="col">types</th>
      <th scope="col">Offer</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
      <th scope="col">Print</th>
 

      

</tr>
  </thead>
 

  <tbody">

 
<?php foreach($supplier as $supplier) {?>

<th><h6><?php echo $supplier ['id']; ?></td>
<th><h6><?php echo $supplier ['First name']; ?></td>
<th><h6><?php echo ($supplier ['Last name']); ?></td>
<th><h6><?php echo ($supplier ['Types']); ?></th>
<th><h6><?php echo ($supplier ['Offer']); ?></th>
<th><button type="submit" class="btn btn-primary">Submit</button></th>
<th><button type="submit" class="btn btn-primary" style="background-color:red;">DELETE</button></th>
<th><input type="submit"class="btn btn-primary" onclick="window.print()" value="Print Here" /></th>
</tbody>


  <?php }
?>
<?php foreach($supplier as $supplier) {?>
  
  <?php }
  
?>




</table>

 
</tbody>




 


   </body>
   </html>
   <?php
   include 'footer.php';
   ?>