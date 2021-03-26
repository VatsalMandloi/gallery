<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/title.jpg" />
    <title>GALLERY</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body >
    <div>
        <?php
            require 'header.php';
      
           ?>
<section class="text-gray-400 bg-gray-800 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex w-full mb-20 flex-wrap">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-white lg:w-1/3 lg:mb-0 mb-4">BLISS.</h1>    
      <form class="form-inline" method="post" action="products.php">
    <input type="text" name="id" class="form-control" placeholder="Search..">
    <button type="submit" name="save" class="btn btn-danger">Search</button>
  </form>
  
  <div class="btn-group" role="group" style="margin-left:500px;">
    <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Category
    </button>
    <div class="dropdown-menu bg-dark" aria-labelledby="btnGroupDrop1">
    <a class="dropdown-item text-danger" href="index.php" >All</a>
      <a class="dropdown-item text-danger" href="category.php?cat='red'" >Red</a>
      <a class="dropdown-item text-danger"  href="category.php?cat='yellow'">Yellow</a>
      <a class="dropdown-item text-danger" href="category.php?cat='orange'" >Orange</a>

    </div>
  </div>

    </div>
   
    <div class="" >
   
      <div class="flex flex-wrap w-full">

<?php
include "connection.php";
$cat=$_GET['cat']; 

    
     $sql="SELECT * FROM pic where category=$cat";
    
    $records=mysqli_query($con,$sql) or die( mysqli_error($con));
 
while($data = mysqli_fetch_array($records))
{
?>
        <div class="md:p-2 p-1 w-1/3">
        <a href="products.php?id=<?php echo $data['id']; ?>"><img alt="gallery" class="w-full object-cover h-full object-center block" src="<?php echo $data['image']; ?>"> 
        </a>     
        </div>
<?php
}
?>

      </div>
    </div>
  </div>
</section>


    
<?php
            require 'footer.php';
           ?>

    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>


