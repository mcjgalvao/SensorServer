<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
  <?php
	echo "Oi. Estou aqui!!<p>";
	echo "Modificado de manh&atilde;!<p>";
	
	$json = '{"time-stamp":"20170830162500", "light":1,"temp":2}';
	
	$ret1 = json_decode($json);
	$ret2 = json_decode($json,true);
	echo "ret1 : ";
	var_dump($ret1);
	echo "<p>";
	echo "ret2 : ";
	var_dump($ret2);
	echo "<p>";
	echo $ret2["light"]."<p>";
	echo $ret1->light."<p>";
	?>
  
</body>
</html>