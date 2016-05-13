<html lang="en-US">
  <head>
    <title>Projects</title>
    <script type="text/javascript" src="libraries/jquery-1.12.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="base.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="navbar.css"> 
    <link rel="stylesheet" type="text/css" href="footer.css">
    <script type="text/javascript" src="navbar.js"></script>
    <style type="text/css">
      .box {
        width: 980px;
        min-height: 500px;
        margin: 10px auto 5px auto;  
      }
      .box-top {
        background: rgb(39, 45, 56);    
      }
      .box-top img { 
        width: 700px;
        height: 499px;
        margin: 10px 10px 10px 10px;
        box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.7);
      }
      .box-left {
        float: right;     
        color: white; 
        width: 260px;
        height: 510px;
        padding: 0px 0px;
        font-size: 14px;
      }
      .box-title {
        background: rgb(22, 24, 29); 
        padding: 8px 0px 0px 0px;
        font-size: 20px;
        font-style: bold;
        font-family: Arial,Helvetica,Verdana,sans-serif;
      }
      .box-info {
        color: #CA8446;
        margin: 0px 0px 8px 0px;
      }
      .box-description {
        margin: 0px 0px 5px 0px;
      }
      .box-general-info {
        height: 410px;
        padding: 5px 10px;
        background: rgb(22, 24, 29); 
      }
      .box-image-caption {
        height: 79px;
        padding: 10px 10px 10px 10px;
        background: #0E0F13;
      }  
      .box-bottom {
        background: #0E0F13;
        border-width: 5px 0px 0px 0px;
        border-style: solid;
        border-color: rgb(68, 75, 93);
        padding: 6px;        
      }
      .image-container {
        display: inline-block;
        cursor: pointer;
        width: 155px;
        height: 110px;  
        margin: 3px;  
      }
      .selectable-image {
        position: absolute;
        width: inherit;
        height: inherit;  
      }
      .hovering-image {
        position: absolute;
        opacity: 0.6;
        display: none; 
      }
    </style>
    <script>
      // gets variable from url
      function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
          var pair = vars[i].split("=");
          if (pair[0] == variable) { return pair[1]; }
        }
        return(false);
      }
  
      // project specific information and images
      var catanProjectInfoJSON = '{"info":[' +
      '{"title": "The Settlers of Catan (WIP)",' +
      '"meta": "C# (XNA 4.0)",' +
      '"description": "This is a video game based on the board game with the same name. In this game, players compete to gather resources and settle on an unclaimed island. Bartering between players is one of the most unique mechanics of this game." }]}';
      var catanImagesJSON = '{"employees":[' +
      '{"image": "images/screenshots/catan1.png", "caption": "The randomized game board" },' +
      '{"image": "images/screenshots/catan2.png", "caption": "Keep track of who is getting resources every turn" },' +
      '{"image": "images/screenshots/catan3.png", "caption": "Graphs to see what resources are available for trade" },' +
      '{"image": "images/screenshots/catan4.png", "caption": "Offer and accept trades from other players"}]}';         
      var splendorProjectInfoJSON = '{"info":[' +
      '{"title": "Splendor (WIP)",' +
      '"meta": "C# (XNA 4.0)",' +
      '"description": "This was a project I worked on to see if I could build an AI that was capable of beating real players at the board game Splendor. In this game you play as a merchant and buy out businesses that give you resources and points. The players all compete over the same businesses and try to reach 15 prestige points first." }]}';
      var splendorImagesJSON = '{"employees":[' +
      '{"image": "images/screenshots/splendor1.png", "caption": "Picking up coins" },' +
      '{"image": "images/screenshots/splendor2.png", "caption": "Looking to buy a card" },' +
      '{"image": "images/screenshots/splendor3.png", "caption": "Reserving a card from the top of the deck" }]}';       
      var minigamesProjectInfoJSON = '{"info":[' +
      '{"title": "Splendor",' +
      '"meta": "C# (XNA 4.0)",' +
      '"description": "This was a project I worked on to see if I could build an AI that was capable of beating real players at the board game Splendor. In this game you play as a merchant and buy out businesses that give you resources and points. The players all compete over the same businesses and try to reach 15 prestige points first." }]}';
      var minigamesImagesJSON = '{"employees":[' +
      '{"image": "images/screenshots/splendor1.png", "caption": "splendor1" },' +
      '{"image": "images/screenshots/splendor2.png", "caption": "splendor2" }]}'; 
      
      if(getQueryVariable("project") == "splendor") {
        descriptionInfo = JSON.parse(splendorProjectInfoJSON);
        imagesInfo = JSON.parse(splendorImagesJSON);      
      }
      else if (getQueryVariable("project") == "catan") {
        descriptionInfo = JSON.parse(catanProjectInfoJSON);
        imagesInfo = JSON.parse(catanImagesJSON);
      }
      imagesCount = imagesInfo.employees.length;
    
      $(document).ready(function(){   
        //initialize project information
        $(".box-title").html(descriptionInfo.info[0].title);
        $(".box-info").html(descriptionInfo.info[0].meta);
        $(".box-description").html(descriptionInfo.info[0].description);  
        // create small preview images
        var y;
        for(y = 0; y < imagesCount; y++) {
          $(".box-bottom").append("<div class='image-container'>" + 
                                    "<img class='selectable-image' onclick='ChangeImage(" + y + ")' src='" + imagesInfo.employees[y].image + "' alt='small image'>" +
                                    "<img class='hovering-image' src='images/magnify-icon.png'>" +
                                  "</div>");
        }      
        var images = document.getElementsByClassName("selectable-image");  
        images[0].style.border = "1px solid white"; 
        // initialize main image and caption for that image
        $("#main-image").attr("src", imagesInfo.employees[0].image);     
        $(".box-image-caption").html(imagesInfo.employees[0].caption);       
        // show magnifying glass over image when hovering
        $(".image-container").mouseenter(function() { 
          $(this).children(".hovering-image").show(); 
        }).mouseleave(function() { 
          $(this).children(".hovering-image").hide();
        });
      });
     
      // used to update main image when clicking on smaller ones
      function ChangeImage(index) {   
        var images = document.getElementsByClassName("selectable-image");
        var numImages = images.length;
        $("#main-image").attr("src", event.target.src); 
        $(".box-image-caption").html(imagesInfo.employees[index].caption);     
        var y;
        for(y = 0; y < numImages; y++) {
          images[y].style.border = "0px solid white"; 
        }      
        event.target.style.border = "1px solid white"; 
      } 
    </script>
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
              <a class="navlink-style2" id="projects-btn" href="projects.html">Projects</a>
              <div id="projects-drop-down" class="drop-down">
                <a href="projects_whole.php?project=splendor">Splendor</a>
                <a href="projects_whole.php?project=catan">Catan</a>
                <a href="projects_whole.php?project=minigames">Mini-game Project</a>
              </div>
            </li>
            <li><a class="navlink-style1" href="contact_me.php">Contact Me</a></li>
          </ul>  
        </div>
      </div>  
      <div class="box">
        <div class="box-top">
          <div class="box-left">
            <div class="box-general-info">
              <div class="box-title">N/A</div>
              <p class="box-info">N/A</p>
              <p class="box-description">N/A</p>        
            </div>
            <div class="box-image-caption">
              N/A
            </div>
          </div>
          <img id="main-image" src="" alt="large image">
        </div>
        <div class="box-bottom">
        </div>
      </div>
    </div>
    <div id="footer">Copyright &copy 2016 Andrey Brushchenko. All Rights Reserved.</div>
  </body>
</html>