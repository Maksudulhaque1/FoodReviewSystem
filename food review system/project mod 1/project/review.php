<?php include 'connection.php'; ?>
<?php
include 'connection.php';

if (isset($_POST['SUBMIT'])) {
// receive all input values from the form
$id = mysqli_real_escape_string($db, $_POST['Branch_Name']);
$c1 = mysqli_real_escape_string($db, $_POST['Food_Name']);
$c2 = mysqli_real_escape_string($db, $_POST['Cuisine_Style']);
$c3 = mysqli_real_escape_string($db, $_POST['Food_price']);
$c4 = mysqli_real_escape_string($db, $_POST['Veg/Non_Veg']);
$c5 = mysqli_real_escape_string($db, $_POST['Sweet/Savory']);
$c6 = mysqli_real_escape_string($db, $_POST['Leave_a_review']);
$c7 = mysqli_real_escape_string($db, $_POST['Ratings']);
$query = "INSERT INTO `review`(`Branch_Name`, `Food_Name`, `Cuisine_Style`, `Food_price`, `Veg/Non_Veg`, `Sweet/Savory`, `Leave_a_review`, 'Ratings') VALUES ('{$id}','{$c1}','{$c2}','{$c3}','{$c4}','{$c5}','{$c6}','{$c7}')";
$status = "";

if (mysqli_query($db, $query)) {
$status = "success";
} else {
$status = "Error description: " . mysqli_error($db);

}

echo $status;
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Leave A Review</title>
    <style>
        body{
             background:#B0BEC5;
        }
      
        table{
            width: 800px;
            margin-top: 300px;
            margin-left: 500px;
            text-align: center;
            table-layout: fixed;
        }
        table,tr,th,td{
            padding: 20px;
            color: black;
            border-bottom: 1px solid #000000;
            border-collapse: collapse;
            font-size: 18px;
            font-family: fantasy;
         }
        .btn{
    background:  linear-gradient(to right, rgba(39,105,122,1) 0%, rgba(25,121,148,0.71) 41%, rgba(41,111,128,0.55) 65%, rgba(9,50,61,0.3) 100%);
    border-radius: 4px;
    padding: 18px 360px;
    color: azure;
    font: 20px 'Neuton' , serif;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 1px 2px 8px rgba (1,1,1,1,2);
    -webkit-transition: box-shadow 1s ease;
}
.btn:hover;
box-shadow: 1px 4px 8px rgba(0,0,0,0.6);
text-shadow: 1px 2px 8px rgba (1,1,1,1,2);
    -webkit-transition: box-shadow 1s ease;
    
        h1 {
    color: #FFFFFF;
    font: 900 96px 'Mr De Haviland', cursive;
    text-shadow: 1px 4px 8px rgba(1,1,1,1.2); 
    margin-bottom: 24px;
}
    </style>
</head>
<body>
        <div class="review-title">
        <h1>DEAR USER</h1>
        <h2>WE ARE ALWAYS READY TO SERVE YOU!</h2></div>
        <div class="review-form">
        <form id="review-form" method="post" action="">
 <form>
  <table>
       <tr>
    <td>Branch Name :</td>
    <td>
     <select>
    <option>Main Branch(Mohakhali)</option>
      <option>Niketan</option>
      <option>Banani</option>
      <option>Dhanmondi</option>
      <option>Uttara</option>
      <option>Mohammadpur</option>

     </select>
    </td>
   </tr>
   <tr>
    <td>Food Name</td>
    <td>
     <select>
    <option>Chicken Burger</option>
         <option>Beef Burger</option>
         <option>Cheese Burger</option>
      <option>Chicken pizza</option>
         <option>four seasons pizza</option>
      <option>pasta</option>
         <option>Fish n chips</option>
      <option>soup</option>
      <option>salad</option>
      <option>noodles</option>

     </select>
    </td>
   </tr>
   <tr>
    <td>Cuisine style</td>
    <td>
     <select>
    <option>Fast Food</option>
         <option>American</option>
         <option>Seafood</option>
      <option>Indian</option>
         <option>Chinese</option>
      <option>Thai</option>
         <option>Italian</option>
      <option>Desi</option>
      <option>French</option>
      <option>authentic japanese</option>

     </select>
    </td>
 <tr>
    <td>Food Price:</td>
    <td> <input type="text" name="" placeholder="the price of the food"></td>
   </tr>
      
   <tr>
    <td>Veg/Non veg :</td>
    <td>
     <input type="radio" name="Veg/Non veg"> Veg
     <input type="radio" name="Veg/Non veg"> Non Veg
     
    </td>
       <tr>
       <td>Sweet/Savory :</td>
    <td>
     <input type="radio" name="Sweet/Savory"> Sweet
     <input type="radio" name="Sweet/Savory"> Savory
     
    </td>
           </tr>
   <tr>
       <tr>
       <td>Leave a review :</td>
    <td><textarea rows="7" cols="25" placeholder="Write your review"></textarea></td>
  </tr>
          <tr>
    <td>Ratings:</td>
    <td>
     <select>
    <option>⭐</option>
      <option>⭐⭐</option>
      <option>⭐⭐⭐</option>
      <option>⭐⭐⭐⭐</option>
      <option>⭐⭐⭐⭐⭐</option>
     </select>
    </td>
   </tr>
   <tr>
    <td>  <a href="" class="btn">Submit</a></td>
   </tr>
  </table>
 </form>
   
</body>
</html>