<!DOCTYPE html>
<?php
define('hidden', TRUE);
include("connect.php");
?>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>SWU Blog</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
 <div class="container">
      <div class="header">
        <h3 class="text-muted"><a href="index.php">SWU BLOG</a></h3>

      </div>

      <div class="jumbotron">
        <h1>SWU BLOG</h1>
        <p><a href="edit.php">Create a new Blog Post</a> </p>
        <p class="lead"></p>
      </div>

      <div>
        <div class="col-lg-6">
        <?php
				$allblogs = find_blogs();
				while($row = mysql_fetch_array($allblogs)){?>

          <h4><?php echo '<a href="blog.php?var='.$row["blog_id"].'">'.$row["title"].'</a>' ?></h4>
          <p><?php echo substr($row["blog"],0,20)."...";?></p>
          <p><?php echo '<a href="edit.php?var='.$row["blog_id"].'">edit</a>'?></p>
          <?php }?>
      </div>

   

    </div> <!-- /container -->
</body>
</html>