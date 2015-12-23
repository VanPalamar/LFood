<section id="basket">
	<div class="container">	
		<div class="box">
			<div class="center gap">
				<h2>Adresse de livraison : </h2>
				<form class="form-horizontal">
					<fieldset>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="name">Nom</label>  
							<div class="col-md-4">
								<input id="name" name="name" type="text" placeholder="Nom" class="form-control input-md" required="">

							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="surname">Prénom</label>  
							<div class="col-md-4">
								<input id="surname" name="surname" type="text" placeholder="Prénom" class="form-control input-md" required="">

							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="adress">Adresse</label>  
							<div class="col-md-4">
								<input id="adress" name="adress" type="text" placeholder="Adresse" class="form-control input-md" required="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="city">Ville</label>  
							<div class="col-md-4">
								<input id="city" name="city" type="text" placeholder="Ville" class="form-control input-md" required="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="cp">Code postal</label>  
							<div class="col-md-4">
								<input id="cp" name="cp" type="number" placeholder="Code postal" class="form-control input-md" required="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="remarks">Autres remarques</label>  
							<div class="col-md-4">
								<textarea class="form-control" id="remarks" name="remarks"></textarea>
							</div>
						</div>

					</fieldset>
				</form>
				<hr/>
				<h2>Récapitulatif de Commande : </h2>
				<div class="well well-sm">
					<h4>
						<?php

						$total_price = 0;

						if(isset($_COOKIE["cart"])){
							$cart = json_decode($_COOKIE["cart"], true);

							for($i = 0; $i < count($cart); $i++){
								echo "Id sandwich : ".$cart[$i]["values"]["id"];
								echo "<br/>";
								if(isset($cart[$i]["values"]["sauce"])){
									echo "Sauce : ".$cart[$i]["values"]["sauce"];
									echo "<br/>";
								}
								echo "Boisson : ".$cart[$i]["values"]["drink"];
								echo "<br/>";
								echo "Catégorie : ".$cart[$i]["values"]["category"];
								echo "<br/>";

								if(isset($cart[$i]["options"])){
									if(count($cart[$i]["options"]) >= 1){
										echo "Options : ";
										for($j = 0; $j < count($cart[$i]["options"]); $j++){
											echo $cart[$i]["options"][$i];
											if($j < count($cart[$i]["options"]) -1)echo " - ";
										}
										echo "<br/>";
									}

								}

								echo "Prix unitaire : ".$cart[$i]["values"]["price"];
								echo "<br/>";
								echo "Quantité : ".$cart[$i]["values"]["quantity"];
								echo "<br/>";
								echo "<hr/>";
								$total_price += $cart[$i]["values"]["price"] * $cart[$i]["values"]["quantity"];
							}

							echo "TOTAL : ".$total_price." € TTC";

						}


						?>
					</h4>
				</div>
				<button class="btn btn-success"><h3 style="color:white">Commander</h3></button>
			</div><!--/.center-->                
		</div><!--/.box-->
	</div><!--/.container-->
</section><!--/#portfolio-->
<br/>
<br/>