<meta charset="UTF-8">
<?php
function getDB(){
    $db = new mysqli("localhost"
                ,"myeongsu"
                ,""
                ,"c9");

    $db->set_charset("utf8");
    return $db;
}

    $proce = $_GET["proce"];
    
if($proce == "login"){
    $id = $_GET["id"];
    $passwd = $_GET["passwd"];
    
    $db = getDB();
    $sql=<<<SQL
SELECT * FROM `Member` WHERE id = '{$id}' and passwd = '{$passwd}'
SQL;

    $rs = $db->query($sql);
    if($row = $rs->fetch_object()){
        $sql=<<<SQL
SELECT * FROM `Member` WHERE id = '{$id}' and passwd = '{$passwd}'
SQL;
    $rs = $db->query($sql); 
        if($row = $rs->fetch_object()){
            session_start();
                $_SESSION['name'] = $row->name;
                echo "<script>location.href='./index.php'</script>";
        }else{
            echo "<script>alert('비밀번호를 확인해주세요.');history.back()</script>";
        }
    }else{
        echo "<script>alert('아이디를 확인해주세요.');history.back()</script>";
    }
    
}



?>