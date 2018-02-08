<?php
    require("./dbConnect.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid gray;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
tr:hover {background-color:#f5f5f5;}
</style>
	<meta charset="utf-8" />
	<title>질문/답변 게시판 | TMON Board</title>
</head>
<body>
	<article class="boardArticle">
		<h3 style="background: #ced4da">자유게시판</h3>
        <div style="background:#9775fa; font-size: 1.4rem; font-weight: 200;">
        <a href="/boardNewWrite.php">글쓰기</a>
        </div>
		<table>
			<thead>
				<tr>
					<th scope="col" class="bbno">번호</th>
					<th scope="col" class="grpno">grpno</th>
					<th scope="col" class="step">step</th>
					<th scope="col" class="indent">indent</th>
					<th scope="col" class="title">title</th>
                    <th scope="col" class="content">content</th>
				</tr>
			</thead>
			<tbody>
                <?php
                    $sql = 'select * from board order by grpno desc, step asc';
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc())
                    {
                ?>
                    <tr>
                        <td class="bbno"><?php echo $row['bbno']?></td>
                        <td class="grpno"><?php echo $row['grpno']?></td>
                        <td class="step"><?php echo $row['step']?></td>
                        <td class="indent"><?php echo $row['indent']?></td>
                        <td class="title">
                        <?php echo '<a href="/boardDetail?bbno='.$row['bbno'].'">'; 
                                for($x = 0; $x < $row['indent']; $x++)
                                {
                                    echo "-";
                                }
                                echo $row['title'];
                            echo '</a>';
                        ?></td>
                        <td class="hit"><?php echo $row['content']?></td>
                        </a>
                    </tr>
                <?php
                    }
                ?>
			</tbody>
		</table>
	</article>
</body>

</html>

<?php 
    require("./dbDestroy.php"); 
?>