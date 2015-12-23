<?php 

$reps = 4;

?>

<section id="sandwiches">
	<div class="container">	
		<div class="box">
			<div class="center gap">
				<h2>Sandwichs</h2>
				<hr/>
				<div class="container">

					<?php
					for($i = 0; $i < $reps; $i++)
					{
						echo'

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 thumb">
						<div class="card">
						<div class="card-image">
						<img class="img-responsive" src="images/hamburger.jpeg">

						</div><!-- card image -->

						<div class="card-content">
						<h3>Sandwich Rami 
						<br/>
						<span class="label label-primary">5.50 €</span>
						</h3>                   
						</div><!-- card content -->
						<div class="card-action">
						<form class="form-horizontal sandwichForm">
						<fieldset>

						<!-- Select Basic -->
						<div class="form-group">
						<label class="col-md-4 control-label" for="selectSauce">Sauce</label>
						<div class="col-md-4">
						<select id="selectSauce" name="sauce" class="form-control">
						<option value="1">Algerienne</option>
						<option value="2">Samourai</option>
						<option value="3">Tunisienne</option>
						<option value="4">Ketchup</option>
						</select>
						</div>
						</div>

						<!-- Multiple Checkboxes -->
						<div class="form-group">
						<label class="col-md-4 control-label" for="selectOptions">Compléments</label>
						<div class="col-md-4">
						<div class="checkbox">
						<label for="selectOptions-0">
						<input type="checkbox" name="options" id="selectOptions-0" value="1">
						Salade
						</label>
						</div>
						<div class="checkbox">
						<label for="selectOptions-1">
						<input type="checkbox" name="options" id="selectOptions-1" value="2">
						Tomates
						</label>
						</div>
						<div class="checkbox">
						<label for="selectOptions-2">
						<input type="checkbox" name="options" id="selectOptions-2" value="3">
						Oignon
						</label>
						</div>
						</div>
						</div>

						<!-- Select Basic -->
						<div class="form-group">
						<label class="col-md-4 control-label" for="selectBoisson">Boisson</label>
						<div class="col-md-4">
						<select id="selectBoisson" name="drink" class="form-control">
						<option value="1">Coca-Cola</option>
						<option value="2">Fanta</option>
						<option value="3">Ice-tea</option>
						</select>
						</div>
						</div>

						<div class="form-group">
						<label class="col-md-4 control-label" for="selectQuantity">Quantité</label>
						<div class="col-md-4">
						<select id="selectQuantity" name="quantity" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						</select>
						</div>
						</div>
						</fieldset>
						<input type="hidden" name="category" value="1">
						<input type="hidden" name="id" value="1">
						<input type="hidden" name="price" value="5.50">
						<button class="btn btn-success" type="submit">Ajouter au panier</button>
						</form>

						</div><!-- card actions -->
						</div>
						</div>
						';

					}

					?>

				</div>
			</div><!--/.center-->                
		</div><!--/.box-->
	</div><!--/.container-->
</section><!--/#portfolio-->
<br/><br/>
<section id="pizza">
	<div class="container">
		<div class="box">
			<div class="center gap">
				<h2>Pizzas</h2>
				<hr/>
				<div class="container">


					<?php
					for($i = 0; $i < $reps; $i++)
					{
						echo'
						<div class="col-lg-6 col-md-6 col-xs-6 thumb">
						<div class="card">
						<div class="card-image">
						<img class="img-responsive" src="images/pizza.jpeg">
						</div><!-- card image -->

						<div class="card-content">
						<h3>Pizza Rami 
						<br/>
						<span class="label label-primary">5.50 €</span>
						</h3>                  
						<button type="button" id="show" class="btn btn-custom pull-right" aria-label="Left Align">
						<i class="fa fa-ellipsis-v"></i>
						</button>
						</div><!-- card content -->
						<div class="card-action">
						<form class="form-horizontal pizzaForm">
						<fieldset>
						<!-- Select Basic -->
						<div class="form-group">
						<label class="col-md-4 control-label" for="selectBoisson">Boisson</label>
						<div class="col-md-4">
						<select id="selectBoisson" name="drink" class="form-control">
						<option value="1">Coca-Cola</option>
						<option value="2">Fanta</option>
						<option value="3">Ice-tea</option>
						</select>
						</div>
						</div>

						<div class="form-group">
						<label class="col-md-4 control-label" for="selectQuantity">Quantité</label>
						<div class="col-md-4">
						<select id="selectQuantity" name="quantity" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						</select>
						</div>
						</div>
						</fieldset>
						<input type="hidden" name="category" value="2">
						<input type="hidden" name="id" value="1">
						<input type="hidden" name="price" value="5.50">
						<button class="btn btn-success" type="submit">Ajouter au panier</button>
						</form>
						</div><!-- card actions -->
						</div>
						</div>

						';
					}
					?>

				</div>
			</div><!--/.center-->                
		</div><!--/.box-->
	</div><!--/.container-->
</section><!--/#portfolio-->

