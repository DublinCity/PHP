<?php
    require("./dbConnect.php");
    // db connection 
    $title = (string)$_POST['title'];
    $content = (string)$_POST['content'];
    $grpno = (int)$_POST['grpno'];
    $step =(int)$_POST['step'];
    $indent =(int)$_POST['indent'];

    // $sql = 'INSERT INTO board (bbno,grpno,step,indent,title,content) VALUES (null,,1,0,'.$title.','.$content.')';
    echo "where from".(string)$_POST['from'];
    echo "<br>";
    if((string)$_POST['from'] == 'new'){
        echo "NEW<br>";
        $sql = 'INSERT INTO board (bbno,grpno,step,indent,title,content) VALUES (null,null,0,0,"'.$title.'","'.$content.'")';
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else {
        echo "REPLY<br>";       
        $sql = 'UPDATE board SET step=step+1 WHERE grpno='.$grpno.' AND step>'.$step.';';
        // .'INSERT INTO board (bbno,grpno,step,indent,title,content) VALUES (null,'.$grpno.','.($step+1).','.($indent+1) .',"'.$title.'","'.$content.'");';
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql ='INSERT INTO board (bbno,grpno,step,indent,title,content) VALUES (null,'.$grpno.','.($step+1).','.($indent+1) .',"'.$title.'","'.$content.'");';
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    require("./dbDestroy.php");
?>
<html>
<body>
    <script>
        window.location.replace("http://localhost/boardlist.php");
    </script>
</body>
</html>
