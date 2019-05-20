<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>대림미술관</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="shortcut icon" href="./images/favicon.ico" />
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
 </head>
 <body>
<?php
  include_once("head.php");
?>

    <!-- 로그인 -->
 	<section id="login_content">
 	    <div class="login_title">
 	        <h1>로그인</h1>
 	        <p>대림미술관에 오신것을 환영합니다.</p>
 	    </div>
 	    
 	    <div class="login_box">
 	        <img src="./images/login_img.png"></img>
 	        <div class="login_aside">
     	        <form class="login_form" action="./outlet.php" method="POST">
     	            <input type="hidden" name="proce" value="login"/>
     	            <input type="text" name="id" placeholder="아이디를 입력하세요."/>
     	            <input type="password" name="passwd" placeholder="비밀번호를 입력하세요."/>
     	            <div class="login_autologin">
     	                <input type="checkbox" name="autologin"/>
     	                <p>아이디 저장하기(개인정보 보호를 위해 개인 PC에서 이용하세요)</p>
     	            </div>
     	            <input type="submit" value="로그인"/>
     	        </form>
     	        <div class="login_etc">
         	        <a href="./join.php">회원가입</a>
         	        <a href="#">아이디 찾기</a>
         	        <a href="#">비밀번호 찾기</a>
     	        </div>
 	        </div>
 	    </div>
 	</section>


<?php
  include_once("footer.php");
?>