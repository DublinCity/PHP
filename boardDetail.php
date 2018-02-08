<?php 
    require('dbConnect.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
table.type07 {
    border-collapse: collapse;
    text-align: left;
    line-height: 1.5;
    border: 1px solid #ccc;
    margin: 20px 10px;
}
table.type07 thead {
    border-right: 1px solid #ccc;
    border-left: 1px solid #ccc;
    background: #e7708d;
}
table.type07 thead th {
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    color: #fff;
}
table.type07 tbody th {
    width: 150px;
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
    background: #fcf1f4;
}
table.type07 td {
    width: 350px;
    padding: 10px;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
}
</style>
</head>
<body>
    <?php 
        $sql = "SELECT * FROM board WHERE bbno=".$_GET['bbno'];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo 'bbno : '.$row['bbno'].'<br>';
        echo 'grpno: '.$row['grpno'].'<br>';
        echo 'step :'.$row['step'].'<br>';
        echo 'indent:'.$row['indent'].'<br>';
    ?>
    <table class="type07">
    <thead>
    <tr>
        <th scope="cols">타이틀</th>
        <th scope="cols">내용</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"><?php echo 'TITLE:'.$row['title']; ?> </th>
        <td><?php echo 'content:'.$row['content'].'<br>';?> </td>
    </tr>
    </tbody>
</table>
    <a href="/boardReply?grpno=<?php echo $row['bbno']?>">Answer this QUESTION</a>
</body>
</html>

<?php
    require('dbDestroy.php');
?>
