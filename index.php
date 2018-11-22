<?php
$dir_path = getcwd();
$dirs     = array_diff( scandir( $dir_path ), array('..', '.'));
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Awesome MAMP Dashboard</title>

</head>
	<body>
		<header>
			<div class="navbar bg-dark shadow-sm py-3">
				<div class="container d-flex justify-content-between">
				<h5 class="mb-0 text-white font-weight-normal">Awesome MAMP Dashboard</h5>
					<nav>
						<a class="p-2 text-white" href="https://developer.wordpress.org/">WordPress Developer Resources</a>
						<a class="p-2 text-white" href="http://php.net/">PHP Docs</a>
						<a class="p-2 text-white" href="https://jquery.com/">jQuery</a>
						<a class="p-2 text-white" href="https://reactjs.org/">React</a>
					</nav>
				</div>
			</div>
		</header>
		<main role="main">
			<div class="container">
				<div class="row">
					<div class="col-md-12 px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
						<h2 class="display-4">Awesome MAMP Dashboard</h2>
						<p class="lead">Here is all the directories from the htdoc folder that you are working. Keep the awesomeness going!</p>
					</div>
				</div>
			</div>
			<div class="py-5 border-top bg-light">
				<div class="container">
					<div class="row"><?php
						foreach ( $dirs as $dir ) :
							if ( is_dir( $dir ) ) :
								$dir_name = str_replace( '-', ' ', $dir ); ?>
								<div class="col-sm-12 col-md-4 p-3 text-center" style="min-height:200px;">
								<a class="text-white" href="<?php echo $dir; ?>">
									<div class="card h-100 px-2 bg-dark justify-content-center">

										<h4 class="font-weight-normal text-uppercase"><?php echo $dir_name; ?></h4>

									</div>
								</a>
							</div> <?php
							endif;
						endforeach; ?>
					</div>
				</div>
			</div>
		</main>
		<footer class="border-top py-3">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>Hi, I am <a target="_blank" title="Go to bradley-davis.com" href="https://bradley-davis.com/">Bradley Davis</a> and sometimes I have to use MAMP for WordPress and PHP development so I decided to build a better dashboard.</p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
