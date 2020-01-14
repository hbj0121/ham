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
    <h3><a href="index.php">메인으로</a></h3>

    <form autocomplete="off" action="find_data.php" method="POST">
      <p>Date: <input type="text" name="date" id="datepicker"><input type="submit" value="검색"></p>
      <p><br/></p>
      <p><br/></p>
      <p><br/></p>
      <p><br/></p>
      <p><br/></p>
      <p><br/></p>
      <p><br/></p>
      <p><br/></p>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>jQuery UI Datepicker - Default functionality</title>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( function() {
        $( "#datepicker" ).datepicker( {
          dateFormat: 'yy-mm-dd',
          monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
          dayNamesMin: ['일','월','화','수','목','금','토'],
        });
      } );
      </script>
    </form>
      <script src="clock.js">00:00</script>
      </body>
  </html>
