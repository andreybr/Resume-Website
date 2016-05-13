 $(document).ready(function(){
  $(".drop-down").hide();
  var bool1 = false;
  var bool2 = false;
  
  $("#projects-btn").mouseenter(function() {
    bool1 = true;
    $("#projects-btn").css("background-color","rgb(74,86,106)");
    $(".drop-down").show()
  }); 
  $("#projects-btn").mouseleave(function() {
    bool1 = false;
    
    $("#projects-btn").css("background-color","rgb(51,59,72)");
    ToggleDropDown(bool1, bool2)
  }); 
  
  $("#projects-drop-down").mouseenter(function() {
    bool2 = true;
    $("#projects-btn").css("background-color","rgb(74,86,106)");
    
    $(".drop-down").show()
  }); 
  $("#projects-drop-down").mouseleave(function() {
    bool2 = false;
    $("#projects-btn").css("background-color","rgb(51,59,72)");
    ToggleDropDown(bool1, bool2)
  }); 
  
  function ToggleDropDown (bool1, bool2) {
    if(bool1 == false && bool2 == false) {
      $("#projects-drop-down").hide();  
    }
  }
});



