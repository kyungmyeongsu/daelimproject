<?php

require_once("./outlet.php");

$board = $_GET["board"];
 
$view = getView($board);

$row = $view->fetch_object();

?>

<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>대림미술관</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/sub3.css">
  <link rel="stylesheet" type="text/css" href="css/write.css">
  <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="./js/main.js"></script>
  <link rel="shortcut icon" href="./images/favicon.ico" />
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
 </head>
 <body>
<?php
  include_once("head.php");
?>

 	<!-- 문의하기 타이틀 -->
  <section id="big_title_box">
    <h2>문의하기</h2>
    <p>미술관이 개선할 내용과 궁금한 내용을 문의해주세요</p>
  </section>

  <!-- 내비게이션 -->
  <section id="navigation">
    <ul class="navigation01">
        <li><a class="navigation_icon01" href="./main.php">home</a></li>
        <li><a class="navigation_icon02" href="#">마이페이지</a>
          <ul>
            <li><a href="#">마이페이지</a></li>
            <li><a href="#">SNS</a></li>
          </ul>
        </li>
        <li><a class="navigation_icon03" href="#">문의하기</a>
          <ul>
            <li><a href="#">내정보 변경</a></li>
            <li><a href="#">멤버십</a></li>
            <li><a href="#">쿠폰</a></li>
            <li><a href="#">메시지</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="./sub3.php">문의하기</a></li>
          </ul>
        </li>
    </ul>
  </section>

  <!-- center 시작 -->
  <div id="container_center">

  <!-- 문의하기 content 타이틀 -->
  <h2 class="pg_title01">1:1 문의하기</h2>
  <div class="pg_bar"></div>
  <p class="pg_title02">대림미술관에 궁금하신 내용을 답변해드립니다</p>
  
  
  <!-- 문의하기 쓰기 -->
  <section id="qna_write">
          <div class="qna_write01">
              <input type="hidden" name="board" value="<?php echo $board; ?>">
                <p class="qna_write_text01">제목</p>
                <div class="qna_write_box01">
                    <input type="text" name="title" value="<?php echo $row->title; ?>"/>
                </div>
          </div>
          <div class="qna_write02">
                <p class="qna_write_text02">내용</p>
                <div class="qna_write_box02">
                    <textarea name="contents"><?php echo $row->contents; ?></textarea>
                </div>
          </div>
          
          <div class="modifybtn_box">
              <a class="modifybtn" href="javascript:edit()">확인</a>
          </div>
      
  </section>

  <!-- center 끝 -->
  </div>

  

<?php
  include_once("footer.php");
?>