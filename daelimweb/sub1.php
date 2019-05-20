<?php

require_once("./outlet.php");

  $category = isset($_REQUEST["category"]) ? $_REQUEST["category"] : 10;


$listset = geteducationList(0,12, $category); 
?>

<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>대림미술관</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/sub1.css">
  <link rel="shortcut icon" href="./images/favicon.ico" />
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/main.js"></script>
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
        <li><a class="navigation_icon02" href="#">프로그램</a>
          <ul>
            <li><a href="#">미술관소개</a></li>
            <li><a href="#">전시소개</a></li>
            <li><a href="./sub1.php">프로그램</a></li>
            <li><a href="#">라이브러리</a></li>
            <li><a href="./sub2.php">새소식</a></li>
            <li><a href="#">미술관주변</a></li>
          </ul>
        </li>
        <li><a class="navigation_icon03" href="#">교육 프로그램</a>
          <ul>
            <li><a href="#">Sunday live & Class</a></li>
            <li><a href="#">Talk & Lecture</a></li>
            <li><a href="./sub1.php">교육 프로그램</a></li>
            <li><a href="#">지역연계 프로그램</a></li>
          </ul>
        </li>
        <li><a class="navigation_icon04" href="#">어린이<span class="navigation_sp">(해피 칠드런)</span></a>
          <ul>
            <li><a href="./sub1.php">어린이<span class="navigation_sp">(해피칠드런)</span></a></li>
            <li><a href="#">청소년<span class="navigation_sp">(팀대머리)</span></a></li>
            <li><a href="#">청소년<span class="navigation_sp">(미술관사람들)</span></a></li>
            <li><a href="#">성인<span class="navigation_sp">(필드트립)</span></a></li>
            <li><a href="#">교사<span class="navigation_sp">(교사대상 프로그램)</span></a></li>
          </ul>
        </li>
    </ul>
  </section>

  <!-- center 시작 -->
  <div id="container_center">

  <!-- 해피 칠드런 타이틀 -->
  <h2 class="pg_title01">해피 칠드런</h2>
  <div class="pg_bar"></div>
  <p class="pg_title02">어린이를 위한 신나는 교육 프로그램</p>

  <!-- 프로그램 선택 -->
  <div class="pg_down">
  <section class="pg_down_box">
    <select name="programlist">
      <option value="10">전체</option>
      <option value="0">진행중인 프로그램</option>
      <option value="1">종료된 프로그램</option>
    </select>

    <button type="submit" id="changeCategory">조회</button>
  </section>
  </div>
        
  <!-- 프로그램 리스트 -->
  <section class="pg_list">
    <div class="pg_row">
      <?php 
        while($row=$listset->fetch_object()){
      ?>
      <div class="col-3 pg_padding">
        <a href="./sub1-1.php" class="pg_inner">
          <img src="./images/program/pg_img<?php echo $row->num; ?>.jpg" width="100%"></img>
          <p><?php echo $row->title;  ?></p>
          <p><?php echo $row->contents;  ?></p>
          <p><?php echo $row->date;  ?></p>
        </a>
      </div>
      <?php  
        }
      ?> 
      
    </div>
    
  </section>

  <!-- 더보기 버튼 -->
  <?php
    if($_REQUEST["category"]=="" or $_REQUEST["category"]==10){
  ?>
      <a class="pg_more more_link" tab="subedu">더 보기</a>
  <?php  
    }
  ?>
  

  <!-- center 끝 -->
  </div>

<?php
  include_once("footer.php");
?>