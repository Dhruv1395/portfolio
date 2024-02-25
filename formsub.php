<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio form</title>
    <style>
        body{
            background-image: url('https://cdn-media-2.freecodecamp.org/w1280/5f9c9cfc740569d1a4ca3543.jpg');
            background-size:cover;
            background-repeat:no-repeat;
            background-color:black;
        }
    </style>
</head>
<body>
    
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $add = $_POST["address"];
    $achieve = $_POST["achievements"];
    $hobby = $_POST["Hobby"];
   
    echo "<center><table border='3px'style='color:white;margin-top:10%;'>
    <tr>
        <th>Name</th>
        <th>E-mail</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Achievements</th>
        <th>Hobby</th>
       

     </tr>
    <tr>
       <td>".$name."</td>
       <td>".$email."</td>
       <td>".$phone."</td>
       <td>".$add."</td>
       <td>".$achieve."</td>
       <td>".$hobby."</td>
       
    </tr>
</table></center>";

    
    

?>
</body>
</html>
