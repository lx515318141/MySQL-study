<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $success = array('msg'=>'ok');
    $con = mysqli_connect('localhost','root','','lixdb');
    if($con){
        mysqli_query($con,'set names utf8');
        mysqli_query($con,'set character_set_client=utf8');
        mysqli_query($con,'set character_set_results=utf8');
        
        $sql = "select * from userinfo where 1";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            $info=[];
            for($i=0;$row=$result->fetch_assoc();$i++){
                $info[$i] = $row;
            }
            $flage = 0;
            for($j=0;$j<count($info);$j++){
                if($info[$j]['username'] === $username){
                    if($info[$j]['password'] === $password){
                        $success['infoCode'] = 200;
                        $flage = 1;
                        break;
                    }
                }
            }
            if($flage === 0){
                $success['infoCode'] = 401;
            }
        }else{
            $success['infoCode'] = 400;
        }
    }else{
        $success['infoCode'] = 400;
    }
    echo json_encode($success);
?>