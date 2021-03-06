<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>대림미술관</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/sub1-2.css">
  <link rel="shortcut icon" href="./images/favicon.ico" />
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
 </head>
 <body>
<?php
  include_once("head.php");
?>

 	<!-- 교육 프로그램 타이틀 -->
  <section id="big_title_box">
    <h2>교육 프로그램</h2>
    <p>미술관과 친해지는 행복한 첫걸음</p>
    <p>재미있게 배우는 미술감상</p>
  </section>

  <!-- 내비게이션 -->
  <section id="navigation">
    <ul class="navigation01">
        <li><a class="navigation_icon01" href="./main.php">home</a></li>
        <li><a class="navigation_icon02" href="#">프로그램</a></li>
        <li><a class="navigation_icon03" href="#">교육 프로그램</a></li>
        <li><a class="navigation_icon04" href="#">어린이<span class="navigation_sp">(해피 칠드런)</span></a></li>
    </ul>
  </section>

  <!-- center 시작 -->
  <div id="container_center">

  <!-- 프로그램 신청 타이틀 -->
  <h2 class="pg_title01">프로그램 신청</h2>
  <div class="pg_bar"></div>
  <p class="pg_title02">교육 프로그램 신청하기</p>

  <!-- 프로그램 신청 content -->
  <section class="pgdetail">
    <div class="col-6 pgdetail_img01"></div>
    <div class="col-6 pgdetail_box01">
      <p>교육프로그램&nbsp;&nbsp;&nbsp;<span>해피 칠드런</span></p>
      <h2>이 . 상 . 한 . 집 (이야기를 상상하는 집)</h2>
      <p>토드 셀비의 독특한 스토리텔링 방법 경험하기!<br>토드 셀비의 상상력 가득한 작품들을 이용해 나만의 이야기를 구상해보고,<br>입체적으로 연출해보는 어린이 통합 예술교육</p>
      <p>토드 셀비처럼 우리만의 독특한 시각언어로 표현하자!<br>작품 속 이야기를 읽어보고, 글을 시각화하여 이야기가 담긴<br>프레임을 제작해보는 감상 심화 교육 </p>
      <p>미술관에는 어떤 사람들이, 무슨 일을 하고 있을까?<br>퀴즈, 영상, 전문가의 눈으로 보는 전시관람과<br>미술관 공간 기획 활동으로 구성된 진로 교육 </p>

      <a class="application_btn" href="./sub4.php">신청하기</a>
    </div>
  </section>

  <!-- 프로그램 신청 tabbar -->
  <section class="pg_tabbar">
    <a class="col-6 pg_tabbar01" href="./sub1-1.php">이용안내</a>
    <a class="col-6 pg_tabbar02" href="./sub1-2.php">진행과정</a>
  </section>

  <!-- 프로그램 과정 타이틀 -->
  <h2 class="pg_title01">프로그램 과정</h2>
  <div class="pg_bar"></div>
  <p class="pg_title02">자세한 교육 진행 과정을 확인</p>

  <!-- 프로그램 과정 이미지 -->
  <section class="pg_process">
    <div class="pg_process_row">
      <div class="col-4 pg_process_box">
        <div class="pg_process_inner">
          <div class="pg_process_img01"></div>
          <h2>STEP 1. 전시감상</h2>
          <p>즐겁고 유쾌한 이야기가 숨어있는 토드 셀비의 집으로<br>함께 여행하기</p>
        </div>
      </div>
      <div class="col-4 pg_process_box">
        <div class="pg_process_inner">
          <div class="pg_process_img02"></div>
          <h2>STEP 2. 전시 리뷰 게임</h2>
          <p>이미지 연상 게임을 통해 작가의 상상력 가득한<br>작품 되새겨 보기</p>
        </div>
      </div>
      <div class="col-4 pg_process_box">
        <div class="pg_process_inner">
          <div class="pg_process_img03"></div>
          <h2>STEP 3. 이 . 상 . 한 . 집 만들기</h2>
          <p>토드 셀비처럼 재미있는 이야기를 상상하고,<br>입체적으로 연출해보기</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 프로그램 과정 텍스트 -->
  <section class="pg_time">
    <div class="col-3 pg_time_box">
      <div class="pg_time_bar"></div>
      <p>1:30PM - 2:00PM</p>
      <p>대림미술관 전시 관람</p>
      <p>대림 미술관에 도착 후 미술관 카운터에서<br>본인 확인 후 안내를 받고 미술관 내부의<br>교육장에 모인다.<br>인원 체크 후 큐레이터의 안내를 받아서<br>미술관의 작품을 하나씩 설명을 듣는다.<br>관람 후 교육 장소로 이동한다.</p>
    </div>
    <div class="col-3 pg_time_box">
      <div class="pg_time_bar"></div>
      <p>2:00PM - 2:30PM</p>
      <p>교육 프로그램 강연 시작</p>
      <p>미술관 관람 후 미술관내의 교육장으로 이동<br>교육장에서 강연자들의 교육 프로그램<br>설명을 듣고, 프로그램에 필요한 준비물을<br>제공 받는다.</p>
    </div>
    <div class="col-3 pg_time_box">
      <div class="pg_time_bar"></div>
      <p>2:30PM - 4:30PM</p>
      <p>교육 프로그램 실습</p>
      <p>미술관에서 준비된 준비물을 통해서 교육<br>프로그램을 진행합니다.<br>아이들이 미술과 친숙해질 수 있는 교육<br>프로그램을 통해서 아이들의 창의력을<br>향상시킵니다.</p>
    </div>
    <div class="col-3 pg_time_box">
      <div class="pg_time_bar"></div>
      <p>5:00PM - 6:00PM</p>
      <p>프로그램 종료</p>
      <p>준비된 교육 프로그램이 마무리되고 아이들이<br>만든 작품을 감상하며 프로그램이 종료 됩니다.</p>
    </div>
  </section>

  <!-- 더보기 버튼 -->
  <a class="pg_teacher_more" href="./sub1.php">목록</a>

  <!-- center 끝 -->
  </div>

<?php
  include_once("footer.php");
?>