<!DOCTYPE HTML>  
<html>
<head>
<title>Comment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="wonderland.ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@900&family=Sevillana&display=swap" rel="stylesheet">
<style>
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
          <li><a href="../about-kyian.php">About Kyian</a></li>
          <li><a href="../aspects.php">Interesting Aspects in Life</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="form.php">Form</a></li>
        </ul>
      </nav>
    </header>
  </section>
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

<h2>PHP Form Validation Example</h2>
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
  <input type="submit" name="submit" value="Submit">  
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
?
  <footer class ="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6 style="font-size:24px"><a href="resources.html">Resources</a></h6>
        </div>
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
       <a href="https://github.com/krbondoc">Kylene Bondoc</a>.
          </p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com/naiomicutie"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com/in/kylene-bondoc"><i class="fa fa-linkedin"></i></a></li>   
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
