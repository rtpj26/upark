<!DOCTYPE html>
<?php
	session_start();
	if($_SESSION['SESSION_ID'] < 0) header('location: ../content_control_login.php');
?>
<html>
	<head>
		<title>UPark: USLS Parking Content Control</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/cc_style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-fixed-top navbar-custom">
				<div class="navbar-header">
					<a class="navbar-brand" href="content_control_dashboard.php">U<span style="color: #009e3d;">PARK</span>CC</a>
					<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="link"><a href="content_control_dashboard.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
						<li class="link"><a href="content_control_updates.php" ><span class="glyphicon glyphicon-pushpin"></span> Updates and News</a></li>
						<li class="link"><a href="content_control_set_feature.php" ><span class="glyphicon glyphicon-duplicate"></span> Featured Articles</a></li>
						<li class="link"><a href="content_control_approval.php" ><span class="glyphicon glyphicon-ok"></span> Approve Users</a></li>
						<li class="link"><a href="../content_control_login.php" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
			</div>
			<!--Main Content-->
			<div>
			<ul class="page-content">
				<li>
					<div class="whitebg" style="padding: 20px;">
						<button id="aPost" class="btn btn btn-primary" style="margin-right: 5px;"><span class="glyphicon glyphicon-plus"></span> Add New Post </button>
						<button id="ePost" class="btn btn btn-primary" style="margin-right: 5px;"><span class="glyphicon glyphicon-pencil"></span> Edit Post </button>
						<button id="rPost" class="btn btn btn-primary" style="margin-right: 5px;"><span class="glyphicon glyphicon-minus"></span> Remove Post </button>
					</div>
				</li>
				<li id="addPost">
					<div class="whitebg" style="padding: 20px;">
						<input type="text" name="article_title" placeholder="Enter Title Here" class="form-control input-lg"/><br>
						<textarea type="text" name="article_content" class="form-control input-sm" rows="5" cols="50" placeholder="Enter content here"></textarea><br>
						<div class="row">
							<div class="col-md-2">
								<strong>Featured Image: </strong><br><span style="font-size:75%">(Minimum of 300 dpi 800x600)</span>
								<br><img src="" width="200px" height="200px" />
								<button type="file" class="btn btn btn-primary" style="margin-right: 5px; margin-top: 5px; padding-left: 70px; padding-right: 70px;"><span class="glyphicon glyphicon-upload"></span> Upload </button>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-9">
								<strong>Filename: </strong><span id="filename"></span><br>
								<p style="font-size:75%; padding-top:20px;" class="justify"><em>By clicking on the "Post Article" button, this article will be saved in the system's
								database. This post will be featured among the top 4 newest post in "News" depending whether the article was the last to be posted. This feature, however,
								will not be displayed in updates unless it will be set. To set, click on the "Featured Articles" button in the navigation bar and manually set it</em></p>
								<p style="font-size:75%; padding-top:20px;" class="justify"><em>Before clicking on "Post Article", make sure that everything.</em></p>
								<button class="btn btn btn-primary" style="margin-right: 5px;"><span class="glyphicon glyphicon-plus"></span>Post Article</button>
							</div>
						</div>
					</div>
				</li>
				<li id="editPost">
					<table class="table">
						<thead>
							<th>ID</th>
							<th>Title</th>
							<th></th>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Test Title</td>
								<td><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Test Title</td>
								<td><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="removePost">
					<table class="table">
						<thead>
							<th>ID</th>
							<th>Title</th>
							<th></th>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Test Title</td>
								<td><button class="btn btn-primary"><span class="glyphicon glyphicon-minus"></span> Remove</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Test Title</td>
								<td><button class="btn btn-primary"><span class="glyphicon glyphicon-minus"></span> Remove</button></td>
							</tr>
						</tbody>
					</table>
				</li>
			</ul>
			</div>
			<!--End of main content-->
		</div>
		<a href="#" class="scrollToTop text-center"><span class="glyphicon glyphicon-menu-up text-center" style="margin-top: 30%;"></span></a>
	</body>
	
	<!--JQuery scripts-->
	<script src="../js/cc_updates.js"></script>
	<script src="../js/stt.js"></script>
</html>