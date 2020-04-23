<?php
    echo '<pre>';
    $con = mysqli_connect('localhost','root','','lixdb');
    if($con){
        mysqli_query($con,'set names utf8');
        mysqli_query($con,'set character_set_client=utf8');
        mysqli_query($con,'set character_set_result=utf8');

        // sql插入语句
        // $sql = "insert into userinfo(username,password) values('xiaoming','666666')";
        // $sql = "insert into userinfo values('xiaohong','555555')";
        // $sql = "insert into userinfo(username) values('xiaogang')";

        // sql修改语句
        // $sql = "update userinfo set password='000000' where username='lix'";

        // sql删除语句
        $sql = "delete from userinfo where username='xiaogang'";

        $result = $con->query($sql);
        var_dump($result);
    }else{
        echo '连接失败！';
    }
?>