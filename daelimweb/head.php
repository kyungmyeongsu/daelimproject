<?php
session_start();
?>

<!-- 헤더 -->
  <header>
 	<div class="container head_a">
 		<div class="nav_box">
 		<div class="nav1">
 		  <?php 
 		    if(isset($_SESSION['id'])){
 		  ?>
 		  <a class="head_nav01" href="./logout.php">로그아웃</a>
 		  <a class="head_nav02" href="./sub3.php">마이페이지</a>
 		  <?php
 		    }else{
 		  ?>
 		  <a class="head_nav01" href="./login.php">로그인</a>
 			<a class="head_nav02" href="./login.php">마이페이지</a>
 		  <?php
 		    }
 		  ?>
 			
 			<a class="head_nav03" href="#">SNS</a>
 			<select name="language">
    			<option value="KR"><a href="#">KR</a></option>
    			<option value="EN"><a href="#">EN</a></option>
    			<option value="CH"><a href="#">CH</a></option>
    			<option value="JP"><a href="#">JP</a></option>
  			</select>
 		</div>
 		</div>
 		<h1><a id="logo" alt="로고" href="./main.php">로고</a></h1>

 		<nav id="mainmenu">
 			<ul>
 				<li class="nav_menu"><a href="#">미술관소개</a></li>
 				<li class="nav_menu"><a href="#">전시소개</a></li>
 				<li class="nav_menu"><a href="#">프로그램</a></li>
 				<li class="nav_menu"><a href="#">라이브러리</a></li>
 				<li class="nav_menu"><a href="#">새소식</a></li>
 				<li class="nav_menu"><a href="#">미술관주변</a></li>
 				<li class="nav_menu"><a href="#">검색</a></li>
 			</ul>
 			<nav id='submenus'>
 			  <div id="floatmenus">
 			  <img src="./images/nav_img01.png"></img>
 			  <div>
 			    <a href="#">미술관 비전/연혁</a>
 			    <a href="#">관람안내</a>
 			    <a href="#">시설소개</a>
 			    <a href="#">오시는 길</a>
 			    <a href="#">주차정보</a>
 			  </div>
 			  <div>
 			    <a href="#">현재전시</a>
 			    <a href="#">예정전시</a>
 			    <a href="#">지난전시</a>
 			  </div>
 			  <div>
 			    <a href="#">SundayLive & Class</a>
 			    <a href="#">Talk & Lecture</a>
 			    <a href="./sub1.php">교육프로그램</a>
 			    <a href="#">지역연계프로그램</a>
 			  </div>
 			  <div>
 			    <a href="#">큐레이터 이야기</a>
 			    <a href="#">작가들의 페이퍼</a>
 			  </div>
 			  <div>
 			    <a href="./sub2.php">이벤트</a>
 			    <a href="#">행사 이야기</a>
 			    <a href="#">캘린더</a>
 			    <a href="#">공지사항</a>
 			  </div>
 			  <div>
 			    <a href="#">미술관 STORE</a>
 			    <a href="#">미술관 주변관람</a>
 			  </div>
 			  </div>
 			</nav>
 		</nav>
 	</div>
  </header>