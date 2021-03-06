
<html class="no-js" lang="en">
  <head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Foundation | Welcome</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<script src="js/modernizr.js"></script>
	<script src="js/jquery.js"></script>
	<style type="text/css">
		.drop{
			text-shadow: 0px 1px 1px #4d4d4d;
			font-size:20px;
			color: #D8D8D8;
		}
		.fullBG{

		}
	</style>
  </head>
  <body>
	
	<div class="row">
	  <div class="large-12 columns">
		<div class="panel" style= "background-image:url('img/images_3137_1.jpg'); height: 400px;">
			<h3 class = "drop" style = "font-size: 40px; color: #D8D8D8;">Best Contractors</h3>
			<h3 class = "drop" style = "font-size: 40px; color: #D8D8D8;">No Hassle</h3>
			<div class="row drop" >
				<div class="large-6 medium-6 columns">
					<label class = "drop">Zip-Code</label>
					<input type="text" placeholder="Enter Zip-Code" />
				</div>
				<div class="large-6 medium-6 columns">
					<label class = "drop">Service</label>
					<select>
						<option value="plumbing">Plumbing</option>
						<option value="electrical">Electrical</option>
						<option value="cleaning">Cleaning</option>
						<option value="landscape">Land</option>
					  </select>
				</div>
			</div>
			<div class="large-12 columns">
				<a href="#" class="small button">Hire</a>
			</div>
			
		</div>
	  </div>
	</div>

	<div class="row">
	  <div class="large-12 columns">
		<h5>Here&rsquo;s your basic grid:</h5>
		<!-- Grid Example -->

		<div class="row">
		  <div class="large-12 columns">
			<div class="callout panel">
			  <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.panel element so you can see where the columns are - its not required at all for the grid.</p>
			</div>
		  </div>
		</div>
		<div class="row">
		  <div class="large-6 medium-6 columns">
			<div class="callout panel">
			  <p>Six columns</p>
			</div>
		  </div>
		  <div class="large-6 medium-6 columns">
			<div class="callout panel">
			  <p>Six columns</p>
			</div>
		  </div>
		</div>
		<div class="row">
		  <div class="large-4 medium-4 small-4 columns">
			<div class="callout panel">
			  <p>Four columns</p>
			</div>
		  </div>
		  <div class="large-4 medium-4 small-4 columns">
			<div class="callout panel">
			  <p>Four columns</p>
			</div>
		  </div>
		  <div class="large-4 medium-4 small-4 columns">
			<div class="callout panel">
			  <p>Four columns</p>
			</div>
		  </div>
		</div>
		
		<hr />
				
		<h5>We bet you&rsquo;ll need a form somewhere:</h5>
		<form>
				  <div class="row">
					<div class="large-12 columns">
					  <label>Input Label</label>
					  <input type="text" placeholder="large-12.columns" />
					</div>
				  </div>
				  <div class="row">
					<div class="large-4 medium-4 columns">
					  <label>Input Label</label>
					  <input type="text" placeholder="large-4.columns" />
					</div>
					<div class="large-4 medium-4 columns">
					  <label>Input Label</label>
					  <input type="text" placeholder="large-4.columns" />
					</div>
					<div class="large-4 medium-4 columns">
					  <div class="row collapse">
						<label>Input Label</label>
						<div class="small-9 columns">
						  <input type="text" placeholder="small-9.columns" />
						</div>
						<div class="small-3 columns">
						  <span class="postfix">.com</span>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="large-12 columns">
					  <label>Select Box</label>
					  <select>
						<option value="husker">Husker</option>
						<option value="starbuck">Starbuck</option>
						<option value="hotdog">Hot Dog</option>
						<option value="apollo">Apollo</option>
					  </select>
					</div>
				  </div>
				  <div class="row">
					<div class="large-6 medium-6 columns">
					  <label>Choose Your Favorite</label>
					  <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
					  <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
					</div>
					<div class="large-6 medium-6 columns">
					  <label>Check these out</label>
					  <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
					  <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
					</div>
				  </div>
				  <div class="row">
					<div class="large-12 columns">
					  <label>Textarea Label</label>
					  <textarea placeholder="small-12.columns"></textarea>
					</div>
				  </div>
				</form>
	  </div>
	
	<script src="js/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>
  </body>
</html>
