<?php
include("includes/html_start.php");
?>
<a href="/">Home</a><br/>
<h1>Submit a New Review</h1>

<form method="get" action="handle_review.php">
	<table>
		<tr>
			<td>Site name</td>
			<td><input type="text" name="site_name" size=10 maxlength=100 /></td>
		</tr>
		<tr>
			<td>Site description</td>
			<td>
				<textarea rows="4" cols="30" name="site_description"></textarea>
			</td>
		</tr>
		<tr>
			<td>Rating</td>
			<td>
				<select name="star_rating"> 
					<option value ="1"> 1 star </option>
					<option value="2">2 stars </option>
					<option value="3">3 stars </option>
					<option value="4">4 stars </option>
					<option value="5">5 stars </option>
					<option value="6">6 stars </option>
				</select>
			</td>
		</tr>
	</table>
	<input type="submit" value= "submit"/>
</form>

<?php
include ("includes/html_stop.php");
?>