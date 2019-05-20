<?php
require_once("./outlet.php");
    $sundaylistset = getSundayList(0,12);
    $educationlistset = geteducationList(0,12);
    $talklistset = gettalkList(0,12);
    $locallistset = getlocalList(0,12);
    $maineventlistset = getmaineventList();
    
    

?>

<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>대림미술관</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <!--<link href="js/jquery.bxslider.css" rel="stylesheet" />-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link rel="shortcut icon" href="./images/favicon.ico" />
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/main.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
  <script src="js/jquery.bxslider.js"></script>
  <script type="text/javascript">
    //<![CDATA[
    $(document).ready(function(){
    	//$('.bxslider').bxSlider();
    	
         $('.bxslider').bxSlider({
            auto: false,
            // speed: 500,
            // pause: 1000,
            mode:'horizontal',
            // autoControls: true,
            pager: true,
        });
    });
    //]]>
  </script>
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
 </head>
 <body>
   
<?php
  include_once("head.php");
?>
   
   
 	<!-- 메인 배너 -->
  <section class="banner_box">
 	<div class="banner01 banners">
 		<div class="container head_h">
   		<div class="banner_text">
   		  <p>전 세계 크리에이터들의</p>
   			<p>라이프스타일을 기록하는 아티스트</p>
   			<p>토드 셀비</p>
   			<p>Todd selby</p>
   		</div>
 	  </div> 
 	</div>
 	<div class="banner02 banners">
 		<div class="container head_h">
   		<div class="banner_text">
   			<p>THE</p>
   			<p>SALBY</p>
   			<p>HOUSE</p>
   			<p># 즐거운_나의_집</p>
   			<p>2017년 04월 27일 <span>부터</span> 10월 29일 <span>까지</span></p>
   		</div>
 	  </div> 
 	</div>
 	<div id="slidebuttons">
 	<ul class="banner_btn">
 			<li class="banner_btn01"><a href="javascript:btn01();"></a></li>
 			<li class="banner_btn02"><a href="javascript:btn03();"></a></li>
 			<li class="banner_btn03"><a href="javascript:btn02();"></a></li>
 		</ul>  
 	  <div class="banner_quick">
 			<a href="#" class="banner_quick01"><span>미술관 전시소개</span><span>더 보기 &gt;</span></a>
 			<a href="./sub1.php" class="banner_quick02"><span>교육 프로그램</span><span>더 보기 &gt;</span></a>
 		</div>
 	</div>
 	<script type="text/javascript">
 	var currentslide = 1;
 	var slidepause = 0;
 	  $(document).ready(function(){
 	      setInterval(function(){ 
 	      currentslide = currentslide == 2 ? 1 : 2;
     	     console.log(currentslide);
     	     if (slidepause == 0) {
     	      if (currentslide == 2) {
     	        $('.banner02').css("left", "0%");
     	        $('.banner01').css("left", "100%");
     	      }else{
     	        $('.banner01').css("left", "0%");
     	        $('.banner02').css("left", "-100%");
     	      }
     	     }else{
     	       $('.banner_btn01').css("background", 
     	       "url('./images/banner_p04.png') no-repeat 50% 50%");
     	     }
 	      }, 5000);
 	    
 	  });
 	  function  btn01(){
 	    slidepause = slidepause == 1 ? 0 : 1;
 	    if (slidepause == 1) {
 	      $('.banner_btn01').css("background", 
     	       "url('./images/banner_p04.png') no-repeat 50% 50%");  
 	    }else{
 	      $('.banner_btn01').css("background", 
     	       "url('./images/banner_p01.png') no-repeat 50% 50%");
 	    } 
 	  }
 	    function  btn02(){
 	    $('.banner01').css("left", "0%");
     	        $('.banner02').css("left", "-100%");
     	        slidepause =1;
 	  }
 	    function  btn03(){
 	    $('.banner02').css("left", "0%");
     	        $('.banner01').css("left", "100%");
     	        slidepause =1;
 	  }
 	  
 	  
 	  
 	  
 	</script>
 		
  </section>

 	<!-- 미술관 시간 안내 -->
 	<section class="content">
 		<div class="content_time col-6 c_blue">
 			<div class="time_tbox01">
 				<p class="time_text01">대림미술관</p>
 				<div class="time_bar"></div>
 				<p class="time_text02">화요일 - 일요일</p>
 				<p class="time_text03">10 : 00 AM - 6 : 00 PM</p>
 				<p class="time_text04">전시종료 30분점 매표 마감</p>
 				<p class="time_text04">매주 월요일 휴관, 설/추석 연휴 휴관</p>
 			</div>
 		</div>
 		<div class="content_time col-6 c_darkgray">
 			<div class="time_tbox02">
 				<p class="time_text01">미술관옆집</p>
 				<div class="time_bar"></div>
 				<p class="time_text02">화요일 - 일요일</p>
 				<p class="time_text03">10 : 00 AM - 6 : 00 PM</p>
 				<p class="time_text04">매주 월요일 휴관, 설/추석 연휴 휴관</p>
 			</div>
 		</div>
 	</section>

 	<!-- 프로그램 타이틀 -->
 	<section>
 		<div class="container head_b">
 			<h2 class="title01">프로그램</h2>
 			<div class="line01"></div>
 			<p class="title02">미술관을 통한 다양한 프로그램</p>

 			<ul class="container head_c">
 				<li><a class="tablinks active" onclick="openProgram(event, 'Sundaylive')" id="defaultOpen">Sunday live &amp; class</a></li>
 				<li><a class="tablinks" onclick="openProgram(event, 'Talk')">Talk &amp; Lecture</a></li>
 				<li><a class="tablinks" onclick="openProgram(event, 'eduprogram')">교육 프로그램</a></li>
 				<li><a class="tablinks" onclick="openProgram(event, 'localprogram')">지역연계 프로그램</a></li>
 			</ul>
 		</div>
 	</section>

 	<!-- 프로그램 content -->
 		<div class="container_fluid body_a">
      <div class="container">

      <!-- sunday & live 시작 -->
 			<div id="Sundaylive" class="tabcontent" style="display:block">
 				<div class="row">
 				  <?php
            while($row=$sundaylistset->fetch_object()){
          ?>
 					<div class="col-3 pg1">
 						<a href="#" class="pg2">
 							<img src="./images/education/con_img<?php echo $row->num; ?>.jpg" width="100%"></img>
 							<div class="pg3">
 								<p><?php echo $row->title;  ?></p>
                <p><?php echo $row->contents;  ?></p>
 								<div class="con_bar"></div>
 								<span href="#">자세히보기&nbsp;&nbsp;&nbsp;</span>
 							</div>
 						</a>
 					</div>
 					<?php
            }
          ?> 
 					
 				</div>
 				<!-- 더보기 버튼 -->
      <div class="more_box" >
        <a class="more more_link" tab="sundaylive">더 보기</a>
        <a  class="more_icon"></a>
      </div>
 				
 			</div>

 				
      <!-- sunday&live 끝 -->

      <!-- talk&lecture 시작 -->
      <div id="Talk" class="tabcontent">
        <div class="row">
 					<?php
            while($row=$talklistset->fetch_object()){
          ?>
 					<div class="col-3 pg1">
 						<a href="#" class="pg2">
 							<img src="./images/talklecture/tl_img<?php echo $row->num; ?>.jpg" width="100%"></img>
 							<div class="pg3">
 								<p><?php echo $row->title;  ?></p>
                <p><?php echo $row->contents;  ?></p>
 								<div class="con_bar"></div>
 								<span>자세히보기&nbsp;&nbsp;&nbsp;</span>
 							</div>
 						</a>
 					</div>
 					<?php
            }
          ?>
 				</div>
 				<!-- 더보기 버튼 -->
        <div class="more_box" >
          <a class="more more_link" tab="talk">더 보기</a>
          <a  class="more_icon"></a>
        </div>
      
      </div>
      <!-- talk&lecture 끝 -->

      <!-- education 시작 -->
      <div id="eduprogram" class="tabcontent">
        <div class="row">
          <?php
            while($row=$educationlistset->fetch_object()){
          ?>
 					<div class="col-3 pg1">
 						<a href="./sub1-1.php" class="pg2">
 							<img src="./images/program/pg_img<?php echo $row->num; ?>.jpg" width="100%"></img>
 							<div class="pg3">
 								<p><?php echo $row->title;  ?></p>
                <p><?php echo $row->contents;  ?></p>
 								<div class="con_bar"></div>
 								<span>자세히보기&nbsp;&nbsp;&nbsp;</span>
 							</div>
 						</a>
 					</div>
 					<?php
            }
          ?> 
 				</div>
 				<!-- 더보기 버튼 -->
        <div class="more_box" >
          <a class="more more_link" tab="education">더 보기</a>
          <a  class="more_icon"></a>
        </div>
 				
      </div>
      <!-- education 끝 -->

      <!-- localprogram 시작 -->
      <div id="localprogram" class="tabcontent">
        <div class="row">
          <?php
            while($row=$locallistset->fetch_object()){
          ?>
 					<div class="col-3 pg1">
 						<a href="./sub1-1.php" class="pg2">
 							<img src="./images/localprogram/localpro_img<?php echo $row->num; ?>.jpg" width="100%"></img>
 							<div class="pg3">
 								<p><?php echo $row->title;  ?></p>
                <p><?php echo $row->contents;  ?></p>
 								<div class="con_bar"></div>
 								<span>자세히보기&nbsp;&nbsp;&nbsp;</span>
 							</div>
 						</a>
 					</div>
 					<?php
            }
          ?> 
 				</div>
      </div>
      <!-- localprogram 끝 -->

      </div>
 		</div>
 		
 	<script type="text/javascript">
// <![CDATA[
// $(document).ready(function(){
// 	//$('.bxslider').bxSlider();
	
//     $('.eventslider').bxSlider({
//         auto: false,
//         speed: 2000,
//         minSlides : 5,
//         maxSlides : 5,
//         // pause: 1000,
//         mode:'horizontal',
//         // autoControls: true,
//         pager: false,
//     });
//     //https://bxslider.com/options/
// });
// //]]>
</script>

<script>
$(document).ready(function(){
   
    $(".main_event_before").click(function(){
       var $body_b_left =$(".body_b").offset(); 
      if($body_b_left.left<0){
        $(".body_b").animate({left: '+=425px'});
      }
    });
      
        
    $(".main_event_after").click(function(){
       var $body_b_left =$(".body_b").offset();
       if($body_b_left.left>-2975){
        $(".body_b").animate({left: '-=425px'});
       }
    });
});
</script>

 	<!-- 이벤트 -->
 	<section>
    <div class="container head_e">
      <h2 class="title01">이벤트</h2>
      <div class="line01"></div>
      <p class="title02">미술관의 다양한 혜택을 제공</p>
    </div>
    <div class="eventSection">
      <div class="container_fluid body_b">
        <?php
            while($row=$maineventlistset->fetch_object()){
        ?>
          <div class="eg">
            <a href="#"><img src="./images/mainevent/event_img<?php echo $row->num; ?>.jpg"></a>
            <a href="#"><?php echo $row->title;  ?></a>
            <a href="#"><?php echo $row->contents;  ?></a>
            <a href="#"><?php echo $row->date;  ?></a>
          </div>
        <?php
            }
        ?>
        </div>
        <div class="main_event_icon">
          <div class="main_event_icon01">
            <a class="main_event_before"><img src="./images/mainevent/event_img_before.jpg"></img></a>
            <a class="main_event_after"><img src="./images/mainevent/event_img_after.png"></img></a>
          </div>
        </div>
      </div>
  </section>

 	<!-- 팜플랫 -->
 	<section class="container_fluid pamphlet">
 		<div class="container pam">
 			<h3 class="pam_text01">Pamphlet</h3>
 			<p class="pam_text02">대림미술관을 팜플랫으로 만나보세요</p>
 			<div class="pam_box">
 				<a href="./images/daelim_pamphlet.jpg" download="Pamplet" class="pam_text03">팜플랫 다운로드하기</a>
 			</div>
 		</div>
 	</section>

 	<!-- 이달의 행사 -->
 	<section>
 		<div class="container head_e">
 			<h2 class="title01">이달의 행사</h2>
 			<div class="line01"></div>
 			<p class="title02">월별 미술관의 행사를 확인하세요</p>
 		</div>

 		<div class="container head_f">
 			<p class="mg_box">2017년 10월</p>
 		</div>

 		<div class="container_fluid body_c">
 			<div class="container head_g">
 			  <div style="max-width:960px; margin:0 auto;">
          <ul class="bxslider">
              <li>
              <div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img5.jpg"></a>
               		    <a href="#">11월, 한남살롱</a>
               		    <a href="#">TALK & WORKSHOP</a>
               		    <a href="#">2017.11.25 SAT</a>
           		    </div>
           		</div>
           		
           		<div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img6.jpg"></a>
               		    <a href="#">행운을 주는 탄생석 캔들</a>
               		    <a href="#">행운의 캔들 제작하기</a>
               		    <a href="#">2017.11.17 FRI</a>
           		    </div>
           		</div>
           		
           		<div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img7.jpg"></a>
               		    <a href="#">청소년만을 위한 할인 헤택</a>
               		    <a href="#">3가지 할인 혜택</a>
               		    <a href="#">2017.11.16 - 2017.12.15</a>
           		    </div>
           		</div>
           		
           		<div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img8.jpg"></a>
               		    <a href="#">대리석 마블 캔들</a>
               		    <a href="#">With 베르씨 빌라쥬 (Bercy Village)</a>
               		    <a href="#">2017.11.10 FRI</a>
           		    </div>
           		</div>
              </li>
              <li>
                  <div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img9.jpg"></a>
               		    <a href="#">공간을 밝히는 젬 스톤 캔들</a>
               		    <a href="#">Pop한 컬러로 공간을 밝히는 젬 스톤 캔들</a>
               		    <a href="#">2017.11.03 FRI</a>
           		    </div>
           		</div>
           		
           		<div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img10.jpg"></a>
               		    <a href="#">10월, 한남살롱</a>
               		    <a href="#">일상을 변화시키는 4가지 창작 워크숍</a>
               		    <a href="#">2017.10.28 SAT</a>
           		    </div>
           		</div>
           		
           		<div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img11.jpg"></a>
               		    <a href="#">GOODBYE LIVE</a>
               		    <a href="#">헤이즈 문 콘서트</a>
               		    <a href="#">2017.10.27 FRI</a>
           		    </div>
           		</div>
           		
           		<div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img12.jpg"></a>
               		    <a href="#">김이지 콘서트</a>
               		    <a href="#">깊은 감성을 표현하는 매력적인 목소리</a>
               		    <a href="#">2017.10.22 SUN</a>
           		    </div>
           		</div>
              </li>
              <li>
                  <div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img1.jpg"></a>
               		    <a href="#">권나무 콘서트</a>
               		    <a href="#">봄별같이 따스한 노래가 필요할 때</a>
               		    <a href="#">2017.04.30.SUN</a>
           		    </div>
           		</div>
           		
           		<div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img2.jpg"></a>
               		    <a href="#">에듀케이터 한정희</a>
               		    <a href="#">우리아이와 전시를 즐기는 방법</a>
               		    <a href="#">2017.04.24.SAT</a>
           		    </div>
           		</div>
           		
           		<div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img3.jpg"></a>
               		    <a href="#">아크릴 무드등</a>
               		    <a href="#">감성적 인테리어의 완성</a>
               		    <a href="#">2017.04.16.MON</a>
           		    </div>
           		</div>
           		
           		<div class="mg00">
                      <div class="mg01">
                      <a href="#"><img src="./images/mgimg/mg_img4.jpg"></a>
               		    <a href="#">프레시 소시지 워크숍</a>
               		    <a href="#">얼리어먹터 쿠킹 워크숍</a>
               		    <a href="#">2017.04.05.SUN</a>
           		    </div>
           		</div>
              </li>
          </ul>
        </div>
      </div>
 		</div>
 	</section>

 	<!-- 패밀리 미술관 -->
 	<section>
 		<div class="container head_e">
 			<h2 class="title01">패밀리 미술관</h2>
 			<div class="line01"></div>
 			<p class="title02">대림 미술관 외의 다른 미술관을 확인하세요</p>
 		</div>

 		<div class="container_fluid body_d">
 			<div class="fg col-4 fg_img01">
 				<div class="family">
 					<p class="family_text">대림미술관</p>
 					<div class="family_bar"></div>
 					<p>일상이 예술이 되는 미술관<br>전통과 현대를 아우르는<br>새로운 건축 미학</p>
 				</div>
 			</div>
 			<div class="fg col-4 fg_img02">
 				 <div class="family">
 					<p class="family_text">디 뮤지엄</p>
 					<div class="family_bar"></div>
 					<p>한남동의 문화예술 아지트<br>새로운 변화의 문화를 담는 차별화된<br>디 뮤지엄</p>
 				</div>
 			</div>
 			<div class="fg col-4 fg_img03">
 				<div class="family">
 					<p class="family_text">구슬모아 당구장</p>
 					<div class="family_bar"></div>
 					<p>모두에게 열린 소통과 창작의 공간<br>디프로젝트 스페이스<br>문화 예술 공간 당구장</p>
 				</div>
 			</div>
 		</div>
 	</section>

<?php
    include_once("footer.php");
?>