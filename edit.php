<!DOCTYPE html>
<?php
$variable = $_GET['var'];
define('hidden', TRUE);
include("connect.php");
if ($variable != "") {
	$blog = get_blog($variable);
}
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
      <form method="post" action="submit.php">
        <input type="hidden" name="blog_id" id="hiddenField" value="<?php echo $blog["blog_id"] ?>" />
        <h1><input name="title" id="title" value="<?php echo $blog["title"] ?>"></h1>
        <p class="lead"></p>
      </div>

      <div>
        <div class="col-lg-12">
        
        <textarea name="blog" id="blog" style="width:100%;" rows="15">
        <?php 
        echo $blog["blog"];
        ?>
        </textarea>
        <button type="submit" class="btn btn-default">Submit</button>   
        </form>   
        </div>

      <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>

    </div> <!-- /container -->
</body>
</html>