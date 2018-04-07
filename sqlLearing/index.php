<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test SQL</title>
</head>
<body>
<?php
// 链接数据库
$dbhost = $_ENV['MYSQL_HOST'] . ":" . $_ENV['MYSQL_PORT'];  // mysql服务器主机地址
$dbuser = $_ENV['MYSQL_USERNAME'];            // mysql用户名
$dbpass = $_ENV['MYSQL_PASSWORD'];          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
echo '数据库连接成功！<br />';




// 创建一个叫做ARTICLES的数据库
// $sql = 'CREATE DATABASE ARTICLES';
// $retval = mysqli_query($conn,$sql);
// if(! $retval )
// {
//     die('创建数据库失败: ' . mysqli_error($conn));
// }
// echo "数据库 ARTICLES 创建成功<br />";




// 删除叫做ARTICLES的数据库
// $sql = 'DROP DATABASE ARTICLES';
// $retval = mysqli_query( $conn, $sql );
// if(! $retval )
// {
//     die('删除数据库失败: ' . mysqli_error($conn));
// }
// echo "数据库 ARTICLES 删除成功<br />";




// 选择数据库进行操作，下面的$_ENV['MYSQL_DBNAME']是数据库名
mysqli_select_db($conn, $_ENV['MYSQL_DBNAME']);
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");




// 创建数据表
// $sql = "CREATE TABLE testtable_tbl( ".
//         "testtable_id INT NOT NULL AUTO_INCREMENT, ".
//         "testtable_title VARCHAR(100) NOT NULL, ".
//         "testtable_author VARCHAR(40) NOT NULL, ".
//         "submission_date DATE, ".
//         "PRIMARY KEY ( testtable_id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";
// $retval = mysqli_query( $conn, $sql );
// if(! $retval )
// {
//     die('数据表创建失败: ' . mysqli_error($conn));
// }
// echo "数据表创建成功<br />";




// 删除数据表
// $sql = "DROP TABLE testtable_tbl";
// $retval = mysqli_query( $conn, $sql );
// if(! $retval )
// {
//   die('数据表删除失败: ' . mysqli_error($conn));
// }
// echo "数据表删除成功<br />";




// 添加数据
// $testtable_title = '学习';
// $testtable_author = 'FH';
// $submission_date = '2016-03-06';
// $sql = "INSERT INTO testtable_tbl ".
//         "(testtable_title, testtable_author, submission_date) ".
//         "VALUES ".
//         "('$testtable_title','$testtable_author','$submission_date')";
// $retval = mysqli_query( $conn, $sql );
// if(! $retval )
// {
//   die('无法插入数据: ' . mysqli_error($conn));
// }
// echo "数据插入成功<br />";




// 数据查询
// $sql = 'SELECT testtable_id, testtable_title, 
//         testtable_author, submission_date
//         FROM testtable_tbl';
// $retval = mysqli_query( $conn, $sql );
// if(! $retval )
// {
//     die('无法读取数据: ' . mysqli_error($conn));
// }
// echo '<h2>mysqli_fetch_array 测试<h2>';
// echo '<table border="1"><tr><td>ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
// while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
// {
//     echo "<tr><td> {$row['testtable_id']}</td> ".
//          "<td>{$row['testtable_title']} </td> ".
//          "<td>{$row['testtable_author']} </td> ".
//          "<td>{$row['submission_date']} </td> ".
//          "</tr>";
// }
// echo '</table>';

// $sql = 'SELECT testtable_id, testtable_title, 
//         testtable_author, submission_date
//         FROM testtable_tbl';
// $retval = mysqli_query( $conn, $sql );
// if(! $retval )
// {
//     die('无法读取数据: ' . mysqli_error($conn));
// }
// echo '<h2>mysqli_fetch_assoc 测试<h2>';
// echo '<table border="1"><tr><td>ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
// while($row = mysqli_fetch_assoc($retval))
// {
//     echo "<tr><td> {$row['testtable_id']}</td> ".
//          "<td>{$row['testtable_title']} </td> ".
//          "<td>{$row['testtable_author']} </td> ".
//          "<td>{$row['submission_date']} </td> ".
//          "</tr>";
// }
// echo '</table>';

// 使用常量 MYSQLI_NUM 作为 PHP mysqli_fetch_array() 函数的第二个参数，返回数字数组
// $sql = 'SELECT testtable_id, testtable_title, 
//         testtable_author, submission_date
//         FROM testtable_tbl';
// $retval = mysqli_query( $conn, $sql );
// if(! $retval )
// {
//     die('无法读取数据: ' . mysqli_error($conn));
// }
// echo '<h2>mysqli_fetch_array 测试<h2>';
// echo '<table border="1"><tr><td>ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
// while($row = mysqli_fetch_array($retval, MYSQLI_NUM))
// {
//     echo "<tr><td> {$row[0]}</td> ".
//          "<td>{$row[1]} </td> ".
//          "<td>{$row[2]} </td> ".
//          "<td>{$row[3]} </td> ".
//          "</tr>";
// }
// echo '</table>';

// 释放内存
// mysqli_free_result($retval);

// SELECT field1, field2,...fieldN FROM table_name1, table_name2...
// [WHERE condition1 [AND [OR]] condition2.....
// 条件可以使用=、<> !=、<、>、<=、>=




// 数据更新
// $sql = 'UPDATE testtable_tbl
//         SET testtable_title="学习吗"
//         WHERE testtable_id=2';
// $retval = mysqli_query( $conn, $sql );
// if(! $retval )
// {
//     die('无法更新数据: ' . mysqli_error($conn));
// }
// echo '数据更新成功！';



// 数据删除
// $sql = 'DELETE FROM testtable_tbl
//         WHERE testtable_id=1';
// $retval = mysqli_query( $conn, $sql );
// if(! $retval )
// {
//     die('无法删除数据: ' . mysqli_error($conn));
// }
// echo '数据删除成功！';




// like语句：在where里面，像：
// WHERE testtable_author LIKE "%COM"
// 里面的%是任意字符串




// UNION指令将两个查询结果合起来，并且**去除重复**
// SELECT country FROM Websites
// UNION
// SELECT country FROM apps
// ORDER BY country;
// UNION ALL不会去重




// ORDER BY field1, [field2...] [ASC [DESC]]
// 排序，分别是升序或者倒序




// GROUP BY column_name
// 按照column_name分组
// WITH ROLLUP 可以实现在分组统计数据基础上再进行相同的统计（SUM,AVG,COUNT…）
// 示例：SELECT name, COUNT(*) FROM   employee_tbl GROUP BY name
// 示例：SELECT coalesce(name, '总数'), SUM(singin) as singin_count FROM  employee_tbl GROUP BY name WITH ROLLUP
// 上面那个示例会显示总数信息




// JOIN功能：
// INNER JOIN（内连接,或等值连接）：获取两个表中字段匹配关系的记录。INNER可以省略
// LEFT JOIN（左连接）：获取左表所有记录，即使右表没有对应匹配的记录。
// RIGHT JOIN（右连接）： 与 LEFT JOIN 相反，用于获取右表所有记录，即使左表没有对应匹配的记录。
// 用MySQL的INNER JOIN(也可以省略 INNER 使用 JOIN，效果一样)来连接以上两张表来读取testtable_tbl表中所有testtable_author字段在tcount_tbl表对应的testtable_count字段值
// SELECT a.testtable_id, a.testtable_author, b.testtable_count FROM testtable_tbl a INNER JOIN tcount_tbl b ON a.testtable_author = b.testtable_author;
// 相当于：
// SELECT a.testtable_id, a.testtable_author, b.testtable_count FROM testtable_tbl a, tcount_tbl b WHERE a.testtable_author = b.testtable_author;
// LEFT JOIN 会将所有a表中有的东西都列出来，b.testtable_count可能出现NULL




// NULL值：如果NULL和别的比较都会出现false，包括NULL=NULL为false
// 所以提供了运算符：
// IS NULL: 当列的值是 NULL,此运算符返回 true。
// IS NOT NULL: 当列的值不为 NULL, 运算符返回 true。
// <=>: 比较操作符（不同于=运算符），当比较的的两个值为 NULL 时返回 true。




// 正则表达式：
// SELECT name FROM person_tbl WHERE name REGEXP 'mar';
// 也就是条件判断里面可以写
// 正则说明：
// ^	匹配输入字符串的开始位置。如果设置了 RegExp 对象的 Multiline 属性，^ 也匹配 '\n' 或 '\r' 之后的位置。
// $	匹配输入字符串的结束位置。如果设置了RegExp 对象的 Multiline 属性，$ 也匹配 '\n' 或 '\r' 之前的位置。
// .	匹配除 "\n" 之外的任何单个字符。要匹配包括 '\n' 在内的任何字符，请使用象 '[.\n]' 的模式。
// [...]	字符集合。匹配所包含的任意一个字符。例如， '[abc]' 可以匹配 "plain" 中的 'a'。
// [^...]	负值字符集合。匹配未包含的任意字符。例如， '[^abc]' 可以匹配 "plain" 中的'p'。
// p1|p2|p3	匹配 p1 或 p2 或 p3。例如，'z|food' 能匹配 "z" 或 "food"。'(z|f)ood' 则匹配 "zood" 或 "food"。
// *	匹配前面的子表达式零次或多次。例如，zo* 能匹配 "z" 以及 "zoo"。* 等价于{0,}。
// +	匹配前面的子表达式一次或多次。例如，'zo+' 能匹配 "zo" 以及 "zoo"，但不能匹配 "z"。+ 等价于 {1,}。
// {n}	n 是一个非负整数。匹配确定的 n 次。例如，'o{2}' 不能匹配 "Bob" 中的 'o'，但是能匹配 "food" 中的两个 o。
// {n,m}	m 和 n 均为非负整数，其中n <= m。最少匹配 n 次且最多匹配 m 次。




// 事务：满足4个条件（ACID）：原子性（Atomicity，或称不可分割性）、一致性（Consistency）、隔离性（Isolation，又称独立性）、持久性（Durability）。
// 事务代码示例：
// mysqli_query($conn, "SET AUTOCOMMIT=0"); // 设置为不自动提交，因为MYSQL默认立即执行
// mysqli_begin_transaction($conn);            // 开始事务定义
// if(!mysqli_query($conn, "insert into testtable_transaction_test (id) values(8)"))
// {
//     mysqli_query($conn, "ROLLBACK");     // 判断当执行失败时回滚
// }
// if(!mysqli_query($conn, "insert into testtable_transaction_test (id) values(9)"))
// {
//     mysqli_query($conn, "ROLLBACK");      // 判断执行失败时回滚
// }
// mysqli_commit($conn);            //执行事务




// ALTER：修改表的名称或者字段
// SHOW COLUMNS FROM testalter_tbl 可以显示所有字段
// ALTER TABLE testalter_tbl  DROP i 可以直接删除表testalter_tbl中的i字段
// ALTER TABLE testalter_tbl ADD i INT 可以添加i字段（int）
// 上面的东西的最后可以添加FIRST或者AFTER c代表新加字段的位置
// ALTER TABLE testalter_tbl MODIFY c CHAR(10) 可以直接修改字段
// 如果使用CHANGE则如下：
// ALTER TABLE testalter_tbl CHANGE i j INT 就是把i换为j（INT）
// ALTER TABLE testalter_tbl MODIFY j BIGINT NOT NULL DEFAULT 100 也就是设置默认值不是NULL，是100
// ALTER TABLE testalter_tbl ALTER i SET DEFAULT 1000 设置默认值
// ALTER TABLE testalter_tbl ALTER i DROP DEFAULT 删除默认值
// 重命名：ALTER TABLE testalter_tbl RENAME TO alter_tbl




// 还没有看索引之后的部分。http://www.runoob.com/mysql/mysql-index.html
$sql = 'SELECT testtable_id, testtable_title, 
        testtable_author, submission_date
        FROM testtable_tbl';
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '<h2>mysqli_fetch_array 测试<h2>';
echo '<table border="1"><tr><td>ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
while($row = mysqli_fetch_array($retval, MYSQLI_NUM))
{
    echo "<tr><td> {$row[0]}</td> ".
         "<td>{$row[1]} </td> ".
         "<td>{$row[2]} </td> ".
         "<td>{$row[3]} </td> ".
         "</tr>";
}
echo '</table>';

mysqli_close($conn);
?>
</body>
</html>