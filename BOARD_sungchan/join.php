<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
  <body>
    <h1>회원 가입</h1>
    <form action="join_proc.php" method="POST">
      <p><input type="text" name="nm" placeholder="사용자 이름" required></p>
      <p><input type="text" name="email" placeholder="이메일" required></p>
      <p><input type="password" name="pw" placeholder="비밀번호" required></p>
      <p><input type="password" name="pw_confirm" placeholder="비밀번호 확인" required></p>
      <p><input type="submit" value="회원 가입"></p>
      <?php
        if ( $wu == 1 ) {
          echo "<p>사용자이름이 중복되었습니다.</p>";
        }
        if ( $wp == 1 ) {
          echo "<p>비밀번호가 일치하지 않습니다.</p>";
        }
      ?>
    </form>
  </body>
</html>