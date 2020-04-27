# MySQL

## 大纲

1.MySQL数据库简介  
2.MySQL数据库的可视化工具  
3.可视化工具的【增删改查】操作  
4.php连接数据库与基本操作配置  
5.php操作数据库【增删改查】操作  
6.html与php+MySQL完成前后端交互  
7.登录案例  

## 1.MySQL数据库简介

MySQL是一种开放源代码的关系型数据库系统(RDBMS)，使用最常用的数据库管理语言--结构化查询语言(SQL)进行数据库管理。  
MySQL是开发源代码的，因此任何人都可以在General Public License的许可下下载并根据个性化的需要对其进行修改。  
MySQL因为其速度、可靠性和适应性而备受关注。大多数人都认为在不需要事务化处理的情况下，MySQL是管理内容最好的选择。  
时至今日MySQL和php的结合绝对是完美。很对大行动网站也用到MySQL数据库。MySQL的发展情景是非常光明的！

## 2.MySQL数据库的可视化工具

(1)phpmyadmin  
(2)Navicat for MySQL  

## 3.可视化工具的【增删改查】操作

(1)phpmyadmin:  
    http://127.0.0.1:8088/phpmyadmin  
或者  
    http://localhost:8088/phpmyadmin  
(2)Navicat for MySQL:  
    下载、安装、破解、链接  

ps：需要说明一点就是无论是phpmyadmin也好还是Navicat for MySQL也好，两者都仅是一个对于数据库操作和管理的工具，他们并不是数据库本身。

## 4.php连接数据库与基本操作配置

(1)php创建数据库【连接】  
语法：Object mysqli_connect("域名","DB账号","DB密码","DB库名")  
例子：$con = mysqli_connect("localhost","root","","lixdb");  

(2)向DB中插入数据时包含中文出现乱码的解决方案  
语法：mysqli_qurey($con,"set names utf8");  
说明：设置成功会返回1，根据实际情况并不一定必须保存返回结果。  

(3)设置client端和server端保持字符编码一致  
语法：mysqli_query($con,"set character_set_client=utf8");  
      mysqli_query($con,"set character_set_results=utf8");  

(4)执行sql语言  
语法：$结果 = $DB连接->query(sql语句);  
例子：var_dump($result = $con->query($sql))  

## 5.php操作数据库【增删改查】操作

操作数据库的基本步骤大多相同，只不过是sql语句结构的区别。不同的sql语句能够完成不同的功能，因此学习如何操作数据库实际上就是在学习如何编写sql语句。  

(1)使用sql语句基本【模板】  
(2)sql查询语句  
(3)sql插入语句  
(4)sql修改语句  
(5)sql删除语句  

### (1).使用sql语句基本【模板】

提供模板并不是说以后我们操作数据库就都采用这种结构，而是对于初学者而言我们在没有接触过数据库的情况下，这样的模式能够帮助我们快速上手从php中操作mysql数据库。  

a.建立连接  
b.判断是否连接  
c.设置编码  
d.创建sql语句  
e.执行sql语句，并获得结果  
f.判断结果条数    
g.拼凑结果  
h.json化返回  

### (2).sql查询语句

描述：表示去数据库中指定的表内根据条件查询指定的内容  
语法：$sql = "select 【信息】 from 【哪张表】 where 【查询条件】";  
说明：  
a.【信息】有两种写法：  
    一是写*星号，代表查询所有字段对应的信息  
        $sql = "select * from friendslist where 1";  
    二是写指定字段，代表查询某个字段对应信息，如果有多个则用逗号隔开  
        $sql = "select friendsName from friendslist where 1";  
b.【哪张表】就是直接写出对应表的名字即可  
c.【查询条件】有两种写法：  
    一是无条件查询，那么直接写1即可。  
        $sql = "select * from friendslist where 1";  
    二是有条件查询，在后面下厨额外的查询条件。如果有多个用and或or连接  
        $sql = "select * from friendslist where friendsSex='female'";  
        $sql = "select * from friendslist where friendsSex='female' and friendsAge=21";  
        $sql = "select * from friendslist where friendsSex='male' or friendAge=18";  

### (3).sql插入语句

语法：$sql = "insert into 表名(字段1，字段2，...) values('值1'，'值2'，...)";  
      $sql = "insert into 表名 values(值1，值2，...)";  

### (4).sql修改语句

语法：$sql = "update 表名 set 字段1='新值1'，...where id=$id",...;  
注意：修改的关键词是update，而不是updata！！  
      where后面的条件可以和修改的内容相同。  

### (5).sql删除语句

语法：$sql = 'delete from 表名 where 条件';  
说明：根据指明的条件删除对应数据  

## 6.html与php+MySQL完成全后端交互

