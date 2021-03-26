<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","gallery");
if(count($_POST)>0) {
  $id=$_POST[id];
}
else if(count($_GET)>0) {
   $id=$_GET['id'];
}

$result = mysqli_query($conn,"SELECT * FROM pic where id='$id'");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<style>
img{
    box-shadow:0 0px 22px 0 red;
}
</style>
</head>
<body>
<?php
require "header.php"
?>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
 
?>

<section class="text-gray-400 bg-gray-800 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
 
    <img class="w-full object-cover h-full object-center block" alt="gallery" src="<?php echo $row['image']; ?>">
    <div class="text-center lg:w-2/3 w-full">
     
      <div class="flex justify-center">
      <?php if(!isset($_SESSION['email'])){  ?>
      <a href="login.php?id=<?php echo $row['id']; ?>" >
       <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg mt-4">Download</button>
     </a>  
     <?php
    }else{ ?>   
         <a href="<?php echo $row['image']; ?>" download>
       <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg mt-4">Download</button>
     </a>   
      <?php                                       
          }
      ?> 
      </div>
    </div>
  </div>
</section> 


<?php
$i++;
}
?>


<?php
require "footer.php"
?>
</body>
</html>
