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
        <link href="./css/jquery.bxslider.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="./js/common.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
        <script src="./js/jquery.bxslider.js"></script>
        <title>대림미술관 어플리케이션</title>
        
        <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function(){
        	//$('.bxslider').bxSlider();
        	
             $('.bxslider').bxSlider({
                auto: true,
                speed: 500,
                pause: 4000,
                mode:'horizontal',
                Controls: false,
                autoControls: false,
                pager: true,
            });
        });
        //]]>
        </script>
      
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
                    
                    <div class="dropdown">
                        <a onclick="myFunction()" class="index10_dropbtn dropbtn" >
                            <p>현재전시</p>
                            <img src="./images/index10_dropbtn.png" height="34%"/>
                        </a>
                        <div id="myDropdown" class="dropdown-content">
                            <a class="index10_dropbtn" href="#">
                                <p>예정전시</p>
                            </a>
                            <a class="index10_dropbtn" href="#">
                                <p>지난전시</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="index02_tabbar">
                        <a class="index02_tabbar_w" href="#">전시 소개</a>
                        <div class="index02_tabbar01">
                            <div class="index02_tabbar02"></div>
                        </div>
                        <a class="index02_tabbar_g" href="#">작가 소개</a>
                        <div class="index02_tabbar01">
                            <div class="index02_tabbar02"></div>
                        </div>
                        <a class="index02_tabbar_g" href="#">기념품 샵</a>
                    </div>
                    
                    <div class="index02_height">
                        <ul class="bxslider">
                            <li>
                                <img src="./images/index02_img01.png" width="100%;"></img>
                            </li>
                            <li>
                                <img src="./images/index02_img04.png" width="100%;"></img>
                            </li>
                            <li>
                                <img src="./images/index02_img05.png" width="100%;"></img>
                            </li>
                        </ul>
                        <!--<img src="./images/index02_img01.png" width="100%;"></img>-->
                    <!--<div class="index02_img01"></div>-->
                    
                    <a href="./index04.php" data-ajax="false" class="index02_audio">
                        <img src="./images/index02_img_icon.png" height="47%"></img>
                        <p>오디오 가이드</p>
                    </a>
                    
                    <div class="index02_gray">
                        <p>The Selby House : # 즐거운_나의_집</p>
                        <p>기간 &nbsp;2017년 4월 29일 <span>부터</span> 2017년 10월 29일 <span>까지</span></p>
                        <p>장소 &nbsp;대림미술관</p>
                    </div>
                    
                    <div class="index02_text01">
                        <p class="index02_tex_title01">전시내용</p>
                        <br>
                        <p class="index02_tex_title02">PART. 1</p>
                        <br>
                        <p>대림미술관은 2017년 4월 27일부터 10월 29일까지 전 세계 크리에이터들의 개성 넘치는 라이프 스타일을 기록하는 포토그래퍼이자 일러스트레이터 토드 셀비(Todd Selby)의 전시 〈The Selby House: #즐거운_나의_집〉을 개최합니다. </p>
                        <br>
                        <p>인물과 공간에 대한 애정과 호기심이 가득 담긴 사진 및 감각적인 일러스트레이션을 통해 대중과 소통하는 토드 셀비는, 패션, 디자인, 영화, 건축, 요리 등 분야를 막론하고 트렌드 세터라면 꼭 함께 작업하기를 열망하는 아티스트로 주목받고 있습니다. 특히 작품에 담긴 셀비 특유의 유쾌함과 자유분방함은 단조로운 일상에 예술적 영감을 제공하고 긍정적인 에너지를 불러일으켜 왔습니다.</p>
                    </div>
                    
                    <div class="index02_img02"></div>
                    
                    <div class="index02_text02">
                        <p>미술관 입구에서부터 전시장 전체, 그리고 정원까지 토드 셀비의 행복한 상상과 즐거움이 가득한 ‘셀비의 집’으로 변화하는 이번 전시에서는, 그의 대표 사진 시리즈뿐 아니라 다채로운 컬러와 자유로운 표현이 돋보이는 일러스트레이션, 영상, 그리고 새롭게 선보이는 대형 설치 작업까지 작가의 상상력과 유머감각이 고스란히 드러나는 작품들을 총망라합니다.</p>
                        <br>
                        <p>본 전시는 토드 셀비가 자신의 블로그 '더셀비닷컴(theselby.com)' 공개하며 큰 주목을 받기 시작한 유명인들의 사적인 공간을 촬영한 초기 작품부터, 패션과 요리의 영역에서 활약하는 인물들의 역동적인 작업실과 창의적인 주방을 담은 230여 점의 대표 사진들을 한 자리에서 소개합니다.</p>
                    </div>
                    
                    <div class="index02_img03"></div>
                    
                    <div class="index02_text03">
                        <p>특히 직접 키운 앙고라 토끼의 털로 의상을 만드는 니트 디자이너 암비카 콘로이(Ambika Conroy)를 포함하여, 발망(Balmain)의 최연소 디자이너 올리비에 루스테잉(Olivier Rousteing), 이탈리아 패션계의 대모이자 10 꼬르소꼬모 설립자 카를라 소차니(Carla Sozzani)의 작업 공간과, 멕시코의 깊은 정글에 자리잡은 레스토랑 하트우드(Hartwood)나 브루클린(Brooklyn)의 루프탑을 농장으로 바꾸는 도시 농부 애니 노박(Annie Novak)의 일상을 담은 사진들은 각기 다른 분야에서 주체적으로 살아가는 사람들의 모습을 애정 어린 시각으로 보여줍니다.</p>
                        <br>
                        <p>더불어 동물, 음식, 자연 등의 일상적인 소재에 작가만의 고유한 색깔과 순수한 에너지를 덧입힌 일러스트와 드로잉 작품들을 통해, 보다 쉽고 친밀하게 대중과 소통하는 방식을 끊임없이 발굴하고 창조해내는 토드 셀비의 비주얼 커뮤니케이터(Visual Communicator)로서의 모습도 함께 조망합니다. 뿐만 아니라 일상 자체가 창의적 결과물로 이어지는 가장 ‘셀비다운’ 라이프 스타일을 들여다볼 수 있는 토드 셀비의 거실과 침실, 작업실을 재구성한 셀비의 방과, 작가의 어릴 적 꿈과 기억이 하나로 응집되어 환상적인 에너지로 폭발하는 셀비의 정글을 직접 체험할 수 있는 공간이 마련됩니다.</p>
                    </div>
                    </div>
                    
                </div>
        <!--</div>-->
    </body>
</html>