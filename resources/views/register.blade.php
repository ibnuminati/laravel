<!DOCTYPE html>
<html>
  <head>
	   <title>Form</title>
  </head>
  <body>
 
    <h1>Buat Account Baru!</h1>
	
	<h3>Sign Up Form</h3>
	<form action="/welcome" method="POST">
		@csrf
	<label for="firstname">First name:</label><br><br>
	<input type="text" id="firstname" name="nama">
	  <br><br>
    <label for="lastname">Last name:</label><br><br>
	<input type="text" id="lastname" name="nama">
	  <br><br>
	<label>Gender</label>
	<br><br>
	  <input type="radio" name="gender" value="0">Male <br>
	  <input type="radio" name="gender" value="1">Female <br>
	  <input type="radio" name="gender" value="2">Other
	<br><br>
	<label>Nationality:</label>
	<br><br>
	  <select>
		<option>Indonesian</option>
		<option>Singaporean</option>
		<option>Malaysian</option>
		<option>Australian</option>
	  </select>
	<br><br>
	<label>Language Spoken:</label>
	<br><br>
	  <input type="checkbox" value="0" >Bahasa Indonesia <br>
	  <input type="checkbox" value="1" >English <br>
	  <input type="checkbox" value="2" >Other <br>
	<br>
	<label>Bio:</label>
	 <br><br>
	  <textarea cols="30" rows="7"></textarea>

	  <button type="submit">Sign Up</button>
  </form>
</body>
</html>		