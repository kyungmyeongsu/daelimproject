function openfloor(evt, floorName) {
    var i, tabcontent, tablinks;
    tabcontent = $(".tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = $(".tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    $("#"+floorName).css("display","block");
    evt.currentTarget.className += " active";
}

function openArfloor(evt, ArfloorName) {
    var i, Artabcontent, Artablinks;
    Artabcontent = $(".Artabcontent");
    for (i = 0; i < Artabcontent.length; i++) {
        Artabcontent[i].style.display = "none";
    }
    Artablinks = $(".Artablinks");
    for (i = 0; i < Artablinks.length; i++) {
        Artablinks[i].className = Artablinks[i].className.replace(" Aractive", "");
    }
    $("#"+ArfloorName).css("display","block");
    evt.currentTarget.className += " Aractive";
}

function openplafrom(evt, platformName) {
    var i, platabcontent, platablinks;
    platabcontent = $(".platabcontent");
    for (i = 0; i < platabcontent.length; i++) {
        platabcontent[i].style.display = "none";
    }
    platablinks = $(".platablinks");
    for (i = 0; i < platablinks.length; i++) {
        platablinks[i].className = platablinks[i].className.replace(" plactive", "");
    }
    $("#"+platformName).css("display","block");
    evt.currentTarget.className += " plactive";
}

var rnum="";
function numpad(num){
    
    if(num == "b"){
        rnum = rnum.substr(0, rnum.length-1 );
    }else{
        rnum += num + "";    
    }
    
 $(".index04_number_input01").val(rnum);   
}




$(document).ready(function(){
    $(".index04_number_input01").click(function(){
        $(".index04_numpad").css("display", "block");
    });
});

$(document).ready(function(){
    $(".hidebtn").click(function(){
        $(".index04_numpad").css("display", "none");
    });
});






function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

