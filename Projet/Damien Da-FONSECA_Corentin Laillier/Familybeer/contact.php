	<!DOCTYPE html>
	<html lang="FR-fr" class="no-js">

	<?php include("header.php")?>

	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-between">
				<div class="col-lg-12 banner-content">
					<h6 class="text-white"></h6>
					<br/>
					<h1 class="text-white" style="text-align: center;">Contact</h1>
					<br/>

				</div>
			</div>
		</div>
	</section>

	<br/>
	<br/>
	<br/>
			<body>
							<div class="single-contact-address d-flex flex-row">
							<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
							</div>


							</div>
						</div>
						<center><h1 class="text-black">Nous contacter</h1></center>
						<br/>
						<br/>
						<br/>
						<div class="offset-lg-2 col-lg-8">
							<form class="form-area contact-form text-right" id="form" action="PDOtraitement/PDOcontact.php" method="post">
								<div class="row">
									<div class="col-lg-6 form-group">
										<input name="nom_contact" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'" class="common-input mb-20 form-control" required="" type="text">

										<input name="email_contact" placeholder="Adresse Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse Email'" class="common-input mb-20 form-control" required="" type="email">

										<input name="phone_contact" placeholder="Téléphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Téléphone'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message_contact" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<input class="genric-btn primary" style="float: right;" type="submit" name="Envoyer" value="Envoyer">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<br/>
			<br/>
			<br/>

			<?php include("footer.php") ?>



		</body>
	</html>
