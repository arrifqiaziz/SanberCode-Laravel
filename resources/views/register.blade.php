<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
</head>
<body>
	<h2>Buat Account Baru</h2>

	<h4>Sign Up Form</h4>

	<p>First Name</p>
	<form>
		<input type="text" placeholder="Nama Depan">
	</form>

	<p>Last Name</p>
	<form>
		<input type="text" placeholder="Nama Belakang">
	</form>

	<p>Gender</p>
	<input type="radio" name="gender" value="0">Laki-laki <br>
	<input type="radio" name="gender" value="1">Perempuan <br>

	<p>Nationality</p>
	<select>
		<option>Indonesian</option>
		<option>Malaysian</option>
		<option>Australian</option>
		<option>Singapore</option>
	</select>

	<p>Language Spoken</p>
	<input type="checkbox" name="bahasa" value="0"> Bahasa Indonesia <br>
	<input type="checkbox" name="bahasa" value="1"> English <br>
	<input type="checkbox" name="bahasa" value="2"> Other <br>

	<p>Bio:</p>
	<form>
		<textarea placeholder="Bio" cols="30" rows="10"> </textarea>
	</form>

	<button> <a href="/welcome"> Sign Up </a> </button>  

	<p> &copy; Arrifqi Aziz A</p>

</body>
</html>