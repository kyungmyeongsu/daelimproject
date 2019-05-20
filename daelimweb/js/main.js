function openProgram(evt, programName) {
    var i, tabcontent, tablinks;
    tabcontent = $(".tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = $(".tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    $("#"+programName).css("display","block");
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it

function openSub(evt, process) {
    var i, tabcont, tablinks;
    tabcont = $(".tabcont");
    for (i = 0; i < tabcont.length; i++) {
        tabcont[i].style.display = "none";
    }
    tablinks = $(".tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    $("#"+process).css("display","block");
    evt.currentTarget.className += " active";
}


function edit(){
    var title = $("input[name='title']").val();
     var board = $("input[name='board']").val();
    var contents = $("textarea[name='contents']").val();
    data = {
        "work" : "edit",
        "board" : board,
        "title" : title,
        "contents" : contents
    }
    $.ajax({
      type: "POST",
      url: "./outlet.php",
      data: data
    }).done(function() {
        location.href="./list.php?board="+board;
  });
    
}


// function del(){ 
//     var board = $("input[name='board']").val();
//           $(".delbtn").click(function(){
//               $.ajax({url:"./outlet.php",
//                       data:{"work":"del",
//                             "board":board
//                         },
//                       type:"post"
//                   }).done(function(){
//                          location.href="./sub3.php";
//                       });
          
//           });
     

// }



function doSearch(){
    var searchcategory = $('select[name="searchcategory"]').val();
    var searchkeyword = $("input[name='searchkeyword']").val();
    location.href="./sub3.php?sc=" + searchcategory 
                    + "&sk=" + searchkeyword;
}

function changeCategory(){
    location.href="?category=" + $("select[name=programlist]").val();
}


var sundaystart = 12;
var sundaycount = 4;
var talkstart = 12;
var talkcount = 4;
var edustart = 12;
var educount = 4;
var eventstart = 8;
var eventcount = 2;

$(document).ready(function(){
    $(".more_link").click(function(sender){
        console.log(sender.target.attributes.tab.value);
        var table = sender.target.attributes.tab.value;
        
        var start, count;
        
        switch (table) {
            case 'sundaylive':
                start = sundaystart;
                count = sundaycount;
                break;
                
            case 'talk':
                start = talkstart;
                count = talkcount;
                break;
            
            case 'education':
                start = edustart;
                count = educount;
                break;
                
            case 'subedu':
                start = edustart;
                count = educount;
                break;
                
            case 'event':
                start = eventstart;
                count = eventcount;
                break;
            
            default:
                // code
        }
        
        $.ajax({
                url:"outlet.php",
               type:"POST",
               data:{
                   work: "mainListMore",
                   listname: table,
                   start: start,
                   count: count
               }}).done(function(returns){
                   switch (table) {
                       case 'sundaylive':
                           $("#Sundaylive .row").append(returns);
                            sundaystart+=4;
                           break;
                           
                        case 'talk':
                           $("#Talk .row").append(returns);
                            talkstart+=4;
                           break;
                        
                        case 'education':
                           $("#eduprogram .row").append(returns);
                            edustart+=4;
                           break;
                           
                        case 'subedu':
                           $(".pg_row").append(returns);
                            edustart+=4;
                           break;
                           
                        case 'event':
                           $(".event_row").append(returns);
                            eventstart+=2;
                           break;
                       
                       default:
                           // code
                   }
                   
               });
    })  ;  
    
    $("#changeCategory").click(changeCategory);
});
