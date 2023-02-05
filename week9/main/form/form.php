<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Feedback Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" type="image/x-icon" href="wonderland.ico">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@900&family=Sevillana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <section class="hero">
        <header>
          <div class="logo">
            <h2 style="font-family: 'Sevillana', cursive;"><a href="index.php">K ' s  C o d e L a n d</a></h2>
          </div>
          <nav>
            <ul>
              <li><a href="../cssapp.php">HTML/CSS Journey</a></li>
              <li><a href="../about-kyian.phpl">About Kyian</a></li>
              <li><a href="../aspects.php">Interesting Aspects in Life</a></li>
              <li><a href="feeback.php">Feedback</a></li>
              <li><a href="form.php">Form</a></li>
            </ul>
          </nav>
        </header>
      </section>
      <section class = "content">
      <div id="panel" class="panel-container">
      <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }
      
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
        
      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Invalid URL";
        }    
      }

      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

  <h2 style="font-family: 'Forum', cursive;"><b>Leave A Comment</b></h2>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit" style="background-color: #201f1e; border: 0; border-radius: 4px; color: rgb(193, 109, 238); cursor: pointer; padding: 12px 30px;">  
  </form>

  <?php
  echo "<h2>Your Input:</h2>";
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $website;
  echo "<br>";
  echo $comment;
  echo "<br>";
  echo $gender;
  ?>
  </section>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Muli&display=swap");
    @import url("https://fonts.googleapis.com/css?family=Monserrat&display=swap");
  * {
    box-sizing: border-box;
  }
  .panel-container {
    background-color: rgb(244, 178, 228);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border-radius: 4px;
    font-size: 24px;
    font-family: 'Forum', cursive;
    color:rgb(85, 4, 103);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 100px 300px 100px 300px;
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .panel-container strong {
    line-height: 20px;
  }

  .panel-container p {
    margin: 25px 0;
    line-height: 20px;
  }

  .ratings-container {
    display: flex;
    margin: 20px 0;
  }

  .rating {
    cursor: pointer;
    flex: 1;
    padding: 20px;
    margin: 10px 5px;
  }

  .rating.active,
  .rating:hover {
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .rating img {
    width: 40px;
  }

  .rating small {
    color: #555;
    display: inline-block;
    margin: 10px 0 0;
  }

  .rating.active small,
  .rating:hover small {
    color: #111;
  }

  .btn {
    background-color: #201f1e;
    border: 0;
    border-radius: 4px;
    color: rgb(193, 109, 238);
    cursor: pointer;
    padding: 12px 30px;
  }

  .fa-heart {
    color: rgb(126, 18, 204);
    font-size: 30px;
    margin-bottom: 10px;
  }
  @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@900&family=Sevillana&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Forum&display=swap');
      /* body style */
      body {
        background-image: url('https://giffiles.alphacoders.com/215/215595.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        overflow-x: hidden;
      }
      .hero{
        height: 100%;
        width: 100%;
        min-height: 100 vh;
        background: linear-gradient(black, 80%, rgb(87, 6, 79));
        position: sticky;
        top: 0;
        z-index: 100;
      }
      .hero header .logo h2 a{
        display: block;
        font-size: 48px;
        margin-left: 20px;
        font-weight: 700;
        text-decoration: none;
        color: white;
      }
      .hero header{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 0 10px;
      }
      nav ul li{
        list-style: none;
        display: inline-block;
      }
      nav ul li a{
        text-decoration: none;
        color: white;
        margin-left: 30px;
        margin-right: 20px;
        font-size: 24px;
        font-family: 'Forum', cursive;
        font-weight: 600;
        border-bottom: 2px solid transparent;
        transition: .4s;
      }
      nav ul li:not(:last-child) a:hover,
      nav ul li:not(:last-child) a:focus{
        border-bottom: 2px solid white;
      }
    </style>
  </body>
</html>