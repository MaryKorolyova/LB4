<html>
<head>
    <title>Hello</title>
</head>
<body>
<?php
session_start();
echo '<p>World</p>';
$_SESSION["newsession"]="dDDDDd";
echo $_SESSION["newsession"];
?>
</body>
</html>

