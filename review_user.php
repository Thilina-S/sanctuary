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

<a href="review-getreview.php"><button class="btn0"> ADD A REVIEW</button></a>

<table border ="1" style="width:80%" align="center">
<thead>
  <tr>
    <th><p class="dis">Name</p></th>
    <th><p class="dis">Description</p></th>
    <th><p class="dis">Update/Delete</p></th>
  </tr>

</thead>
<tbody>

<?php
   $id = $_SESSION['user_id'];
    $sql = "SELECT * FROM `review` WHERE review_user_id='$id' GROUP BY review_user_id,review_id ";
    $result = mysqli_query($conn, $sql); 
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['review_user_id'];
            $id1 = $row['review_id'];
            $description = $row['description'];
            $name = $row['name'];

               echo '<tr>
               <td scope="row">'.$id.'</td>
               <td>'.$description.'</td>
   
               <td>
               <button class="btnUpdate"><a href="review-update.php?
               updateid='.$id1.'" class="text-light">Update</a></button>
               
               <button class="btnDelete"><a href="review-delete.php?
               deleteid='.$id1.'" class="text-light">Delete</a></button>
               </td>
           </tr>';
        } 
    }
 ?> 



 </tbody>
 </table>  
</body>
</html>
