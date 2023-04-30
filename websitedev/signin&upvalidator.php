<!Doctype html>
  <html lang = "en">
  <meta charset = "UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name= "viewport" content="width=device-width ,initial-scale=1.0"> 
  <head>
  </head>

  <link rel="stylesheet" href="validator.css">

  <body>
    
  <div class= "maincontainer">
    <h2>PHP FORM VALIDATION</h2>
    <p><span class="error">*field required</span></p>
  
      
    <?php

    //sets variables to empty *
    $firstName = $lastName = $email = $password = $confirmPass = "";
    $firstNameErr = $lastNameErr = $emailErr = $passwordErr = $confirmPassErr = "";

    function test_input($data){
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  

    if($_SERVER["REQUEST_METHOD"] == "POST"){

      if(empty($_POST["firstName"])){
          $firstNameErr = "Input your first Name!";
      }
      else{
          $firstName = test_input($_POST["firstName"]);
            if(!preg_match("/[^a-zA-Z'-]*$/",$firstName)){
                $firstNameErr = "Only letters and white spaces allowed";
              }
      }


      if(empty($_POST["lastName"])){
          $lastNameErr = "Input your Last Name!";
      }
      else{
        $lastName = test_input($_POST["lastName"]);
          if(!preg_match("/[^a-zA-z'-]*$/",$lastName)){
              $lastNameErr = "Only Letters and white spaces allowed";
          }
      }


      if(empty($_POST["email"])){
         $emailErr = "enter email address!";
      }
      else{
         test_input($_POST["email"]);
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $emailErr = "input a valid email address!";
         }
      }


      if(empty($_POST["password"])){
        $passwordErr = "Input password";
      }
      else{
        test_input($_POST["password"]);
      }


      if(empty($_POST["confirmPass"])){
        $confirmPassErr = "Input password";
      }
      else{
        test_input($_POST["confirmPass"]);
      }


      
    }



  ?>

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >

    <p><span class="error"> <?php echo $firstNameErr?></span></p>
    <input type="text" name="firstName" placeholder="First Name" ><br><br>
    
    
    <p><span class="error"> <?php echo $lastNameErr?></span></p>
    <input type="text" name="lastName" placeholder="Last Name" ><br><br>
    

    <p><span class="error"> <?php echo $emailErr?></span></p>
    <input type="text" name="email" placeholder="name@domain.com" ><br><br>
    
    
    <p><span class="error"> <?php echo $passwordErr?></span></p>
    <input type="password" name="password" placeholder="Password" ><br><br>
    

    <p><span class="error"> <?php echo $confirmPassErr?></span></p>
    <input type="password" name="confirmPass" placeholder="Confirm Password" ><br><br>
    

    <input type="submit" name="submit">



  </form>




    <?php

      echo "<h1> resultset: </h1>";
      echo $firstName;
      echo "<br>";
      echo $lastName;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $password;
      echo "<br>";
      echo $confirmPass;
      echo "<br>";

      ?>

</div>

  </body>
</html>