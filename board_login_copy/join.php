<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <h1>회원가입</h1>
    <a href="login.php"><button>로그인</button></a>
    <form action="join_proc.php" method="post">
        <div><input type="text" name="nm" placeholder="이름"></div>
        <div><input type="text" name="uid" placeholder="아이디"></div>
        <div><input type="password" name="upw" placeholder="비밀번호"></div>
        <div>
            성별 : <label>남<input type="radio" name="gender" value="1" checked></label>
                    <label>여<input type="radio" name="gender" value="0"></label>
        </div>
        <div>
            <input type="submit" value="회원가입">
            <input type="reset" value="취소">
        </div>
    </form>
</body>
</html>