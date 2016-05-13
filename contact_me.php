<html lang="en-US">
  <head>
    <title>Contact Me</title>
    <script type="text/javascript" src="libraries/jquery-1.12.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="base.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="navbar.css"> 
    <link rel="stylesheet" type="text/css" href="footer.css">
    <script type="text/javascript" src="navbar.js"></script>
    <style type="text/css">
      .box {
        margin-top: 10px;
        margin-left: 10px;
        width: 80%;
        background: #eee;      
      }
      form {           
        width: 95%;
        padding: 2%;
        display: inline-block;  
        margin: 0;
      }
      .box textarea { 
        width: 100%;
      }
      .box input {
        font-family: "Segoe UI",Arial,sans-serif;      
        font-size: 14px;
      }
      
      .button-style {
        padding: 2px 10px;
        background: #6CC1D0;
        border: 1px solid #699BAF;
        color: white;
      }
      .button-style:hover {
        border-color: #86DCFF;
      }
    </style>
  </head>
  <body>  
    <div id="page">
      <div class="header">
        <div class="header-box">
          <h1>Andrey Brushchenko</h1>
          <a class="icon linkedin" href="https://www.linkedin.com/in/andreybrushchenko" target="_blank"></a>
          <a class="icon pixel-joint" href="http://pixeljoint.com/p/16516.htm" target="_blank"></a>
          <p>Web Developer &bull; Game Developer &bull; Pixel Artist</p> 
        </div>
      </div>
      <div class="navbar">    
        <div class="nav-container"> 
          <ul>
            <li><a class="navlink-style1" href="about_me.html">About Me</a></li>
            <li><a class="navlink-style1" id="resume-btn" href="resume.html">Resume</a></li>
            <li>
              <a class="navlink-style1" id="projects-btn" href="projects.html">Projects</a>
              <div id="projects-drop-down" class="drop-down">
                <a href="projects_whole.php?project=splendor">Splendor</a>
                <a href="projects_whole.php?project=catan">Catan</a>
                <a href="projects_whole.php?project=minigames">Mini-game Project</a>
              </div>
            </li>
            <li><a class="navlink-style2" href="contact_me.php">Contact Me</a></li>
          </ul>  
        </div>
      </div>   
      <div class="box">
        <form>
          Name:<br>
          <input type="text" name="subject" size="30"><br>
          Email:<br>
          <input type="text" name="email" size="30"><br>
          Subject:<br>
          <input type="text" name="subject" size="30"><br><br>
          <textarea id="textarea" name="message" rows="15" cols="80" placeholder="What would you like to say?"></textarea><br><br>
          <input class="button-style" type="submit" name="submit">
        </form>
      </div>
    </div>
    <div id="footer">Copyright &copy 2016 Andrey Brushchenko. All Rights Reserved.</div>
  </body>
</html>