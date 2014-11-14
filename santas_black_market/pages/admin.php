<?php require_once("../../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
  <div id="navigation">
    &nbsp;
  </div>
  <div id="page">
    <h2 color: #d4e6f4;>Admin Menu</h2>
    <p>Welcome to the admin area.</p>
    <ul>
      <li><a href="manage_content.php">Manage Website Content</a></li>
      <li><a href="manage_admins.php">Manage Admin Users</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>


<!--Tried to use link to apply styles, but it does not seem to work on multi
lab. but it seems to work with embed style
-->
<style>

html { height: 100%; width: 100%; }
body {
  width: 100%; height: 100%; 
  margin: 0; padding: 0; border: 0;
  font-family: Verdana, Arial, Helvetica, sans-serif; 
  font-size: 13px; line-height: 15px;
  background: #EEE4B9;
}
img { border: none; }
a { color: #8D0D19; }
a:hover { color: #1A446C; }
	
#header { 
	height: 70px; 
	margin: 0; padding: 0; text-align: left; 
  background: #1A446C; color: #D4E6F4;
}
#header h1 { padding: 1em; margin: 0; }
#main { 
	height: 600px; width: 100%; 
	margin: 0; padding: 0; 
	background: #EEE4B9;
}
#footer { 
	clear: both;
	height: 2em; margin: 0; padding: 1em; 
	text-align: center; 
  background: #1A446C;  color: #D4E6F4;
}

/* Navigation */
#navigation { 
	float: left;
	width: 150px; height: 100%; 
	margin: 0; padding: 0 2em; 
	color: #D4E6F4; background: #8D0D19;
}
#navigation a { color: #D4E6F4; text-decoration: none; }
#navigation a:hover { color: #FFFFFF; }
ul.subjects { 
	margin: 1em 0; padding-left: 0; list-style: none;
}
ul.pages { padding-left: 2em; list-style: square; }
.selected { font-weight: bold; }

/* Page Content */
#page { 
	float: left; height: 100%;
	padding-left: 2em; vertical-align: top; 
	background: #EEE4B9;
}
#page h2 { color: #8D0D19; margin-top: 1em;}
#page h3 { color: #8D0D19; }


</style>



<?php include("../includes/layouts/footer.php"); ?>
