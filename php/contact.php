<?php
echo '
	<h2>CONTACT US</h2>	
	<h3>Interested in Studying with NLAC?</h3>
	<p>Fill in the form below to register your interest with NLAC. All information submitted will be held in accordance with our data protection policy which can be found <a href="dataprotection"> here</a>. Upon submitting the form below a member of the NLAC team will be in touch using the supplied email address.</p>
	<div class="form-holder">
		<form id="info-form" data-parsley-validate>
			<div class="label">Note: a (*) indicates a required field</div>
			<div class="label">Title:</div>
			<select class="answer">
				<option>Mr</option>
				<option>Mrs</option>
				<option>Ms</option>
				<option>Miss</option>
				<option>Dr</option>
				<option>Other</option>
			</select> *
			
			<div class="label">First Name: </div>
			<div class="answer"><input></input> *</div>
			<div class="label">Surname: </div>
			<div class="answer"><input></input> *</div>

			<div class="label">E-mail address:</div>
			<div class="answer"><input></input> *</div>
			<div class="label">Which course are you interested in:</div>
			<select class="answer">
				<option>Online Classroom</option>
				<option>Online Classroom Live</option>
			</select> *
			<div class="label">Anything else you want to tell us?</div>
			<div class="answer"><textarea rows="10" cols="50"></textarea></div>
			<p class="label">By clicking submit you are agreeing to the Terms and Conditions set out by NLAC which can be read <a href="tandc">here</a>.</p>

			<input type="submit" value="Submit">
		</form>
	</div>

	<h5>E-mail us:</h5>
	<p><mailto>enquiries@naginlad.com</mailto></p>

	<h5>Call us:</h5>
	<p></p>

	<h5>Find us on Facebook:</h5>
	<p></p>
';
?>