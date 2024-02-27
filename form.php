<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <script src="https://kit.fontawesome.com/6d37effa6c.js" crossorigin="anonymous"></script>

    <style>
        body{
            background-image: url('https://cdn-media-2.freecodecamp.org/w1280/5f9c9cfc740569d1a4ca3543.jpg');

    background-size:cover;
    background-position: center;
    background-repeat: no-repeat;
        }
        form {
    
    padding: 20px;
    background-color: #fff;
    width: 40%;
    color: black;
    margin: 10px auto;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
    width: 300px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}
#container i{
    font-size: 25px;
    
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    margin-top: 40px;
    margin-left: 20%;
    border: none;
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    cursor: pointer;
    
}

input[type="submit"]:hover {
    background-color: #45a049;
}

input[type="reset"] {
    background-color: #2058c9;
    color: white;
    padding: 10px 20px;
    margin-top: 40px;
    margin-left: 20%;
    border: none;
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    cursor: pointer;
    
}

input[type="reset"]:hover {
    background-color: #153792;
}
#container{
    width: 70%;
   margin: 0px auto;
}
 h2{
    color: white;
    text-align: center;
    font-family: sans-serif;
    text-decoration: underline;
}
#container input::placeholder{
   
    color: black;
}
#container textarea::placeholder{
    color: black;
}
.fill-form h3{
    font-size: 20px;
    text-decoration: underline;
    margin:10px 0;
}
.fill-form button{
    padding: 10px;
    margin: 0px 30px;
    border: none;
    border-radius: 5px;
    background-color: aqua;
    font-weight: 700;
    font-size: 15px;
    color: black;
    cursor: pointer;
    transition: 0.3s;
}
.fill-form button:hover{
    box-shadow: 0px 0px 15px aqua,0px 0px 30px aqua;
}
span{
    color: rgb(0, 102, 255);
    margin: 5px;
}
input[type="file"]{
    margin: 10px 0px;
}

    </style>
</head>
<body>
    <h2>Student Information Form</h2>
        <div id="container">
            
            <form id="studentForm" onsubmit="return validateForm()" autocomplete="on" method="POST" action="#">
                <table style="margin-bottom: 20px;">
                    <tr>
                        <td><i class="fa-solid fa-user"></i></td>
                        <td><input type="text" id="name" name="name" placeholder="Name"required></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-envelope"></i></td>
                        <td><input type="email" id="email" name="email" placeholder="E-mail" required> </td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-phone"></i></td>
                        <td><input type="tel" id="phone" name="phone" placeholder="Phone Number"required></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-location-dot"></i></td>
                        <td><textarea id="address" name="address" placeholder="Address"required></textarea></td>
                    </tr>
                    
                    <tr>
                        <td><i class="fa-solid fa-trophy"></i></td>
                        <td><textarea id="achievements" name="achievements" placeholder="Your achievements"></textarea></textarea></td>
                    </tr>
                    <tr>
                        <td>Hobby</td>
                        <td><select  name="Hobby" id="Hobby" required>
                            <option value="sport">Sports</option>
                            <option value="Dancing">Dancing</option>
                            <option value="Singing">Singing</option>
                            <option value="Reading">Reading</option>
                            <option value="Others">Others</option>
                        </select></td>
                    </tr>
                    
                    
                    </table>
                    <span>Plese uplod your profile picture!</span>
                    <input type="file"name="file">
                    <br>
                 <input type="submit" value="Submit" name="submit">
                 <input type="reset" value="reset">
            </form>
        </div>
    
</body>
</html>
<?php
  if($_POST['submit']){
    $fname=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $achievements=$_POST['achievements'];
    $hobby=$_POST['Hobby'];

   $ins= "INSERT INTO form values( '$fname','$email','$phone','$address','$achievements','$hobby')";
   $data=mysqli_query($conn,$ins);
   if($data){
    //echo "data inseted";
   }
   else{
    echo "fail";
   }
    
  }
?>