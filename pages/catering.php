
	<h1 class="center-align divider-line">Catering</h1>
	<div class="row">
	<p class="flow-text">Catering Request Form</p>
    <form class="col s12" action="" method="POST">
      <div class="row">
        <div class="input-field col s12">
			<input placeholder="First Name" class="validate" type="text" name="first_name">
			<label for="first_name">First Name</label>
		</div>
		<div class="input-field col s12">
			<input placeholder="Last Name" class="validate" type="text" name="last_name">
			<label for="last_name">Last Name</label>
		</div>
		<div class="input-field col s12">
          	<input id="email" type="email" class="validate" name="email">
          	<label for="email" >Email</label>
		</div>
		<div class="input-field col s12">
          	<input id="phone" type="number" class="validate" name="phone">
          	<label for="phone" >Phone</label>
		</div>
		<div class="input-field col s12">
			<textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
          	<label for="textarea1">Tell use where and when you'd like catering.</label>
		</div>
			<button class="btn waves-effect waves-light" type="submit" name="submit">Submit
		    	<i class="material-icons right">send</i>
	    	</button>
        <?php echo '<blockquote><p class="flow-text">'.$user_message .'</p></blockquote>';   ?>
      </div>
    </form>
  </div>