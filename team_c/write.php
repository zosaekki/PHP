<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글작성</title>
</head>
<body>
    <h1>글작성</h1>
    <form action="write_proc.php" method="post" enctype="multipart/form-data">
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>
        <div><input type="file" name="img_name"></div>
        <div><input type="submit" value="작성"></div>
    </form>
</body>
</html>