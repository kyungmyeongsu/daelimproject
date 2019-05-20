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
        <link rel="shortcut icon" href="./images/favicon.ico" />
        <link rel="stylesheet" href="./css/jquery.mobile-1.4.5.css" />
        <link rel="stylesheet" href="./css/common.css" type="text/css" />
        <link rel="stylesheet" href="./css/index01.css" type="text/css" />
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="./js/audio.js"></script>
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
                    
                    <div class="index06_content01">
                        <a class="index06_close" href="#" data-rel="back">닫기</a>
                        <img src="./images/index06_img01.png" width="100%"></img>
                        
                        <div class="index06_text">
                            <p><span>토드 셀비의 작업들은 사진을 통해 다양한 삶의 모습들을 경험하게 해줍니다.</span>
                                한번도 만난적 없는 사람들의 집이나작업실 사진을 마주하다보면 마치 세계곳곳의 친구의 집들을 여행하는 느낌을 자아내기도 합니다. 여기 런던에 살고있는 사진작가 레치우드의 집이 그 대표 사례가 될 것 같은데요.
                                토드셀비는 더 셀비 닷컴에 소개된 아티스트 40여명의 사진과 일러스트로 The Selby is in your plays.라는 책을 출판합니다.
                                그는 이책에서 가장 마음에드는 집으로 레츠의 집을 꼽았는데요. 배우, 뮤지션, 디자이너의 포트레이트를 찍는 사진작가 레츠우드는 런던의 사설 선착장에 정박된 보트에 살고 있습니다. 그녀는 이 보트가 비싼 입대료, 생활비, 대출의 부담감에서 벗어나게 
                                해줄 뿐 만 아니라 어디든 갈수있는 자유를 주었다고 합니다. 어떠세요? 토드가 찍은 사진들이 이런 느낌을 담고 있나요?
                                설명을 더이어가기 전에토드 셀비가 작품을 보여주는 방식에 대해 말씀드리고 싶은데요. 이공간에 사진들이 배열된 방식을 보면 여러장의 사진과 그들을 
                                묘사한 일러스트레이션이 함께전시 되고있습니다. 토드셀비는 많은 이야기를 갖고있는 사진 속 이야기들을 표현하기에 단한장의 사진으로는 턱 없이 부족하기 때문에 이런 방식을 취했다고 말합니다. 여기서 우리는 토드 셀비의 사랑과 그들의 이야기에 대한 애정을 
                                엿볼수있는데요. 다음 인물은 어떤 이야기를 담고있을지 함께 만나 볼까요? 
                            </p>
                        </div>
                    </div>
                    
                    <div class="index06_content02">
                        <p><span>01</span> Selby the Photographer</p>
                        <p>Toddy Selby</p>
                    </div>
                        
                    <div class="index06_content03">
                        <a class="index06_control_img01"><img src="./images/index06_control_img01.png" width="100%"></img></a>
                        <div class="index06_control">
                            <a class="index06_control_img02"><img src="./images/index06_control_img02.png" width="100%"></img></a>
                            <a class="index06_control_img04"><img class="ppbth" src="./images/index06_control_img04.png" width="100%"></img></a>
                            <a class="index06_control_img03"><img src="./images/index06_control_img03.png" width="100%"></img></a>
                        </div>
                        <a class="index06_control_img05"><img src="./images/index06_control_img05.png" width="100%"></img></a>
                    </div>
                    <span id="hide">
                    <audio class="doscent" controls preload="none"> 
                       <source src="audio/luvour.mp3" type="audio/mpeg"> 
                    </audio></span>

                    <div class="index06_time">
                        <div class="index06_pretime">
                            <span class="index06_time01">00:00</span>
                        </div>
                        <span class="index06_time02">00:00</span>
                    </div>
                    
                    
                    
                </div>
        <!--</div>-->
    </body>
</html>