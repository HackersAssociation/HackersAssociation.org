<?php

include('includes/Parsedown.php');

$xhr = false;
if (strpos($_GET['p'], '/xhr/') === 0){
	$xhr = true;
	$_GET['p'] = substr($_GET['p'], 4);
}

if ($xhr == false)
	include('includes/header.html');

function output($loc){
	$Parsedown = new Parsedown();
	echo $Parsedown->text(file_get_contents($loc));
}

if($_GET['p'] == '/about'){
	output('includes/md/about.md');
}
else if($_GET['p'] == '/rules'){
	output('includes/md/rules.md');
}
else if($_GET['p'] == '/presentations'){
	output('includes/md/presentations.md');
}
else if($_GET['p'] == '/meetings'){
	output('includes/md/meetings.md');
}
else if($_GET['p'] == '/chat'){
	output('includes/md/chat.md');
}
else if($_GET['p'] == '/irl'){
	output('includes/md/irl.md');
}
else{
	output('includes/md/home.md');
}

if($xhr == false)
	include('includes/footer.html');

?>
