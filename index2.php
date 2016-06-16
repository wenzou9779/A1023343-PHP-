
<html>
<head>
<title>My First Form</title>
</head>
<body>
<form>
	<select name="city[]" size="1" multiple>
	<option value="">高雄市楠梓區高雄大學路700號</option> 
	<option value="">高雄市苓雅區自強三路15巷18號3樓</option> 
	<option value="">高雄市前鎮區鎮中路800號之1</option> 
	<option value="">新北市樹林區路中路280巷20號</option>
	</select>
<br/>
<br/>
<input type="submit" value="送出資料">
<input type="reset" value="從輸資料">
</form>
<?php
echo $_GET["高雄市楠梓區高雄大學路700號"];
echo "<br/>";
echo $_GET["高雄市苓雅區自強三路15巷18號3樓"];
echo "<br/>";
echo $_GET["高雄市前鎮區鎮中路800號之1"];
echo "<br/>";
echo $_GET["新北市樹林區路中路280巷20號"];
echo "<br/>";

?>
</body>>
</html>