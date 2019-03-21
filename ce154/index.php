<?php
  Require ('ConnectDB.php');
?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1">
<title>Task Master</title>
<link rel="stylesheet" type="text/css" href="CSSFile.css"/>
</head>
<body>
<div id= "Navigation" class="navigation" onmouseover="openNav()" onmouseout="closeNav()">
 <h2>Project</h2>
 <form action="create_project.php" method="get">
   <input type="text" name= "project_name">
   <input type="submit" name="create_project.btn" value="Create Project">
 </form>
 <div class="buttonbox">
  <button class="button" href="Assignment.html">HeLlo</button>
  <button class="button">Hello</button>
  <button class="button">Hello</button>
 </div>
</div>
<div id="Main" class="main">
<div class="header">
  <h1>Task Master</h1>
</div>  
<div class="content">  
  <div class="toolbar"></div>
  
	<div class="list">
	  <button class="row" id = "task1" onclick="return toggleContentHide(this);">Click</button>
	  <div class="taskContent">
	  <input = "text" name="task_name"  ></input>
	  
	  </div>
	  <div class="row">click</div>
	</div>
</div>

<script>
function openNav(){
  document.getElementById("Navigation").style.width = "10%";
  document.getElementById("Main").style.marginLeft = "10%";
}
function closeNav() {
  document.getElementById("Navigation").style.width = "0.5%";
  document.getElementById("Main").style.marginLeft= "0.5%";
}
function toggleContentHide(id) {
  var content = id.nextElementSibling;
  if (id.id.includes("active")){
	content.style.display = "none";
	id.id = id.id.replace("active","");
  }
  else{
	content.style.display = "block";
	id.id = "active"+id.id;
  }
}
</script>
</body>


</html>