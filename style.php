<html>
<head>
<style>
body
{
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
}
.info, .success, .warning, .error, .validation 
{
	border: 1px solid;
	margin: 10px 0px;
	padding:15px 10px 15px 50px;
	background-repeat: no-repeat;
	background-position: 10px center;
	text-align: center;
	width: 350px;
}
.info 
{
	color: #00529B;
	background-color: #BDE5F8;
	background-image: url(icons/info.png);
}
.success 
{
	color: #4F8A10;
	background-color: #DFF2BF;
	background-image:url(icons/success.png);
}
.warning 
{
	color: #9F6000;
	background-color: #FEEFB3;
	background-image: url(icons/warn2.png);
}
.error 
{
	color: #D8000C;
	background-color: #FFBABA;
	background-image: url(icons/error1.png);
}
</style>
</head>
<body>
<div class="info">Info message</div>
<div class="success">Successful operation message</div>
<div class="warning">Warning message</div>
<div class="error">Error message</div>
</body>
</html>
