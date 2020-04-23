<?php
    echo '<pre>';
    // 创建DB连接
    // php操作数据库第一步
    $con = mysqli_connect('localhost','root','','lixdb');
    // var_dump($con);
    if($con){
        // 连接成功
        
        // 连接成功后添加复制设置，避免出现乱码问题
        mysqli_query($con,"set names utf8"); 
        mysqli_query($con,"set character_set_client=utf8");  
        mysqli_query($con,"set character_set_results=utf8");

        // 创建查询sql语句
        $sql = "select * from userinfo where 1";
        // 让db连接，执行sql语句，并获得执行结果
        $result = $con->query($sql);
        // print_r($result);
        if($result->num_rows > 0){
            $info = [];
            // 通过fetch_assoc()，变量方法，获取$result中的每一条数据
            for($i=0;$row = $result->fetch_assoc();$i++){
                $info[$i] = $row;
            }
            // $info就是所有数据的集合的数组
            print_r($info);
            echo $info[0]['username'];
        }
    }else{
        // 连接失败
        echo '连接失败！';
    }
?>