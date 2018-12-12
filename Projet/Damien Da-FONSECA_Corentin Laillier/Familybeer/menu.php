	<!DOCTYPE html>
	<html lang="FR-fr" class="no-js">
	<?php include("header.php")?>


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/styles.css">


	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-between">
				<div class="col-lg-12 banner-content">
					<h6 class="text-white"></h6>
					<br/>
					<h1 class="text-white" style="text-align: center;">Menu</h1>
					<br/>
				</div>
			</div>
		</div>
	</section>

			<!-- Start menu-area Area -->
            <section class="menu-area section-gap" id="menu">
<div class="container">
								<?php
						require 'admin/Ressources/database.php';

										echo '<nav>
										<ul class="nav nav-pills filter-wrap filters col-lg-12 no-padding">';

										$db = Database::connect();
										$statement = $db->query('SELECT * FROM categories');
										$categories = $statement->fetchAll();
										foreach ($categories as $category)
										{
												if($category['id'] == '1')
														echo '<li role="presentation" class="active" href="#'. $category['id'] . '" data-toggle="tab">' . $category['name'] . '</li>';
												else
														echo '<li role="presentation" href="#'. $category['id'] . '" data-toggle="tab">' . $category['name'] . '</li>';
										}

										echo    '</ul>
															</nav>';

										echo '<div class="tab-content">';

										foreach ($categories as $category)
										{
												if($category['id'] == '1')
														echo '<div class="tab-pane active" id="' . $category['id'] .'">';
												else
														echo '<div class="tab-pane" id="' . $category['id'] .'">';

												echo '<div class="row">';

												$statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
												$statement->execute(array($category['id']));
												while ($item = $statement->fetch())
												{
														echo '<div class="col-md-6">
																		<div class="single-menu">
																				<div class="title-wrap d-flex justify-content-between">' . number_format($item['price'], 2, '.', ''). ' €</div>
																				<div class="caption">
																						<h4>' . $item['name'] . '</h4>
																						<p>' . $item['description'] . '</p>
																						<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
																				</div>
																		</div>
																</div>';
												}

											 echo    '</div>
														</div>';
										}
										Database::disconnect();
										echo  '</div>';
								?>
							</div>
</section>


			<?php include("footer.php") ?>

		</body>
	</html>
