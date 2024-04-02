<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operation</title>
</head>
<body align="center">
    <div class="container">
        <div class="title">
            Registration Form 
            <form action="#" method="POST">
                <div class="form">
                <div class="input_field">
                    <label>First Name:</label>
                    <input type="text" class="input" name="fname">  <br><br>  
                </div>
                <div class="input_field">
                    <label>Last Name:</label>
                    <input type="text" class="input" name="lname">   <br><br>  
                </div>
                <div class="input_field">
                    <label>Password:</label>
                    <input type="password" class="input" name="password">   <br><br>  
                </div>
                <div class="input_field">
                    <label>confirm password:</label>
                    <input type="password" class="input" name="cpassword">   <br><br>  
                </div>
                <div class="input_field">
                    <label>Gender:</label>
                    <div class="custom_select">
                    <select name="gender"> 
                        <option value="NS">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <br><br> <br><br> 
</Select></div>    
    
                </div><div class="input_field">
                    <label>Email Id:</label>
                    <input type="text" class="input" name="emailid">   <br><br>   
                </div><div class="input_field">
                    <label>Phone No:</label>
                    <input type="text" class="input" name="phno">    <br><br>  
                </div><div class="input_field">
                    <label>Address:</label>
                    <input type="text" class="input" name="addr">  <br><br>    
                </div>
                <div class="input_field">
                   
                    <input type="submit" value="Register" class="btn" name="register">    
                </div>
</Form>
    </div>
</div>
</body>
</html>


