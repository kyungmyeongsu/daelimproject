<?php
  require_once("./outlet.php");
  $category = isset($_REQUEST["category"]) ? $_REQUEST["category"] : 10;
  
    $eventlistset = geteventList(0,8, $category);
?>

<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>대림미술관</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/sub2.css">
  <link rel="shortcut icon" href="./images/favicon.ico" />
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/main.js"></script>
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
 </head>
 <body>
<?php
  include_once("head.php");
?>

 	<!-- 이벤트 타이틀 -->
  <section id="big_title_box">
    <h2>이벤트</h2>
    <p>이벤트에 참여하시면 다양한 혜택을 드립니다</p>
  </section>

  <!-- 내비게이션 -->
  <section id="navigation">
    <ul class="navigation01">
        <li><a class="navigation_icon01" href="./main.php">home</a></li>
        <li><a class="navigation_icon02" href="#">새소식</a>
          <ul>
            <li><a href="#">미술관소개</a></li>
            <li><a href="#">전시소개</a></li>
            <li><a href="./sub1.php">프로그램</a></li>
            <li><a href="#">라이브러리</a></li>
            <li><a href="./sub2.php">새소식</a></li>
            <li><a href="#">미술관주변</a></li>
          </ul>
        </li>
        <li><a class="navigation_icon03" href="#">이벤트</a>
          <ul>
            <li><a href="./sub2.php">이벤트</a></li>
            <li><a href="#">행사 이야기</a></li>
            <li><a href="#">캘린더</a></li>
            <li><a href="#">공지사항</a></li>
          </ul>
        </li>
    </ul>
  </section>

  <!-- center 시작 -->
  <div id="container_center" class="event_padd">

  <!-- 이벤트 content 타이틀 -->
  <h2 class="pg_title01">이벤트</h2>
  <div class="pg_bar"></div>
  <p class="pg_title02">대림미술관의 이벤트를 확인하세요</p>

  <!-- 이벤트 선택 -->
  <div class="pg_down">
  <section class="pg_down_box">
    <select name="programlist">
      <option value="10">전체</option>
      <option value="0">진행중인 이벤트</option>
      <option value="1">종료된 이벤트</option>
    </select>

    <button type="submit" id="changeCategory">조회</button>
  </section>
  </div>
        
  <!-- 이벤트 리스트 -->
  <section class="pg_list">
    <div class="event_row">
      <?php
        while($row=$eventlistset->fetch_object()){
      ?>
      <div class="col-6 pg_padding">
        <a href="#" class="pg_inner">
          <img src="./images/event/ev_img<?php echo $row->num; ?>.jpg" width="100%"></img>
          <p><?php echo $row->title;  ?></p>
          <p><?php echo $row->contents;  ?></p>
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
      <a class="pg_more more_link" tab="event">더 보기</a>
  <?php  
    }
  ?>

  <!-- center 끝 -->
  </div>

<?php
  include_once("footer.php");
?>