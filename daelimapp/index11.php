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
                    
                    <div id="tabbar_box">
                        <a href="./index10.php" data-ajax="false">이벤트</a>
                        <div class="tabbar_bar">
                            <div class="tabbar_bar01"></div>
                        </div>
                        <a href="#">행사 이야기</a>
                    </div>
                    
                    <div class="index11_height">
                        <img src="./images/index11_img01.png" width="100%"></img>
                        
                        <div class="index11_title01">
                            <p>대림미술관 토드 셀비 전시,</p>
                            <p>디뮤지엄 YOUTH 전시를 모두 즐기는 방법</p>
                            <p>2017.05.10 - 2017.05.28</p>
                        </div>
                        
                        <div class="index11_title02">
                            <p>대림미술관, 디뮤지엄 모두 즐겨요.</p>
                            <br>
                            <p>두 가지 방법으로 즐거움은 두 배!</p>
                            <br>
                            <p>□ 토드 셀비의 즐거운 에너지에 청춘의 감성을 더하면?</p>
                            <p>: 대림미술관 토드 셀비 전시 티켓 디뮤지엄 티켓 부스 제시 시, </p>
                            <p>YOUTH 전시 40% 할인</p>
                            <br>
                            <p>□ 당신의 유스를 깨웠다면, 유머와 상상 매력 넘치는 </p>
                            <p>셀비네 집으로 오세요.</p>
                            <p>: 디뮤지엄의 YOUTH 전시 티켓 대림미술관 티켓 부스 제시 시, </p>
                            <p>토드 셀비 전시 40% 할인</p>
                            <br>
                            <p>· 기간: ~2017. 05. 28 SUN 까지</p>
                            <p>· 혜택: 전시 티켓 소지 시 대림미술관, 디뮤지엄 전시 각 40% 할인</p>
                            <br>
                            <p>* 단, 오프닝 초청장은 제외</p>
                            <p>* 정규 도슨트 외 교육 프로그램 혜택 적용 불가</p>
                            <p>* 타 행사 이벤트 및 프로모션 중복 할인 불가</p>
                        </div>
                        
                        <a class="index11_btn" href="./index10.php" data-ajax="false">목록</a>
                    </div>
                    
                </div>
        <!--</div>-->
    </body>
</html>