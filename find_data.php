<?php
  $conn = mysqli_connect('localhost',
  'root',
  'qwerty123456',
  'th_db');
  $sql = "SELECT * from th_db where
   Timestamp LIKE '{$_POST['date']}%' ORDER BY id asc limit 300";
  $result = mysqli_query($conn, $sql);
  $list = '';
  while($row = mysqli_fetch_array($result)){
    $list = $list."<li>{$row['Timestamp']} / {$row['temperature']} / {$row['humid']}</li>";
  }
  ?>
<!DOCTYPE html>
<html lang="kor" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>집의 온도 습도</title>
  </head>
  <body>
    <h1><a href="index.php">집의 온도 습도</a></h1>
    <h2>현재 시간<h2>
    <div class="js-clock">
      <h1>00:00</h1>
    </div>
    <h3><a href="search_info.php">돌아가기</a></h3>
    <h4>　　　　　　시간 　　　온도 습도
    <ol>
      <?=$list?>
    </ol>
    <script src="clock.js">00:00</script>
  </body>
</html>
