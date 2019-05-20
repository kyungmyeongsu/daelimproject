<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>대림미술관</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/sub4.css">
  <link rel="shortcut icon" href="./images/favicon.ico" />
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
 </head>
 <body>
  <!-- 로고 -->
  <div class="logo_box">
   <h1><a class="logo_application" alt="로고" href="./main.php">로고</a></h1>
  </div>

  <!-- 교육 프로그램 참여 신청 타이틀 -->
  <div class="application_title_box">
    <h2>교육프로그램 참여 신청</h2>
    <p>미술관과 친해지는 행복한 첫걸음</p>
  </div>


 <!-- table -->
 <section class="application_center">
  <table border="1" summary="프로그램 신청서">
   <thead>
    <tr>
     <td class="table_text01" colspan="2">개&nbsp;&nbsp;&nbsp;인<span>(10인 미만)</span></td>
     <td class="table_text02" colspan="2">단&nbsp;&nbsp;&nbsp;체<span>(10인 이상)</span></td>
    </tr>
   </thead>
   <tbody>
    <colgroup>
      <col style="background: #f4f4f4;">
      <col>
      <col style="background: #f4f4f4;">
    </colgroup>
     <tr>
       <td>프로그램 제목</td>
       <td colspan="3"># 이 . 상 . 한 . 집 (이야기를 상상하는 집)</td>
     </tr>
     <tr>
       <td>교육 구분</td>
       <td>해피 칠드런</td>
       <td>전시관</td>
       <td>대림미술관</td>
     </tr>
     <tr>
       <td>연계 전시명</td>
       <td colspan="3">The Selby House : #즐거운_나의_집</td>
     </tr>
     <tr>
       <td>참여일자</td>
       <td>
        <select class="sub4_input01">
          <option>날짜 선택</option>
          <option>2017.10.15</option>
          <option>2017.10.22</option>
          <option>2017.10.29</option>
          <option>2017.11.05</option>
        </select>
       </td>
       <td>참여시간</td>
       <td>
         <select class="sub4_input01">
          <option>시간 선택</option>
          <option>11:00</option>
          <option>13:00</option>
          <option>15:00</option>
          <option>17:00</option>
         </select>
       </td>
     </tr>
     <tr>
       <td>보호자 명</td>
       <td><input class="sub4_input01" type="text" name=""></td>
       <td>인 원</td>
       <td><input class="sub4_input01" type="text" name=""></td>
     </tr>
     <tr>
       <td>보호자 전화번호</td>
       <td class="sub4_phone" colspan="3"><input class="sub4_phone_box01" type="text" name="phone1"> - <input class="sub4_phone_box01" type="text" name="phone2"> - <input class="sub4_phone_box01" type="text" name="phone3"></td>
     </tr>
     <tr>
       <td>보호자 이메일</td>
       <td class="sub4_phone" colspan="3"><input class="sub4_phone_box01" type="text" name="email1"> @ <input class="sub4_phone_box01" type="text" name="email02"> 
        <select class="sub4_phone_box01">
          <option>직접입력</option>
          <option>네이버</option>
          <option>다음</option>
          <option>구글</option>
        </select>
       </td>
     </tr>
     <tr>
       <td>참여 아동 명</td>
       <td><input class="sub4_input01" type="text" name=""></td>
       <td>참여 아동 나이</td>
       <td><input class="sub4_input01" type="text" name=""></td>
     </tr>
     <tr>
       <td>기타 요구사항</td>
       <td colspan="3"><textarea class="sub4_etc"></textarea></td>
     </tr>
   </tbody>
  </table>
 </section>

 <!-- 개인정보 수집 동의 -->
 <section class="personal_data">
  <p><input class="application_check" type="checkbox" name="agree">&nbsp;&nbsp;개인정보 수집에 동의 합니다.</p>
  <p>- 이용 수집 목적 : 교육신청 및 신청자 확인 등 업무 수행 및 설문조사</p>
  <p>- 수집항목 : 성명, 생년월일, 이메일, 전화번호 주소</p>
  <p>- 보유 및 이용기간 : 교육기간 및 통계활용 후 파기(2년 보유)</p>
  <p>- 개인정보 제공 및 수집 동의 거부권리 : 교육신청과 관련하여 상기 개인정보 수집에 동의하지 않으실 수 있습니다.<br>&nbsp;&nbsp;동의 거부시 정상적으로 교육 신청할 수 없음을 알려드립니다.</p>
 </section>

 <!-- 주의사항 -->
 <section class="application_footer">
  <div class="caution_box">
   <p>주 의 사 항</p>
   <p>신청확인 및 취소는 MY PAGE에서 확인하실 수 있습니다.</p>
   <p>프로그램 담당자의 활약 메일 또는 전화를 받으신 후 참여가 확정 됩니다.</p>
   <p>문의사항은 070-4457-1027로 문의하시기 바랍니다.</p>
  </div>
 </section>

 <!-- 프로그램 신청서 버튼 -->
 <section class="application_btn">
   <a class="col-6" onClick="self.close();">취소</a>
   <a class="col-6">신청하기</a>
 </section>

 </body>
</html>





