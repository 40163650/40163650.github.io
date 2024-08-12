<!DOCTYPE html>
<html style="background:white">
	<head>
		<title>Portfolio</title>
		<link rel='stylesheet' type='text/css'  href='https://fonts.googleapis.com/css?family=Open+Sans'>
		<link rel="stylesheet" type='text/css'  href="styles.css?version=4">
		<link rel="icon"       type="image/ico" href="favicon.ico">		
	</head>
	<body>
		<!-- NAV BAR -->
	    <ul>
			<li><a href="#releasedProjects">Released Projects</a></li>
	        <li><a href="#studentProjects">Student Projects</a></li>
            <li><a href="#about">About</a></li>
			<li><a href="#sideProjects">Side Projects</a></li>
			<li><a href="#codeSamples">Code Samples</a></li>
  			<li><a href="#skills">Skills</a></li>
  			<li><a href="#contact">Contact</a></li>
			<li><a href="https://test-05.weebly.com/">Blog</a></li>
			<li><a href="assets/DeveloperCV2.pdf">CV</a></li>
			<li><a href="https://www.linkedin.com/in/matthew-jenkinson-663085b1/">LinkedIn</a></li>
			<li><a href="mailto:matthew.j.jenkinson@gmail.com"><i>matthew.j.jenkinson@gmail.com</i></a></li>
	    </ul>
		
		<div id="header">
			<h1>Portfolio</h1>
		</div>
		<p style="clear:both"></p>
		
		<div id="releasedProjects">
			<h2>Released Projects</h2>
			<div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
			<?php
				$releasedProjects = scandir("releasedProjects");
				
				for($i = 0; $i < count($releasedProjects); $i++)
				{
					if($releasedProjects[$i] == "." || $releasedProjects[$i] == "..")
					{
						continue;
					}
					$project = $releasedProjects[$i];
					$thumb = $project . '/thumb.png';
					
					echo "<a href='project.php?p=" . $project . "&t=releasedProjects'>\n";
					echo 	"<div class='container'>\n";
					echo 		"<img src='releasedProjects/" . $thumb . "' class='image'>\n";
					echo 		"<div class='overlay'>\n";
					echo 			"<div class='text'>" . $project . "</div>\n";
					echo		"</div>\n";
					echo 	"</div>\n";
					echo "</a>\n";
				}
			?>
			</div>
		</div>
		<p style="clear:both"></p>
		<hr>
		
		<div id="studentProjects">
			<h2>Student Projects</h2>
			<div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
			<?php
				$studentProjects = scandir("studentProjects");
				
				for($i = 0; $i < count($studentProjects); $i++)
				{
					if($studentProjects[$i] == "." || $studentProjects[$i] == "..")
					{
						continue;
					}
					$project = $studentProjects[$i];
					$thumb = $project . '/thumb.png';
					
					echo "<a href='project.php?p=" . $project . "&t=studentProjects'>\n";
					echo 	"<div class='container'>\n";
					echo 		"<img src='studentProjects/" . $thumb . "' class='image'>\n";
					echo 		"<div class='overlay'>\n";
					echo 			"<div class='text'>" . $project . "</div>\n";
					echo		"</div>\n";
					echo 	"</div>\n";
					echo "</a>\n";
				}
			?>
			</div>
		</div>
		<p style="clear:both"></p>
		<hr>
		
		<div id="about">
			<h2>About</h2>
			<p>
				Hi, my name is Matthew Jenkinson and I am aspiring to be a computer graphics
				programmer. I recently graduated in Games Development from Edinburgh Napier
				University.
			</p>
			<p>
				My main interests are in GPU programming and performance optimisation. I enjoy
				the fact that such small changes in the shader code make such large changes on
				the screen. I like working with artists and trying to find a way to create an
				efficient but realistic representation of the look they're after.
			</p>
			<p>
				I enjoy participating in Game Jams, but I also like to make my own programs and
				applications in my spare time.
			</p>
			<p>
				Presently, I am working for <a href="https://firesprite.com/">Firesprite</a>, a
				game development studio based in Liverpool.
			</p>
		</div>
		<p style="clear:both"></p>
		<hr>
		
		<div id="sideProjects">
			<h2>Side Projects</h2>
			<div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
			<?php
				$sideProjects = scandir("sideProjects");
				
				for($i = 0; $i < count($sideProjects); $i++)
				{
					if($sideProjects[$i] == "." || $sideProjects[$i] == "..")
					{
						continue;
					}
					$project = $sideProjects[$i];
					$thumb = $project . '/thumb.png';
					
					echo "<a href='project.php?p=" . $project . "&t=sideProjects'>\n";
					echo 	"<div class='container'>\n";
					echo 		"<img src='sideProjects/" . $thumb . "' class='image'>\n";
					echo 		"<div class='overlay'>\n";
					echo 			"<div class='text'>" . $project . "</div>\n";
					echo		"</div>\n";
					echo 	"</div>\n";
					echo "</a>\n";
				}
			?>
			</div>
		</div>
		<p style="clear:both"></p>
		<hr>
		
		<div id="codeSamples">
			<h2>Code Samples</h2>
			<p>
				Code and executable for Edinburgh height map: <a href="http://www.mediafire.com/file/9az2ke12rmdk8ge/CourseWork.7z/file">Download</a>
			</p>
			<p>
				Code for the multi-threaded ray-tracer (requires building): <a href="http://www.mediafire.com/file/2788ff3xe4yt5i5/Multithreading1-1.rar/file">Download</a>
			</p>
			<p>
				Code and executable for my fully-featured and multi-threaded ray-tracer: <a href="https://www.mediafire.com/file/su3z9en3bp7lcmk/RayTracing.rar/file">Download</a>
			</p>
		</div>
		<p style="clear:both"></p>
		<hr>
		
		<div id="skills">
			<h2>Skills</h2>
			<dl style="display: table; margin: auto;">
				<dt><b>Languages</b></dt>
				<dd>C / C++</dd>
				<dd>OpenGL / GLSL</dd>
				<dd>OpenCL</dd>
				<dd>DirectX / HLSL</dd>
				<dd>Vulkan</dd>
				<dd>C#</dd>
				<dt><b>Engines</b></dt>
				<dd>Unity3D</dd>
				<dd>Unreal Engine 4</dd>
				<dt><b>Fields</b></dt>
				<dd>Computer Graphics</dd>
				<dd>Pathfinding</dd>
				<dd>Data Serialisation</dd>
				<dd>Procedural Generation</dd>
			</dl>
		</div>
		<p style="clear:both"></p>
		<hr>
		
		<div id="contact">
			<h2>Contact</h2>
			<p>
				If you wish to get in touch, don't hesitate to <a href="mailto:matthew.j.jenkinson@gmail.com">email me</a> (matthew.j.jenkinson@gmail.com) or find me on Discord at Jenkins#1002.
			</p>
		</div>
		<p style="clear:both"></p>
		<hr>
		
	</body>
</html>