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
                    
                    
                    <p class="index07_info">체험을 원하는 작품을 선택해주세요</p>
                    
                    <div class="floor_box">
                        <a class="Artablinks Aractive" onclick="openArfloor(event, 'ArTotal')">전체</a>
                        <a class="Artablinks" onclick="openArfloor(event, 'ArFirfloor')">1F</a>
                        <a class="Artablinks" onclick="openArfloor(event, 'ArSecfloor')">2F</a>
                        <a class="Artablinks" onclick="openArfloor(event, 'ArThifloor')">3F</a>
                        <a class="Artablinks" onclick="openArfloor(event, 'ArFoufloor')">4F</a>
                    </div>
                    
                    <!-- Total -->
                    <div id="ArTotal" class="Artabcontent" style="display:block">
                        <ul class="index07_content">
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img01.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>01</p>
                                        <p>Selby the Photograpy</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img02.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>02</p>
                                        <p>오지라이트 마일리 크리티브</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img03.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>03</p>
                                        <p>레드우드</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img04.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>04</p>
                                        <p>크리스찬 루브탱</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img05.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>05</p>
                                        <p>칼 라펠트</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img06.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>06</p>
                                        <p>Eric Werner & Mya Henry</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img07.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>07</p>
                                        <p>Yoshikazu Yamagata at his Studio</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img08.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>08</p>
                                        <p>SELBY THE ILLUSTRATOR</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img09.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>09</p>
                                        <p>SELBY THE STORYTELLER</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img10.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>10</p>
                                        <p>SELBY THE TRAVELER</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img11.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>11</p>
                                        <p>SELBY THE DREAMER</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- 1F -->
                    <div id="ArFirfloor" class="Artabcontent">
                        <ul class="index07_content">
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img01.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>01</p>
                                        <p>Selby the Photograpy</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img02.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>02</p>
                                        <p>오지라이트 마일리 크리티브</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img03.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>03</p>
                                        <p>레드우드</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img04.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>04</p>
                                        <p>크리스찬 루브탱</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- 2F -->
                    <div id="ArSecfloor" class="Artabcontent">
                        <ul class="index07_content">
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img05.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>05</p>
                                        <p>칼 라펠트</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img06.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>06</p>
                                        <p>Eric Werner & Mya Henry</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img07.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>07</p>
                                        <p>Yoshikazu Yamagata at his Studio</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- 3F -->
                    <div id="ArThifloor" class="Artabcontent">
                        <ul class="index07_content">
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img08.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>08</p>
                                        <p>SELBY THE ILLUSTRATOR</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img09.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>09</p>
                                        <p>SELBY THE STORYTELLER</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img10.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>10</p>
                                        <p>SELBY THE TRAVELER</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- 4F -->
                    <div id="ArFoufloor" class="Artabcontent">
                        <ul class="index07_content">
                            <li>
                                <a class="index07_list" href="./index08.php" data-ajax="false">
                                    <img src="./images/index04_img11.png" height="100%"/>
                                    <span class="index07_list_text">
                                        <p>11</p>
                                        <p>SELBY THE DREAMER</p>
                                        <p>Todd Selby</p>
                                    </span>
                                    <img src="./images/panel_quick_list_img.png" height="10%"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <a href="./index09.php" data-ajax="false" class="index07_foot">AR체험 추천 동선</a>
                </div>
        <!--</div>-->
    </body>
</html>