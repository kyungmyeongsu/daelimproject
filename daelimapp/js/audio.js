

var onPlaying = false;
var musicLength = 0;
var musicCurrent= 0;

$(document).ready(function(){
    
    $('.doscent').on("canplay", function () {
          musicLength = $('.doscent')[0].duration;
    });
    
    
    $('.index06_control_img04').click(function(){
       if(onPlaying){
        $(".doscent").trigger('pause'); 
        $('.ppbth').attr("src", "./images/index06_control_img04.png");
        onPlaying = false;
       }else{
        $(".doscent").trigger('play');
        $('.ppbth').attr("src", "./images/index06_control_img06.png");
        onPlaying = true;
       } 
    });
    
    $('.index06_control_img01').click(function(){
        $(".doscent").prop("muted",!$(".doscent").prop("muted"));
    })
    
    $('.index06_control_img02').click(function() {
        //forward the music about 5 seconds
        $(".doscent").prop("currentTime",$(".doscent").prop("currentTime")-5);
    })
    
    $('.index06_control_img03').click(function() {
        //backward the music about 5 seconds
        $(".doscent").prop("currentTime",$(".doscent").prop("currentTime")+5);
    })
    
    

    
    setInterval(function(){
        musicCurrent = $('.doscent')[0].currentTime;
        
        // console.log( musicLength );
        // console.log( musicCurrent );
        
        var min = parseInt(musicLength / 60);
        var sec = parseInt(musicLength % 60);
        $('.index06_time02').text( min + ":" + sec);
        
        
        var min = parseInt(musicCurrent / 60);
        var sec = parseInt(musicCurrent % 60);
        $('.index06_time01').text( min + ":" + sec);
        
        var percent = parseInt(parseInt(musicCurrent) / parseInt(musicLength) * 100);
        $('.index06_pretime').css("width", percent + "%");
        
        
    },300);
});