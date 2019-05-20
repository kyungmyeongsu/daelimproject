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
        <link rel="stylesheet" href="./css/numpad.css" type="text/css" />
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="./js/common.js"></script>
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
                    
                    <div id="header_h">
                        <div class="back_box">
                            <a class="back_img" href="#" data-rel="back">뒤로가기</a>
                        </div>
                        <div class="lg_box">
                            <a href="./index.php" data-ajax="false"><div class="lg_img"></div></a>
                        </div>
                        <div class="total_box">
                            <a class="total_img" href="#panel">전체</a>
                        </div>
                    </div>
                    
                    <form id="index04_number">
                        <input class="index04_number_input01" type="number" pattern="[0-9]*" inputmode="numeric" placeholder="작품번호입력">
                        <a class="index04_number_input02" href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop">검색</a>
                    </form>
                    
                    <div data-role="popup" id="popupDialog" class="popupDialog01" data-overlay-theme="b" data-theme="b" data-dismissible="false">
                        <div role="main" class="ui-content">
                            <p class="pop_text01">작품번호</p>
                            <p class="pop_text02">작품번호를 다시 입력해주세요</p>
                            <a href="#" class="popup_btn" data-rel="back">확인</a>
                        </div>
                    </div>
                    
                    <div id="tabbar_box">
                        <a href="./index04.php" data-ajax="false">층별작품</a>
                        <div class="tabbar_bar">
                            <div class="tabbar_bar01"></div>
                        </div>
                        <a href="./index05.php" data-ajax="false">NFC 모드</a>
                    </div>
                    
                    <div class="floor_box">
                        <a class="tablinks active" onclick="openfloor(event, 'Total')">전체</a>
                        <a class="tablinks" onclick="openfloor(event, 'Firfloor')">1F</a>
                        <a class="tablinks" onclick="openfloor(event, 'Secfloor')">2F</a>
                        <a class="tablinks" onclick="openfloor(event, 'Thifloor')">3F</a>
                        <a class="tablinks" onclick="openfloor(event, 'Foufloor')">4F</a>
                    </div>
                    
                    <!-- Total -->
                    <div id="Total" class="tabcontent" style="display:block">
                        <div class="index04_content">
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img01.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>01</p>
                                    <p>Selby the Photograpy</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img02.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>02</p>
                                    <p>오지라이트 마일리 크리티브</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img03.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>03</p>
                                    <p>레드우드</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img04.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>04</p>
                                    <p>크리스찬 루브탱</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img05.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>05</p>
                                    <p>칼 라펠트</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img06.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>06</p>
                                    <p>Eric Werner & Mya Henry</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img07.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>07</p>
                                    <p>Yoshikazu Yamagata at his Studio</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img08.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>08</p>
                                    <p>SELBY THE ILLUSTRATOR</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img09.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>09</p>
                                    <p>SELBY THE STORYTELLER</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img10.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>10</p>
                                    <p>SELBY THE TRAVELER</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img11.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>11</p>
                                    <p>SELBY THE DREAMER</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 1F-->
                    <div id="Firfloor" class="tabcontent">
                        <div class="index04_content">
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img01.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>01</p>
                                    <p>Selby the Photograpy</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img02.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>02</p>
                                    <p>오지라이트 마일리 크리티브</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img03.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>03</p>
                                    <p>레드우드</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img04.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>04</p>
                                    <p>크리스찬 루브탱</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2F-->
                    <div id="Secfloor" class="tabcontent">
                        <div class="index04_content">
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img05.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>05</p>
                                    <p>칼 라펠트</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img06.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>06</p>
                                    <p>Eric Werner & Mya Henry</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img07.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>07</p>
                                    <p>Yoshikazu Yamagata at his Studio</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 3F-->
                    <div id="Thifloor" class="tabcontent">
                        <div class="index04_content">
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img08.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>08</p>
                                    <p>SELBY THE ILLUSTRATOR</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img09.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>09</p>
                                    <p>SELBY THE STORYTELLER</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img10.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>10</p>
                                    <p>SELBY THE TRAVELER</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 4F-->
                    <div id="Foufloor" class="tabcontent">
                        <div class="index04_content">
                            <div class="index04_content01">
                                <!--<div class="index04_img01"></div>-->
                                <img src="./images/index04_img11.png" height="100%"></img>
                                <div class="index04_text">
                                    <p>11</p>
                                    <p>SELBY THE DREAMER</p>
                                    <p>Todd Selby</p>
                                </div>
                                <div class="index04_btn">
                                    <a class="index04_btn_img" href="./index06.php" data-ajax="false">오디오</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                <div class="index04_numpad">
                    <div class="index04_numbar"></div>
                    <div class="index04_numpad_row">
                        <a onclick="numpad(1);">1</a>
                        <a onclick="numpad(2);">2</a>
                        <a onclick="numpad(3);">3</a>
                    </div>
                    <div class="index04_numpad_row">
                        <a onclick="numpad(4);">4</a>
                        <a onclick="numpad(5);">5</a>
                        <a onclick="numpad(6);">6</a>
                    </div>
                    <div class="index04_numpad_row">
                        <a onclick="numpad(7);">7</a>
                        <a onclick="numpad(8);">8</a>
                        <a onclick="numpad(9);">9</a>
                    </div>
                    <div class="index04_numpad_row">
                        <a onclick="numpad('b');">back</a>
                        <a onclick="numpad(0);">0</a>
                        <a class="hidebtn">확인</a>
                    </div>
                </div>
                </div>
                
               
        <!--</div>-->
    </body>
</html>