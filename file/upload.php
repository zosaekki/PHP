<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_proc.php" method="POST" enctype="multipart/form-data"> <!-- 파일 업로드 무조건 POST -->
        <div><label>이미지 <input type="file" name="img" accept="image/*"></label></div>
        <div><input type="submit" value="업로드"></div>
    </form>
</body>
</html>