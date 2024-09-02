<?php include("connect.php"); ?>
    
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width,initial-scale=1">
        <title>Php test Operation </title>
        <link rel="stylesheet" href="css/style.css">
        

    </head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                Registration Form
            </div>
            
                    <div class="form">
                           
                            <div class="input_field">
                               <label for="firstName">First Name</label>
                                <input type="text" class="input" name="fname">
                            </div>
                              
                               <div class="input_field">
                                  <label for="lastName">Last Name</label>
                                   <input type="text" class="input"  name="lname">
                                </div>
                        
                            <div class="input_field">
                              <label>Gender</label>
                              
                                 <select class="custom_select" name="gender">
                                    
                                  <option value="Not selected" name="gender">Select</option>
                                  <option value="male" name="gender">male</option>
                                  <option value="female">female</option>
                                </select>
                            
                            </div>
                    
                            <div class="input_field">
                               <label>Email</label>
                                 <input type="text" class="input" name="email">
                            </div>

                            <div class="input_field">
                                <label>Password </label>
                                <input type="password" class="input" name="password">
                            </div>

                            <div class="input_field">
                                <label>Phone</label>
                                <input type="text" class="input" name="phone">
                            </div>
                          
                            <div class="input_field">
                                <input type="submit" value="Register" class="btn" name="register">
                            </div>
                    </div>
         </form>       
                    
    </div>      

                   
</body>
</html>

<?php 
   if($_POST['register'])

 {
    $fname    =$_POST['fname'];
    $lname    =$_POST['lname'];
    $gender   =$_POST['gender'];
    $email    =$_POST['email'];
    $password   =$_POST['password'];
    $phone    =$_POST['phone'];

   $query= "INSERT INTO REGISTRATION VALUES('$fname', '$lname','$gender','$email','$password','$phone')";

   $data = mysqli_query($conn,$query);

   if($data)
   {
    echo "Data Inserted into Database";
   }
   else
   {
    echo "Failed";
   }
    
 }
?>