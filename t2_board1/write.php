<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 작 성</title>
</head>
<body>
    <h1>글 작 성</h1>
    <form action="write_proc.php" method="post" enctype="multipart/form-data">
        <select name="board">
            <option value="t2_board1">게시판1</option>
            <option value="t2_board2">게시판2</option>
        </select>
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>
        <div><input type="text" name="username" placeholder="이름"></div>
        <input type="file" name="img">
        <div>
            <input type="submit" value="작성">
            <input type="reset" value="리셋">
        </div>
    </form>
    <a href="list.php"><button>목록</button></a>
</body>
</html>