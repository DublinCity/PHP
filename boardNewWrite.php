<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
form {
    box-sizing: border-box;
    /* display:flex; */
}
.title {
    font-size: 2rem;
    margin-bottom: 10px;
    witdh: 300px;
}
.content{
    font-size:2rem;
    min-height: 300px;
    width: 300px;
}
.btn {
    font-size: 3rem;
}
</style>
</head>
<body>
    <h1>새로운 글쓰기</h3>
    <form action="getDoc.php" method="POST">
        <input class="title" type="text" name="title" required placeholder="제목"><br/>
        <input class="content" type="text" name="content" required placeholder="내용"><br/>
        <input type="hidden" name="from" value="new"><br/>
        <button class="btn" type="submit"> 전송 </button>
    </form>
</body>
</html>