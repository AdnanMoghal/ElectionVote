<html>
<head>
<title>Ratting Results</title>
</head>
<body>
<?php
	$file='excellent.txt';
	$fh=fopen($file,'r') or die ('Failed to read file');
	$result1=fread($fh,filesize($file));
	fclose($fh);

	$file='good.txt';
	$fh=fopen($file,'r') or die ('Failed to read file');
	$result2=fread($fh,filesize($file));
	fclose($fh);

	$file='notbad.txt';
	$fh=fopen($file,'r') or die ('Failed to read file');
	$result3=fread($fh,filesize($file));
	fclose($fh);

	$file='bad.txt';
	$fh=fopen($file,'r') or die ('Failed to read file');
	$result4=fread($fh,filesize($file));
	fclose($fh);
?>
<table border="1" width="100%">
<caption><b>Voting Result:<br>Total Votes: </b> <?php $total= $result1 + $result2 + $result3 + $result4; echo "$total"; ?><br> </caption>
<tr><th width="50%">Rate:</th><th width="50%">Votes</th></tr>
<tr><td width="50%" align="center">Pakistan Tehreek Insaaf.</td><td width="50%" align="center"><?php echo "$result1"; ?></td><td width="25%"></tr>
<tr><td width="50%" align="center">Pakistan People Party</td><td width="50%" align="center"><?php echo "$result2"; ?></td></tr>
<tr><td width="50%" align="center">Tahir_ul_Qadri</td><td width="50%" align="center"><?php echo "$result3"; ?></td></tr>
<tr><td width="50%" align="center">University of Sargodha</td><td width="50%" align="center"><?php echo "$result4"; ?></td></tr>
</table>
<p align="center"><a href="javascript:window.close();">Close window</a></p>
</body>
</html>