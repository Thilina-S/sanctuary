<?php
    include 'db.php';
    include 'main-header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/review-display.css">
</head>
<body>

<h1><u>reviews</u></h1>



<table border ="1" style="width:80%" align="center">
<thead>
  <tr>
    <th><p class="dis">Name</p></th>
    <th><p class="dis">Description</p></th>
   
  </tr>

</thead>

<tbody>



<?php
    $sql="SELECT* FROM `review`";
    $result = mysqli_query($conn, $sql); 
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['review_user_id'];
            $description = $row['description'];
            $name = $row['name'];
          
               echo '<tr>
               <td scope="row">'.$id.'</td>
               <td>'.$description.'</td>
   
               <td>
             
           </tr>';
        } 
    }
 ?> 



 </tbody>
 </table>  
</body>
</html>
