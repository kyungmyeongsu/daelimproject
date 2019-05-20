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
                            <a class="index13_tab_box02 font_gray" href="./index13.php" data-ajax="false">멤버십</a>
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
                            <a class="index13_tab_box06" href="./index15.php" data-ajax="false">설정</a>
                        </div>
                    </div>
                    
                    <div class="index13_content">
                        <p class="index13_title01">멤버십 카드 목록</p>
                        <div class="index13_member">
                            <a href="#">
                                <img src="./images/index13_member_img01.png" width="100%"></img>
                            </a>
                        </div>
                        <p class="index13_title02">신규카드 등록</p>
                        <form id="index13_member_num">
                            <input class="index13_member_num01" type="text" name="cardnum" placeholder="카드번호 입력"/>
                            <input type="submit" value="등록"/>
                        </form>
                        <p class="index13_title03">멤버십 혜택</p>
                        <ul class="index13_text_box01">
                            <li>전시 3회 : 대림미술관(통의동) 및 디뮤지엄(한남동) 전시 모두 관람 가능, 동일 전시 재관람 가능</li>
                            <li>문화 프로그램 1회 : 대림미술관 기존의 D패스로서 선데이 라이브&클래스의 콘서트와 워크샵, 토크&렉처 중 선택 1회</li>
                            <li>아메리카노 1잔: 미술관옆집 아메리카노 1잔</li>
                            <li>스페셜 혜택: 제휴사 연계 할인 및 추가 서비스 제공 (추후 업데이트 예정)</li>
                        </ul>
                        <ul class="index13_text_box02">
                            <li>D멤버십 카드는 대림미술관, 디뮤지엄 및 인터파크에서 구입하실 수 있습니다.</li>
                            <li>구입하신 후 대림미술관&디뮤지엄 홈페이지 또는 모바일 앱에서 온라인 회원가입을 하신 다음 직접 등록하시거나 미술관에서 직원을 통해 등록 후 사용 가능합니다.</li>
                            <li>아메리카노 1잔의 혜택은 대림미술관 미술관옆집 또는 디뮤지엄 D Cafe에서 이용 가능합니다.</li>
                        </ul>
                    </div>
                    
                </div>
        <!--</div>-->
    </body>
</html>