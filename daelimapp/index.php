<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="./css/jquery.mobile-1.4.5.min.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="./css/jquery.mobile-1.4.5.css" type="text/css" />-->
        <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
        <!--<script type="text/javascript" src="./js/jquery.mobile-1.4.5.js"></script>-->
        <!--<script type="text/javascript" src="./js/jquery.mobile-1.4.5.min.js"></script>-->
        <link rel="stylesheet" href="./css/jquery.mobile-1.4.5.css" />
        <link rel="stylesheet" href="./css/common.css" type="text/css" />
        <link rel="stylesheet" href="./css/index01.css" type="text/css" />
        <link rel="shortcut icon" href="./images/favicon.ico" />
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <title>대림미술관 어플리케이션</title>
    </head>
    <body>
                <div data-role="page" id="aaa">
                    <div data-role="panel" data-display="overlay" data-position="right" id="panel">
                        <a href="#" data-rel="close" id="close_btn"><img src="./images/close_btn.png" width="100%;"/></a>
                        <div id="panel_list">
                            <p class="panel_languge"><a href="#">KR</a></p>
                            <div class="panel_img">
                                <!--<div class="panel_img01"></div>-->
                                <!--<a href="#" class="panel_img01"></a>-->
                                <?php 
                         		    if(isset($_SESSION['name'])){
                         		?>
                         		<a href="#" class="panel_img01" data-ajax="false"></a>
                                <p><?php echo $_SESSION['name'] ?>님 환영합니다</p>
                                <?php
 		                            }else{
 		                        ?>
 		                        <a href="./index12.php" class="panel_img01" data-ajax="false"></a>
 		                        <p>로그인이 필요합니다.</p>
         		                <?php
         		                    }
         		                ?>
                            </div>
                           
                            <div class="panel_quick01">
                                <a href="#">
                                    <img src="./images/panel_quick_img01.png" height="36.6666%"/>
                                    <p>마이페이지</p>
                                </a>
                                <a href="#">
                                    <img src="./images/panel_quick_img02.png" height="36.6666%"/>
                                    <p>메시지</p>
                                </a>
                                <a href="#">
                                    <img src="./images/panel_quick_img03.png" height="36.6666%"/>
                                    <p>쿠폰</p>
                                </a>
                            </div>
                            
                            <div class="panel_member">
                                <div class="panel_member01">
                                    <p>멤버십</p>
                                    <a class="panel_member01_expand" href="#"></a>
                                </div>
                                <a class="panel_member02" href="./index13.php" data-ajax="false"><img src="./images/panel_member_img02.png" height="64.4%"/></a>
                            </div>
                            
                            <ul class="panel_quick_list">
                                <li>
                                    <a class="panel_quick_list01" href="./index02.php" data-ajax="false">
                                        <img src="./images/panel_quick_list_img01.png" height="53.333333%"/>
                                        <p>전시소개</p>
                                        <img src="./images/panel_quick_list_img.png" height="16.666666%"/>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel_quick_list01" href="./index03.php" data-ajax="false">
                                        <img src="./images/panel_quick_list_img02.png" height="66.66666%"/>
                                        <p>전시체험</p>
                                        <img src="./images/panel_quick_list_img.png" height="16.666666%"/>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel_quick_list01" href="#">
                                        <img src="./images/panel_quick_list_img03.png" height="58.3333%"/>
                                        <p>나만의사진</p>
                                        <img src="./images/panel_quick_list_img.png" height="16.666666%"/>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel_quick_list01" href="#">
                                        <img src="./images/panel_quick_list_img04.png" height="58.3333%"/>
                                        <p>라이브러리</p>
                                        <img src="./images/panel_quick_list_img.png" height="16.666666%"/>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel_quick_list01" href="./index10.php" data-ajax="false">
                                        <img src="./images/panel_quick_list_img05.png" height="58.3333%"/>
                                        <p>이벤트</p>
                                        <img src="./images/panel_quick_list_img.png" height="16.666666%"/>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel_quick_list01" href="#">
                                        <img src="./images/panel_quick_list_img06.png" height="50%"/>
                                        <p>미술관소개</p>
                                        <img src="./images/panel_quick_list_img.png" height="16.666666%"/>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel_quick_list01" href="#">
                                        <img src="./images/panel_quick_list_img07.png" height="58.3333%"/>
                                        <p>미술관주변</p>
                                        <img src="./images/panel_quick_list_img.png" height="16.666666%"/>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel_quick_list01" href="./index15.php" data-ajax="false">
                                        <img src="./images/panel_quick_list_img08.png" height="58.3333%"/>
                                        <p>설정</p>
                                        <img src="./images/panel_quick_list_img.png" height="16.666666%"/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div data-role="header" id="mainbar">
                        <div class="mainhead_left"><img src="./images/logo.png" height="54%"></img></div>
                        <div class="mainhead_right">
                            <?php 
                         		    if(isset($_SESSION['name'])){
                         	?>
                            <a href="#panel"><img src="./images/total_bar.png" height="54%"></img></a>
                            <?php
                         		    }else{
                         	?>
                         	<a href="./index12.php" data-ajax="false"><img src="./images/login.png" height="54%"></img></a>
                            <a href="#panel"><img src="./images/total_bar.png" height="54%"></img></a>
                         	<?php
                         		    }
                            ?>
                        </div>
                    </div>
                    <div data-role="content" id="daelimcontent">
                        <div class="main_Visual_text01">
                            <p>THE</p> 
                            <p>SALBY</p>
                            <p>HOUSE</p>
                        </div>
                        
                        <div class="main_Visual_text02">
                            <p>#즐거운_나의_집</p>
                            <p>2017년 04월 27일 <span>부터</span> 10월 29일 <span>까지</span></p>
                        </div>
                        
                        <div id="main_Content">
                            <div class="main_Content01">
                                <a href="./index04.php" data-ajax="false" class="main_Content_btn01">
                                    <img src="./images/main_Content_img01.png" height="59.82142857%"></img>
                                    <!--<div class="main_Content_img01"></div>-->
                                    <p>오디오 가이드</p>
                                </a>
                                <a href="./index07.php" data-ajax="false" class="main_Content_btn02">
                                    <img src="./images/main_Content_img02.png" height="59.82142857%"></img>
                                    <!--<div class="main_Content_img02"></div>-->
                                    <p>AR 체험하기</p>
                                </a>
                            </div>
                            
                            <div class="main_Content02">
                                <a href="#" class="main_Content_btn03">
                                    <img src="./images/main_Content_img03.png" height="55.3571428%"></img>
                                    <!--<div class="main_Content_img03"></div>-->
                                    <p>나만의 사진</p>
                                </a>
                                <a href="#" class="main_Content_btn04">
                                    <img src="./images/main_Content_img04.png" height="55.3571428%"></img>
                                    <!--<div class="main_Content_img04"></div>-->
                                    <p>작품위치</p>
                                </a>
                                <a href="#" class="main_Content_btn05">
                                    <img src="./images/main_Content_img05.png" height="55.3571428%"></img>
                                    <!--<div class="main_Content_img05"></div>-->
                                    <p>주차정보</p>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <div data-role="content" id="daelimfooter">
                        <p><span>운영시간</span> am 08:00 ~ pm 08:00</p>
                        <a href="#"><img src="./images/sns_img01.png" height="100%"></img></a>
                        <a href="#"><img src="./images/sns_img02.png" height="100%"></img></a>
                        <a href="#"><img src="./images/sns_img03.png" height="100%"></img></a>
                        <!--<a class="sns01" herf="#"></a>-->
                        <!--<a class="sns02" herf="#"></a>-->
                        <!--<a class="sns03" herf="#"></a>-->
                    </div>
                </div>
        <!--</div>-->
    </body>
</html>