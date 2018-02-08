<?php
    require("./dbConnect.php");
    $sql = "SELECT * FROM board WHERE bbno=".$_GET['grpno'];
    echo $sql;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    print_r($row);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>답글쓰기</title>
</head>
<body>
    <h3><<?php echo $_GET['grpno']?>>번 글에 대하여 답글쓰기</h3>
    <form action="getDoc.php" method="POST">
        <input type="text" name="title" placeholder="제목"><br/>
        <input type="text" name="content" placeholder="내용"><br/>
        <input type="hidden" name="from" value="reply"><br/>
        <input type="hidden" name="grpno" value=<?php echo $row['grpno'] ?>>
        <input type="hidden" name="step" value=<?php echo $row['step']?>>
        <input type="hidden" name="indent" value=<?php echo $row['indent'] ?>>
        <button type="submit"> 전송 </button>
    </form>
</body>
</html>
<?php
    require("./dbDestroy.php");
?>