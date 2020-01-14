<?php
  $conn = mysqli_connect('localhost',
  'root',
  'qwerty123456',
  'th_db');
  $recent_val = "SELECT Timestamp, temperature, humid FROM th_db ORDER BY id DESC limit 1";
  $result = mysqli_query($conn, $recent_val);
  $row = mysqli_fetch_array($result);
  $article['Timestamp'] = $row['Timestamp'];
  $article['temperature'] = $row['temperature'];
  $article['humid'] = $row['humid'];
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
    <h3><a href="search_info.php">날짜별 정보검색</a></h3>

    <h2>최근 저장 시간 : <?=$article['Timestamp']?></h2>
    <h2>온도 : <?=$article['temperature']?></h2>
    <h2>습도 : <?=$article['humid']?></h2>

    <script src="clock.js">00:00</script>
  </body>
</html>
