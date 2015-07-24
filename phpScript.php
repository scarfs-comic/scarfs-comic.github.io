<html>
<head>
	<title>Thing</title>
</head>
<body>
	<h1>TITLE</h1>

	<form name="form" method=get action='textThing.php'>
	</form>
	<?php
	$currentPageNum=0;
	//get page number
	//ie: increment curentPagenum
	//find page in database
	$pageNum=$currentPageNum+1; 
	echo "<a href= "+$pageNum >"this should be a picture"</a>  //<fix escape characters

	?>
</body>
</html>
