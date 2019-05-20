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
                    
                    <div class="index13_tabbar_content">
                        <div class="index13_tabbar">
                            <a class="index13_tab_box01" href="#">내정보</a>
                            <div class="index13_bar">
                                <div class="index13_bar01"></div>
                            </div>
                            <a class="index13_tab_box02" href="./index13.php" data-ajax="false">멤버십</a>
                            <div class="index13_bar">
                                <div class="index13_bar01"></div>
                            </div>
                            <a class="index13_tab_box03" href="#">쿠폰</a>
                            <div class="index13_bar">
                                <div class="index13_bar01"></div>
                            </div>
                            <a class="index13_tab_box04" href="#">메시지</a>
                            <div class="index13_bar">
                                <div class="index13_bar01"></div>
                            </div>
                            <a class="index13_tab_box05" href="./index14.php" data-ajax="false">1:1문의하기</a>
                            <div class="index13_bar">
                                <div class="index13_bar01"></div>
                            </div>
                            <a class="index13_tab_box06 font_gray" href="./index15.php" data-ajax="false">설정</a>
                        </div>
                    </div>
                    
                    <div class="index15_content">
                        <p>자동로그인</p>
                        <form>
                            <select name="flip-1" id="flip-1" data-role="slider">
                            	<option value="off"></option>
                            	<option value="on"></option>
                            </select> 
                        </form>
                    </div>
                    
                    <div class="index15_content">
                        <p>PUSH 알림</p>
                        <form>
                            <select name="flip-1" id="flip-1" data-role="slider">
                                <option value="off"></option>
                                <option value="on"></option>
                            </select>
                        </form>
                    </div>
                    
                    <div class="index15_content">
                        <p>위치정보 사용</p>
                        <form>
                            <select name="flip-1" id="flip-1" data-role="slider">
                                <option value="off"></option>
                                <option value="on"></option>
                            </select>
                        </form>
                    </div>
                    
                    <a href="#">
                        <div class="index15_content">
                            <p>언어선택</p>
                            <p>KR</p>
                        </div>
                    </a>
                    
                    <div class="index15_content">
                        <p>버전 정보</p>
                        <p>V.1.0</p>
                    </div>
                    
                    <a href="#">
                        <div class="index15_content">
                            <p>서비스 약관</p>
                            <div class="index15_next"></div>
                        </div>
                    </a>
                    
                    <a href="#">
                        <div class="index15_content">
                            <p>개인정보 처리방침</p>
                            <div class="index15_next"></div>
                        </div>
                    </a>
                    
                    <?php 
                        if(isset($_SESSION['name'])){
                    ?>
                    <a href="./logout.php" data-ajax="false">
                        <div class="index15_content">
                            <p>로그아웃</p>
                            <div class="index15_next"></div>
                        </div>
                    </a>
                    <?php
                        }
                    ?>
                </div>
        <!--</div>-->
    </body>
</html>