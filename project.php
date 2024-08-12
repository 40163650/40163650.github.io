<!DOCTYPE html>
<html style="background:white">
	<head>
		<title>Portfolio</title>
		<link rel="stylesheet" type='text/css'  href="https://fonts.googleapis.com/css?family=Open+Sans">
		<link rel="stylesheet" type='text/css'  href="styles.css?version=6">
		<link rel="stylesheet" type='text/css'  href="prism.css">
		<link rel="icon"       type='image/ico' href="favicon.ico">
	</head>
	<body>
		<script src="prism.js"></script>
		<?php
			$project = $_GET["p"];
			$parentDirectory = $_GET["t"];
			
			$dir = $parentDirectory . '/' . $project;
			
			echo "<ul>\n";
			echo 	"<li><a href=\"index.php\">Back</a></li>\n";
			echo 	"<li><a href=\"#\"><b>" . $project . "</b></a>\n";
			echo "</ul>\n";
			
			$imageAddress = $dir . '/thumb.png';
			
			echo "<img src='" . $imageAddress . "'>";
			
			include($dir . '/details.html');

			$textfileaddress = $dir . '/desc.txt';
			$textfile = fopen($textfileaddress, 'r') or die('failed to open the description file.');
			
			echo "<div style='text-align: center; position: absolute; top: 40px; width: 100%;'>";
			echo "<div style='display: inline-block; width: 50%; '><p style='text-align:left; width: 100%'>";
			while(!feof($textfile))
			{	
				$line = fgets($textfile);
				echo $line;
						
				if( preg_match('([\n])'  , $line) || 
					preg_match('([\r])'  , $line) || 
					preg_match('([\n\r])', $line) || 
					preg_match('([\r\n])', $line)
					)
				{
					echo "<br>";
				}
			}
			echo "</p>";
			
			$galleryAddress = $dir . '/pics';
			
			$files = scandir($galleryAddress);
			
			for($i = 0; $i < count($files); $i++)
			{
				if($files[$i] == "." || $files[$i] == "..")
				{
					continue;
				}
				echo "<img src='" . $galleryAddress . '/' . $files[$i] . "' style='display: block; margin-left: auto; margin-right: auto; width: 100%'><br>";
			}
			
			echo "</div></div>";
			
		?>
		
	
	</body>
</html>