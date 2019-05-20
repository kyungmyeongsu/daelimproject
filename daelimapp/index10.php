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
                    
                    <div id="tabbar_box">
                        <a href="./index10.php" data-ajax="false">이벤트</a>
                        <div class="tabbar_bar">
                            <div class="tabbar_bar01"></div>
                        </div>
                        <a href="#">행사 이야기</a>
                    </div>
                    
                    <!--<div>-->
                    <!--    <a class="index10_dropbtn" href="#">-->
                    <!--        <p>전체</p>-->
                    <!--        <img src="./images/index10_dropbtn.png" width="4.72222%"/>-->
                    <!--    </a>-->
                    <!--</div>-->
                    
                    <div class="dropdown">
                        <a onclick="myFunction()" class="index10_dropbtn dropbtn" >
                            <p>전체</p>
                            <img src="./images/index10_dropbtn.png" height="34%"/>
                        </a>
                        <div id="myDropdown" class="dropdown-content">
                            <a class="index10_dropbtn" href="#">
                                <p>진행중인 이벤트</p>
                            </a>
                            <a class="index10_dropbtn" href="#">
                                <p>진행예정 이벤트</p>
                            </a>
                            <a class="index10_dropbtn" href="#">
                                <p>종료된 이벤트</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="index10_tabbar">
                        <a class="platablinks plactive" onclick="openplafrom(event, 'Cardform')">
                            <img src="./images/index10_tabbar_img01.png" width="13.8888%"></img>
                        </a>
                        <a class="platablinks" onclick="openplafrom(event, 'Listform')">
                            <img src="./images/index10_tabbar_img02.png" width="13.8888%"></img>
                        </a>
                    </div>
                    
                    <!-- cardfrom -->
                    <div id="Cardform" class="platabcontent" style="display:block">
                        <div class="index10_content">
                            <div class="index10_row">
                                <a href="./index11.php" data-ajax="false" class="idnex10_item index10_item_pad">
                                    <div class="idnex10_item_img">
                                        <img src="./images/index10_img01.png" height="100%"></img>
                                    </div>
                                    <!--<div class="index10_img">-->
                                        <div class="index10_ing">진행중</div>
                                    <!--</div>-->
                                    <div class="index10_text">
                                        <p>대림미술관 토드 셀비 전시,</p>
                                        <p>디뮤지엄 YOUTH...</p>
                                        <p>2017.05.10 - 2017.05.28</p>
                                    </div>
                                </a>
                                
                                <a href="./index11.php" data-ajax="false" class="idnex10_item">
                                    <div class="idnex10_item_img">
                                        <img src="./images/index10_img02.png" height="100%"></img>
                                    </div>
                                    <!--<div class="index10_img">-->
                                        <div class="index10_ing">진행중</div>
                                    <!--</div>-->
                                    <div class="index10_text">
                                        <p>대림미술관 X 츄파춥스</p>
                                        <p>어린이날 이벤트</p>
                                        <p>2017.05.05 - 2017.05.05</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="index10_row">
                                <a href="./index11.php" data-ajax="false" class="idnex10_item index10_item_pad">
                                    <div class="idnex10_item_img">
                                        <img src="./images/index10_img03.png" height="100%"></img>
                                    </div>
                                    <!--<div class="index10_img">-->
                                        <div class="index10_ing">진행중</div>
                                    <!--</div>-->
                                    <div class="index10_text">
                                        <p>닉 나이트 사진전 종료</p>
                                        <p>D-10, 야간개관 이벤트!</p>
                                        <p>2017.03.16 - 2017.03.26</p>
                                    </div>
                                </a>
                                
                                <a href="./index11.php" data-ajax="false" class="idnex10_item">
                                    <div class="idnex10_item_img">
                                        <img src="./images/index10_img04.png" height="100%"></img>
                                    </div>
                                    <!--<div class="index10_img">-->
                                        <div class="index10_ed">종 료</div>
                                    <!--</div>-->
                                    <div class="index10_text">
                                        <p>대림미술관 닉 나이트 전시,</p>
                                        <p>디뮤지엄 유스 전시를...</p>
                                        <p>2017.02.11 - 2017.03.26</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="index10_row">
                                <a href="./index11.php" data-ajax="false" class="idnex10_item index10_item_pad">
                                    <div class="idnex10_item_img">
                                        <img src="./images/index10_img05.png" height="100%"></img>
                                    </div>
                                    <!--<div class="index10_img">-->
                                        <div class="index10_ed">종 료</div>
                                    <!--</div>-->
                                    <div class="index10_text">
                                        <p>여름방학 생활백서</p>
                                        <p>#1 대학생 편</p>
                                        <p>2017.07.18 - 2017.07.21</p>
                                    </div>
                                </a>
                                
                                <a href="./index11.php" data-ajax="false" class="idnex10_item">
                                    <div class="idnex10_item_img">
                                        <img src="./images/index10_img06.png" height="100%"></img>
                                    </div>
                                    <!--<div class="index10_img">-->
                                        <div class="index10_ed">종 료</div>
                                    <!--</div>-->
                                    <div class="index10_text">
                                        <p>대림미술관 직장인을 위한</p>
                                        <p>야간개관 FREE ENTRY!</p>
                                        <p>2017.07.13 - 2017.07.13</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="index10_row">
                                <a href="./index11.php" data-ajax="false" class="idnex10_item index10_item_pad">
                                    <div class="idnex10_item_img">
                                        <img src="./images/index10_img07.png" height="100%"></img>
                                    </div>
                                    <!--<div class="index10_img">-->
                                        <div class="index10_ed">종 료</div>
                                    <!--</div>-->
                                    <div class="index10_text">
                                        <p>CUSHION EVENT!</p>
                                        <p>당구공이 맞아 떨어지듯</p>
                                        <p>2017.07.03 - 2017.10.01</p>
                                    </div>
                                </a>
                                
                                <a href="./index11.php" data-ajax="false" class="idnex10_item">
                                    <div class="idnex10_item_img">
                                        <img src="./images/index10_img08.png" height="100%"></img>
                                    </div>
                                    <!--<div class="index10_img">-->
                                        <div class="index10_ed">종 료</div>
                                    <!--</div>-->
                                    <div class="index10_text">
                                        <p>플라스틱 판타스틱을 </p>
                                        <p>모두 즐기는 방법</p>
                                        <p>2017.09.14 - 2017.10.29</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- listform -->
                    <div id="Listform" class="platabcontent">
                        <div class="index10_list_content">
                            <a href="./index11.php" data-ajax="false" class="index10_list_item">
                                <div class="index10_list_box">
                                    <img src="./images/event/listform_img1.jpg" width="100%"></img>
                                    <div class="index10_ing">진행중</div>
                                    <div class="index10_list_text">
                                        <p>대림미술관 토드 셀비 전시,</p>
                                        <p>디뮤지엄 YOUTH 전시를 모두 즐기는 방법</p>
                                        <p class="index10_list_date">2017.05.10 - 05.28</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="./index11.php" data-ajax="false">
                                <div class="index10_list_box">
                                    <img src="./images/event/listform_img2.jpg" width="100%"></img>
                                    <div class="index10_ing">진행중</div>
                                    <div class="index10_list_text">
                                        <p>대림미술관 X 츄파춥스</p>
                                        <p>어린이날 이벤트</p>
                                        <p class="index10_list_date">2017.05.05 - 2017.05.05</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="./index11.php" data-ajax="false">
                                <div class="index10_list_box">
                                    <img src="./images/event/listform_img3.jpg" width="100%"></img>
                                    <div class="index10_ing">진행중</div>
                                    <div class="index10_list_text">
                                        <p>닉 나이트 사진전 종료</p>
                                        <p>D-10, 야간개관 이벤트!</p>
                                        <p class="index10_list_date">2017.03.16 - 2017.03.26</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="./index11.php" data-ajax="false">
                                <div class="index10_list_box">
                                    <img src="./images/event/listform_img4.jpg" width="100%"></img>
                                    <div class="index10_ed">종 료</div>
                                    <div class="index10_list_text">
                                        <p>대림미술관 닉 나이트 전시,</p>
                                        <p>디뮤지엄 유스 전시를...</p>
                                        <p class="index10_list_date">2017.02.11 - 2017.03.26</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="./index11.php" data-ajax="false">
                                <div class="index10_list_box">
                                    <img src="./images/event/listform_img5.jpg" width="100%"></img>
                                    <div class="index10_ed">종 료</div>
                                    <div class="index10_list_text">
                                        <p>여름방학 생활백서</p>
                                        <p>#1 대학생 편</p>
                                        <p class="index10_list_date">2017.07.18 - 2017.07.21</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="./index11.php" data-ajax="false">
                                <div class="index10_list_box">
                                    <img src="./images/event/listform_img6.jpg" width="100%"></img>
                                    <div class="index10_ed">종 료</div>
                                    <div class="index10_list_text">
                                        <p>대림미술관 직장인을 위한</p>
                                        <p>야간개관 FREE ENTRY!</p>
                                        <p class="index10_list_date">2017.07.13 - 2017.07.13</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="./index11.php" data-ajax="false">
                                <div class="index10_list_box">
                                    <img src="./images/event/listform_img7.jpg" width="100%"></img>
                                    <div class="index10_ed">종 료</div>
                                    <div class="index10_list_text">
                                        <p>CUSHION EVENT!</p>
                                        <p>당구공이 맞아 떨어지듯</p>
                                        <p class="index10_list_date">2017.07.03 - 2017.10.01</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="./index11.php" data-ajax="false">
                                <div class="index10_list_box">
                                    <img src="./images/event/listform_img8.jpg" width="100%"></img>
                                    <div class="index10_ed">종 료</div>
                                    <div class="index10_list_text">
                                        <p>플라스틱 판타스틱을 </p>
                                        <p>모두 즐기는 방법</p>
                                        <p class="index10_list_date">2017.09.14 - 2017.10.29</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
        <!--</div>-->
    </body>
</html>