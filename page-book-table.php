<?php get_header(); ?>

<aside class="book-table">
	<h2>Book Table</h2>

	<form>
		<label for="first-name">First Name:</label>
		<input type="text" id="first-name" name="first-name" placeholder="Please enter your first name" />
		</br />
		<label for="last-name">Last Name:</label>
		<input type="text" id="last-name" name="last-name" placeholder="Please enter your last name" />
		</br />
		<label for="e-mail">E-mail:</label>
		<input type="e-mail" id="e-mail" name="e-mail" placeholder="Please enter your e-mail address" />
		</br />
		<label for="date time">Date and Time:</label>
		<input type="date" id="date" />
		<input type="time" id="time" />
		<br />
		<label for="last-name">Number of Guests:</label>
		<input type="number" id="number-of-guests" name="number-of-guests" />
		<input type="submit" value="Book!" name="reservation-button" />

	</form>
</aside>

<?php get_footer(); ?>