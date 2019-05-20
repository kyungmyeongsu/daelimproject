<meta charset="UTF-8">
<?php
 
function getDB(){
    $db = new mysqli("localhost"
                ,"Username"
                ,"password"
                ,"c9");

    $db->set_charset("utf8");
    return $db;
}


function getList($page){
    $page = $page * 10;
    $db = getDB();
    $sql=<<<SQL
  SELECT  `board` ,  `title` ,  `contents` ,  `category` ,  `datetime`
 FROM  `Board` 
 order by `Board` DESC
 LIMIT {$page}, 10
SQL;

    $rs = $db->query($sql); 
    return $rs; 
}

function getSearchList($searchcategory=1, $keyword, $page){
    $sql = "";
    if ($searchcategory == 1) {
        $sql=<<<SQL
        SELECT * 
FROM  `Board` 
WHERE  `title` LIKE  '%{$keyword}%'
or  `contents` LIKE  '%{$keyword}%'
order by `Board` DESC
LIMIT {$page}, 10
SQL;
    }
    if ($searchcategory == 2) {
        $sql=<<<SQL
        SELECT * 
FROM  `Board` 
WHERE  `title` LIKE  '%{$keyword}%'
order by `Board` DESC
LIMIT {$page}, 10
SQL;
    }
    if ($searchcategory == 3) {
        $sql=<<<SQL
        SELECT * 
FROM  `Board` 
WHERE  `contents` LIKE  '%{$keyword}%'
order by `Board` DESC
LIMIT {$page}, 10
SQL;
    }
    
    
    $db = getDB();
     $rs = $db->query($sql); 
    return $rs; 
    
}

function getView($board){
    $db = getDB();
    $sql=<<<SQL
SELECT  `board` ,  `title` ,  `contents` ,  `category` ,  `datetime`
FROM  `Board` 
WHERE board = {$board}
SQL;

    $rs = $db->query($sql); 
    return $rs;
}

function delSelected($boards){
    $db = getDB();
    $boards .= "0";
    $sql=<<<SQL
Delete FROM  `Board`
WHERE board  in ({$boards})
SQL;

    $rs = $db->query($sql); 
    return $rs;
}

if ($_REQUEST["work"] == "del") {
        del($_REQUEST["board"]);
    }

function del($board){
    $db = getDB();
    $sql=<<<SQL
Delete FROM  `Board`
WHERE board = {$board}
SQL;

    $rs = $db->query($sql);
    return $rs;
    
}


    if ($_REQUEST["work"] == "edit") {
        editBoard();
    }
    
    if ($_REQUEST["work"] == "delSelected") {
        delSelected($_REQUEST["boards"]);
    }
     
    

function editBoard(){
  $title =    $_REQUEST["title"];
  $contents = $_REQUEST["contents"];
  $board = $_REQUEST["board"];
        
         $db = getDB();
    $sql=<<<SQL
UPDATE `Board` SET `title` = '{$title}',
`contents` =  '{$contents}' WHERE `board` ={$board};
SQL;
    $rs = $db->query($sql);
    echo "OK";
}

function getListPageCount(){
    $db = getDB();
    $sql=<<<SQL
 SELECT CEIL( COUNT( * ) / 10 ) AS  `count` 
FROM Board
SQL;
    return $db->query($sql)->fetch_object()->count; 
}



if ($_REQUEST["work"] == "mainListMore") {
    switch ($_REQUEST["listname"]) {
        case 'sundaylive':
            $rs = getSundayList( $_REQUEST["start"], $_REQUEST["count"]);
        while($row=$rs->fetch_object()):
        $result .=<<<HTML
        <div class="col-3 pg1">
 						<a href="#" class="pg2">
 							<img src="./images/education/con_img{$row->num}.jpg" width="100%"></img>
 							<div class="pg3">
 								<p>{$row->title}</p>
                                <p>{$row->contents}</p>
 								<div class="con_bar"></div>
 								<span>자세히보기&nbsp;&nbsp;&nbsp;</span>
 							</div>
 						</a>
 		</div>
HTML;
        endwhile;
        echo $result;
            break;
            
        case 'talk':
            $as = gettalkList( $_REQUEST["start"], $_REQUEST["count"]);
        while($row=$as->fetch_object()):
        $result .=<<<HTML
        <div class="col-3 pg1">
 						<a href="./sub1-1.php" class="pg2">
 							<img src="./images/talklecture/tl_img{$row->num}.jpg" width="100%"></img>
 							<div class="pg3">
 								<p>{$row->title}</p>
                                <p>{$row->contents}</p>
 								<div class="con_bar"></div>
 								<span>자세히보기&nbsp;&nbsp;&nbsp;</span>
 							</div>
 						</a>
 		</div>
HTML;
        endwhile;
        echo $result;
            break;
            
        case 'education':
            $as = geteducationList( $_REQUEST["start"], $_REQUEST["count"]);
        while($row=$as->fetch_object()):
        $result .=<<<HTML
        <div class="col-3 pg1">
 						<a href="./sub1-1.php" class="pg2">
 							<img src="./images/program/pg_img{$row->num}.jpg" width="100%"></img>
 							<div class="pg3">
 								<p>{$row->title}</p>
                                <p>{$row->contents}</p>
 								<div class="con_bar"></div>
 								<span>자세히보기&nbsp;&nbsp;&nbsp;</span>
 							</div>
 						</a>
 		</div>
HTML;
        endwhile;
        echo $result;
            break;
            
        case 'subedu':
            $rs = geteducationList( $_REQUEST["start"], $_REQUEST["count"]);
        while($row=$rs->fetch_object()):
        $result .=<<<HTML
 		<div class="col-3 pg_padding">
            <a href="./sub1-1.php" class="pg_inner">
              <img src="./images/program/pg_img{$row->num}.jpg" width="100%"></img>
              <p>{$row->title}</p>
              <p>{$row->contents}</p>
              <p>{$row->date}</p>
            </a>
        </div>
HTML;
        endwhile;
        echo $result;
            break;
            
        case 'event':
            $rs = geteventList( $_REQUEST["start"], $_REQUEST["count"]);
        while($row=$rs->fetch_object()):
        $result .=<<<HTML
        <div class="col-6 pg_padding">
            <a href="#" class="pg_inner">
              <img src="./images/event/ev_img{$row->num}.jpg" width="100%"></img>
              <p>{$row->title}</p>
              <p>{$row->contents}</p>
            </a>
        </div>
HTML;
        endwhile;
        echo $result;
            break;
        
        default:
            // code...
            break;
    }
}


function getSundayList($start, $count){
    
    $db = getDB();
    $sql=<<<SQL
  SELECT  `num` ,  `title` ,  `contents` ,  `date` ,  `category`  
 FROM  `Sundaylive`
 limit {$start}, {$count}
SQL;

    $rs = $db->query($sql); 
    return $rs; 
}

function geteducationList($start, $count, $category=10){
    
    $db = getDB();
    $sqlwhere = $category == 10 ? " ": " Where `category` = " . $category;
    
    $sql=<<<SQL
  SELECT  `num` ,  `title` ,  `contents` ,  `date` ,  `category`  
 FROM  `education`
  {$sqlwhere}
 limit {$start}, {$count}
SQL;

    $rs = $db->query($sql); 
    return $rs; 
}

function gettalkList($start, $count){
    
    $db = getDB();
    $sql=<<<SQL
  SELECT  `num` ,  `title` ,  `contents` ,  `date` ,  `category`  
 FROM  `Talk`
 limit {$start}, {$count}
SQL;

    $rs = $db->query($sql); 
    return $rs; 
}

function getlocalList($start, $count){
    
    $db = getDB();
    $sql=<<<SQL
  SELECT  `num` ,  `title` ,  `contents` ,  `date` ,  `category`  
 FROM  `localprogram`
 limit {$start}, {$count}
SQL;

    $rs = $db->query($sql); 
    return $rs; 
}

function getmaineventList(){
    
    $db = getDB();
    $sql=<<<SQL
  SELECT  `num` ,  `title` ,  `contents` ,  `date`
 FROM  `Mainevent`
SQL;

    $rs = $db->query($sql); 
    return $rs; 
}


function geteventList($start, $count, $category=10){
    
    $db = getDB();
    $sqlwhere = $category == 10 ? " ": " Where `category` = " . $category;
    
    $sql=<<<SQL
  SELECT  `num` ,  `title` ,  `contents` ,  `category`
 FROM  `event`
 {$sqlwhere}
 limit {$start}, {$count}
SQL;

    $rs = $db->query($sql); 
    return $rs; 
}


$proce = $_POST["proce"];

if($proce == "write"){
    $title =    $_POST["title"];
    $contents = $_POST["contents"];
    $category = "2";
    $date = date('Y-m-d H:i:s');
    
    $db = getDB();
    $sql=<<<SQL
INSERT INTO `Board`(`board`, `title`, `contents`, `category`, `datetime`) 
VALUES (null,'{$title}','{$contents}','{$category}','{$date}')
SQL;

    $rs = $db->query($sql);
    echo "<script>location.href='./sub3.php'</script>";
}

if($proce == "join"){
    $date = date('Y-m-d H:i:s');
    $id = $_POST["id"];
    $passwd = $_POST["passwd"];
    $name = $_POST["name"];
    $tel1 = $_POST["tel1"];
    $tel2 = $_POST["tel2"];
    $tel3 = $_POST["tel3"];
    $addr = $_POST["addr"];
    $tel = $tel1.'-'.$tel2.'-'.$tel3;
    
    $db = getDB();
    $sql=<<<SQL
INSERT INTO `Member`(`num`, `id`, `passwd`, `name`, `tel`, `addr`, `datetime`) 
VALUES (null,'{$id}','{$passwd}','{$name}','{$tel}','{$addr}','{$date}')
SQL;

    $rs = $db->query($sql);
    echo "<script>location.href='./main.php'</script>";
}

$proo = $_POST["proce"];

if($proo == "login"){
    $id = $_POST["id"];
    $passwd = $_POST["passwd"];
    
    $db = getDB();
    $sql=<<<SQL
SELECT * FROM `Member` WHERE id = '{$id}'
SQL;
    $rs = $db->query($sql); 
    if($row = $rs->fetch_object()){
        $sql=<<<SQL
SELECT * FROM `Member` WHERE id = '{$id}' and passwd = '{$passwd}'
SQL;
    $rs = $db->query($sql); 
        if($row = $rs->fetch_object()){
            session_start();
                $_SESSION['id'] = $row->id;
                echo "<script>location.href='./main.php'</script>";
        }else{
            echo "<script>alert('비밀번호를 확인해주세요.');history.back()</script>";
        }
    }else{
        echo "<script>alert('아이디를 확인해주세요.');history.back()</script>";
    }

    // $rs = $db->query($sql);
    // $row = $rs->fetch_array(MYSQLI_ASSOC);
    
    // if(($row[id] == $id) && ($row[id] != "")){
    //     if(($row[passwd] == $passwd) && ($row[passwd] != "")){
    //         session_start();
    //         $_SESSION['id'] = $row[id];
    //         echo "<script>location.href='./main.php'</script>";
    //     }else{
    //         echo "<script>alert('비밀번호를 확인해주세요.');history.back()</script>";
    //     }
    // }else{
    //     echo "<script>alert('아이디를 확인해주세요.');history.back()</script>";
    // }
    
}

?>
