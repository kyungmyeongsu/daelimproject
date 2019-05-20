<?php

require_once("./outlet.php");
$sc = $_REQUEST["sc"];
$sk = $_REQUEST["sk"];
$page = $_REQUEST["page"];
$pagepage = $_REQUEST["pagepage"];

if ($page == "") {
  $page = 0;
}
if ($pagepage == "") {
    $pagepage = 0;
}
 
 

if ($sc == "") {
    $listset = getList($page); 
}else{
    $listset = getSearchList($sc, $sk, $page);
}
     
?>

<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>대림미술관</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/sub3.css">
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
  <h2 class="pg_title01">문의내역</h2>
  <div class="pg_bar"></div>
  <p class="pg_title02">대림미술관에 문의하기</p>

  <!-- 문의하기 checkbox -->
  <div class="pg_down">
  <section class="pg_check_box">
    <div class="pg_check_box01">
      <input class="selecttotal" type="checkbox" name="totalselect"> 전체선택
    </div>

    <a class="garbage" href="#">&nbsp;&nbsp;&nbsp;&nbsp;삭제</a>
    <!--<a class="edit" href="#">&nbsp;&nbsp;&nbsp;&nbsp;수정</a>-->
  </section>

  <!-- 문의하기 선택 -->
  <section class="pg_down_box">
    <select name="searchcategory">
      <option value="1">전체</option>
      <option value="2">제목</option>
      <option value="3">내용</option>
    </select>

    <input type="text" name="searchkeyword" placeholder="검색어를 입력하세요.">

    <a class="pg_down_box_btn" name="searchbutton" href="javascript:doSearch()">조회</a>
  </section>
  </div>

  <!-- 문의하기 board title -->
  <section class="board_title">
    <span>선택</span>
    <span>번호</span>
    <span>제목</span>
    <span>상태</span>
    <span>작성일</span>
  </section>

  <!-- 문의하기 board content -->
  <?php 
      while($row=$listset->fetch_object()){
    ?>
  <section class="board_content">
      <span><input class="checkbox_sc" type="checkbox" name="sel" value="<?php echo $row->board; ?>"></span>
      <span><?php echo $row->board; ?></span>
      <p><a href="./list.php?board=<?php echo $row->board; ?>"><?php echo $row->title;  ?></a></p>
      <?php
        if ($row->category == 2) {
          echo '<span class="board_gray">응답 대기</span>';
        }else{
          echo '<span class="board_red">응답 완료</span>';
        }
      ?>
      <span class="board_date"><?php echo str_replace("-",".",substr($row->datetime,0,10));  ?></span>
    
  </section>
  <?php 
      }
    ?> 
    
    
    <script>
    
    var isallchecked = 0;
    
      $(document).ready(function(){
          $(".garbage").click(function(){
            var checkedboxs = "";
              for(k=0;k< $(".checkbox_sc").length;k++){
                if (   $(".checkbox_sc")[k].checked  == true)   {
              	checkedboxs += $(".checkbox_sc")[k].value + ",";
                }
              }
          console.log(checkedboxs);   
              $.ajax({url:"./outlet.php",
                      data:{"work":"delSelected",
                            "boards":checkedboxs
                        },
                      method:"post"}).done(function(){
                         location.href="?page=<?php echo $page; ?>";
                      });
          
          });
          
          $(".selecttotal").click(function(){
            if(isallchecked == 0){
              for(k=0;k< $(".checkbox_sc").length;k++){
              	$(".checkbox_sc")[k].checked = true;
              }
              isallchecked = 1;
            }else{
              for(k=0;k< $(".checkbox_sc").length;k++){
              	$(".checkbox_sc")[k].checked = false;
              }
              isallchecked = 0;
            }
             
          });
          
          
          
          
              
      });
      
    </script>

  

  <!-- 게시판 page number -->
  <section class="page_number">
    <ul>
      <?php 
                    $ppPrev = $pagepage - 1;
                    $ppPrevpage = $ppPrev * 5 ;    
                    
                    if ($ppPrev < 1) {
                      $ppPrev = 0;
                    }
                    if ($ppPrevpage < 1) {
                      $ppPrevpage = 0;
                    }
      ?>
      <li><a class="page_number_darrow01" href="?page=0&pagepage=0">처음으로</a></li>
      <li><a class="page_number_arrow01" href="?page=<?php echo $ppPrevpage;?>&pagepage=<?php echo $ppPrev;?>">이전</a></li>
      
      <?php 
                for($k=$pagepage*5+1; $k < getListPageCount(); $k++){
                    $m = $k-1;
$links .=<<<LINK
    <li><a class="page_num_bth" href="?page={$m}&pagepage={$pagepage}">{$k}</a></li> 
LINK;
                    if ($k > $pagepage * 5 + 4 ) {
                        break;
                    }
                }
                    echo $links;
                
                ?>
                
      <?php
                    $pagepage += 1;
                    $page = $pagepage * 5  -1;    
                    
                    if ($pagepage ==  intval(getListPageCount()/5) ) {
                      $pagepage  = intval(getListPageCount()/5)-1;
                    } 
      ?>
      
      <li><a class="page_number_arrow02" href="?page=<?php echo $page;?>&pagepage=<?php echo $pagepage;?>">다음</a></li>
      <?php
                    $endpagepage = intval(getListPageCount()/5);
                    $endpage = $endpagepage * 5 -1;   
      ?>
      <li><a class="page_number_darrow02" href="?page=<?php echo $endpage;?>&pagepage=<?php echo $endpagepage-1;?>">마지막으로</a></li>
    </ul>
    
    
  </section>
  

  <!-- center 끝 -->
  </div>

  <!-- 문의하기 바로가기 -->
  <section class="qna_direct">
    <div class="qna_direct_box">
      <span>문의하기 아이콘</span>
      <span>다른 문의사항이 있다면 1:1 문의하기를 이용해주세요.</span> 

      <a class="qna_direct_btn" href="./write.php">1:1 문의하기</a>
    </div>
  </section>

<?php
  include_once("footer.php");
?>