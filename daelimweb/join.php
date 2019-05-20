<?php
require_once("./outlet.php");

?>

<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>대림미술관</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/join.css">
  <link rel="shortcut icon" href="./images/favicon.ico" />
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
 </head>
 <body>
<?php
  include_once("head.php");
?>

    <!-- 회원가입 -->
    <section id="join_content">
        <div class="join_title">
            <h1>회원가입</h1>
            <p>대림미술관의 서비스를 위해 정확한 정보를 입력해주셔야 합니다.</p>
        </div>
        
        <p class="join_title01">기본정보 입력</p>
        
        <form action="outlet.php" method="POST">
            <input type="hidden" name="proce" value="join"/>
            <div class="join_box01">
                    <div class="join_table">
                        <div class="join_table_title">
                            <p>아이디</p>
                        </div>
                        <div class="join_input_box">
                            <input class="input_box01" type="text" name="id"/>
                        </div>
                    </div>
                    
                    <div class="join_table">
                        <div class="join_table_title">
                            <p>비밀번호</p>
                        </div>
                        <div class="join_input_box">
                            <input class="input_box01" type="password" name="passwd"/>
                        </div>
                    </div>
                    
                    <div class="join_table">
                        <div class="join_table_title">
                            <p>이 름</p>
                        </div>
                        <div class="join_input_box">
                            <input class="input_box01" type="text" name="name"/>
                        </div>
                    </div>
                    
                    <div class="join_table">
                        <div class="join_table_title">
                            <p>핸드폰 번호</p>
                        </div>
                        <div class="join_input_box">
                            <input type="text" name="tel1" maxlength="3"/> - <input type="text" name="tel2" maxlength="4"/> - <input type="text" name="tel3" maxlength="4"/>
                        </div>
                    </div>
                    
                    <div class="join_table">
                        <div class="join_table_title">
                            <p>주 소</p>
                        </div>
                        <div class="join_input_box">
                            <input class="input_box02" type="text" name="addr"/>
                        </div>
                    </div>
            </div>
            <input class="join_btn" type="submit" value="확인"/>
        </form>
        
    </section>


<?php
  include_once("footer.php");
?>