<html>
<head>
<title>寄送電子郵件</title>
</head>
<body>
<font color="red">
<?php
if  (isset($_POST["Send"])) { 
    $to = $_POST["To"];
    $from = $_POST["From"];
    $subject = $_POST["Subject"];
    $body = $_POST["Text"];
    $header = "From: $from\nReply-To: $from\n"; 
    if (mail($to, $subject, $body, $header))
         echo "郵件已經成功的寄出! <br>";
    else
         echo "郵件寄送失敗!<br>";
}
?>
</font>
<form action="" method="post">
<table>
  <tr><td>收件人:</td>
  <td><input type="text" size="30" name="To">
  </td></tr>
  <tr><td>寄件人:</td>
  <td><input type="text" size="30" name="From">
  </td></tr>
  <tr><td>主旨:</td>
  <td><input type="text" size="30" name="Subject">
  </td></tr>
  <tr><td>內容:</td><td>  
  <textarea rows="5" cols="40" name="Text">
  </textarea>
  </td></tr>
</table>
<input type="submit" name="Send" value="寄送郵件">
</form>
</body>
</html>
