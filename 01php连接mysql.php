<?php
    echo '<pre>';
    // 创建DB连接
    // php操作数据库第一步
    $con = mysqli_connect('localhost','root','','lixdb');
    var_dump($con);
    if($con){
        // 连接成功
        
        // 连接成功后添加复制设置，避免出现乱码问题
        mysql_qurey($con,"set names utf8"); 
        mysql_query($con,"set character_set_client=utf8");  
        mysql_query($con,"set character_set_results=utf8");

        // 创建sql语句
        $sql = '这是要执行的sql';
        // 让db连接，执行sql语句，并获得执行结果
        $result = $con->query($sql);

    }else{
        // 连接失败
        echo '连接失败！';
    }
?>