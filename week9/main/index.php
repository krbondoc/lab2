<!DOCTYPE html>
<html>
<head>
<title>K's CodeLand</title>
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
</head>
<body>
  <section class="hero">
    <header>
      <div class="logo">
        <h2 style="font-family: 'Sevillana', cursive;"><a href="index.php">K ' s  C o d e L a n d</a></h2>
      </div>
      <nav>
        <ul>
          <li><a href="cssapp.php">HTML/CSS Journey</a></li>
          <li><a href="about-kyian.php">About Kyian</a></li>
          <li><a href="aspects.php">Interesting Aspects in Life</a></li>
          <li><a href="form/feedback.php">Feedback Form</a></li>
        </ul>
      </nav>
    </header>
  </section>
  <section>
    <div class="left">
      <div class="column">
        <img src="https://pbs.twimg.com/media/FkcTG3cVsAEib-z?format=jpg&name=medium" width="205" height="245">
        <img src="https://pbs.twimg.com/media/FlhWpkfaYAAORz9?format=jpg&name=medium" width="205" height="245">
      </div>
      <div class="column">
        <img src="https://pbs.twimg.com/media/FlhWp2hacAEP1nH?format=jpg&name=medium" width="205" height="245">
        <img src="https://pbs.twimg.com/media/FlhWpStagAYWt9_?format=jpg&name=medium" width="205" height="245">
      </div>
    </div>
    <div class="right">
      <h1>KYIAN</h1>
      <p>Kylene Naiomi Bondoc or Kyian, is drawn to SFSSMI212 Codeland by her fascination of all things related to technology and coding. As she explores this strange and challenging world, she discovers that there are endless opportunities for learning and growth. Together with her fellow citizens at Codeland SFSSMI212, they use their coding and programming skills to push the boundaries of what is possible and make it a better place for everyone.</p>
      <!-- <span class="javafunc" style="padding-top: 40px; color:aliceblue; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 36px">Good Afternoon</span> -->
    </div>
  </section>
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
  <script src="javafunc.js"></script>
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
      margin-left: 50px;
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
    .left {
      width: 40%;
      margin-top: 100px;
      float: left;
    }
    .right {
      width: 60%;
      margin-top: 100px;
      float: left;
    }
    .left .column {
      flex: 50%;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      margin-right: 30px;
      justify-content: right;
      position: relative;
      padding: 0 1px;
    }
    .left .column img {
      border-radius: 20px;
      padding: 13px;
      vertical-align: middle;
    }
    .right h1{
      font-size: 150px;
      letter-spacing: 10px;
      -webkit-text-stroke-width: 2px;
      -webkit-text-stroke-color: rgb(255, 255, 255);
      font-family:'Cinzel Decorative', cursive;
      line-height: 1;
      background: -webkit-linear-gradient(rgb(115, 1, 157),rgb(255, 0, 191));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .right p{
      padding: 10px 10px 10px 10px;
      margin-right:280px;
      margin-left: 30px;
      margin-top: 40px;
      outline-color: rgb(116, 10, 215);
      outline-style: double;
      outline-width: 5px;
      outline-offset: 10px;
      background-color: rgba(0, 0, 0, 0.648);
      font-size: 20px;
      font-weight: bold;
      font-family: 'Forum', cursive;
      text-align: justify;
      line-height: 1.65;
      color: white;
    }
    .site-footer {
      background-color:#26272b;
      font-size:16px;
      color:#737373;
      line-height:24px;
      margin-top: 700px;
      padding: 20px 0 10px;
      text-align: center;
      position: relative;
  }
  .site-footer h6 {
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
  }
  .site-footer .social-icons a {
  width:40px;
  height:40px;
  line-height:40px;
  border-radius:100%;
  background-color:#33353d
  }
  .copyright-text {
    margin-left: 0;
    padding-bottom: 10px;
  }
  @media (max-width:991px) {
  .site-footer [class^=col-] {
    margin-bottom:30px
  }
  }
  @media (max-width:767px) {
    .site-footer {
      padding-bottom:0
    }
    .site-footer .copyright-text,.site-footer .social-icons {
      margin: auto;
    }
  }
    .social-icons {
      padding-left: 0px;
      margin-bottom:0;
      list-style:none
    }
    .social-icons li
    {
      display:inline-block;
      margin-bottom:4px
    }
    .social-icons li.title
    {
      margin-right:15px;
      text-transform:uppercase;
      color:#96a2b2;
      font-weight:700;
      font-size:13px
    }
    .social-icons a{
      background-color:#eceeef;
      color:#818a91;
      font-size:16px;
      display:inline-block;
      line-height:44px;
      width:44px;
      height:44px;
      text-align:center;
      margin-right:8px;
      border-radius:100%;
      -webkit-transition:all .2s linear;
      -o-transition:all .2s linear;
      transition:all .2s linear
    }
    .social-icons a:active,.social-icons a:focus,.social-icons a:hover
    {
      color:#fff;
      background-color:#29aafe
    }
    .social-icons.size-sm a
    {
      line-height:34px;
      height:34px;
      width:34px;
      font-size:14px
    }
    .social-icons a.facebook:hover
    {
      background-color:#3b5998
    }
    .social-icons a.linkedin:hover
    {
      background-color:#007bb6
    }
    @media (max-width:767px)
    {
      .social-icons li.title
      {
        display:block;
        margin-right:0;
        font-weight:600
      }
    }
  </style>
</body>
</html>