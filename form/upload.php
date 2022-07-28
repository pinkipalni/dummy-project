<?php 
   $conn = mysqli_connect('localhost','root','','affiliate2');
   if(isset($_POST['submit'])){
     $filename = $_FILES["image"]["name"];
     $tempname = $_FILES["image"]["tmp_name"];
     $fileNameI = time()."_I_{$filename}";
     $folder = "uploads/{$fileNameI}";

  move_uploaded_file($tempname, $folder);
     $vendor= $_POST['vendor'];
     $category= $_POST['category'];
     $sku= $_POST['sku'];
     $color= $_POST['color'];
     $inventory= $_POST['inventory'];
     $tp= $_POST['tp'];
     $mrp= $_POST['mrp'];
     $sizes= $_POST['size'];
     $chk="";  
      foreach($sizes as $size)  
       {  
          $chk .= $size.",";  
       }
     

     $query = "INSERT INTO form(image,vender,category,sku,color,inventory,tp,mrp,size) VALUES ('$fileNameI','$vendor','$category','$sku','$color','$inventory','$tp','$mrp','$chk')";
       $result = mysqli_query($conn, $query);
       if($result==1)  
   {  
      echo "Inserted Successfully";
      header("location:form.php");  
   }  
else  
   {  
      echo "Failed To Insert";  
   } 
         
      
   }
?>