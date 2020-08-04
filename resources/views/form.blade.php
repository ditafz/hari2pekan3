<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Akun</title>
</head>
<body>
	<h1>Buat Accont Baru!</h1>
	<h3>Sign Up Form</h3>
	<form action="{{url('/selamat-datang')}}" method="get">
		
		@csrf

		<label for="fname">First Name :</label> <br><br>
		<input type="text" name="fname" id="fname"> <br><br>
		<label for="lname">Last Name :</label> <br><br>
		<input type="text" name="lname" id="lname"> <br>


		<p>Gender :</p>
		<input type="radio" name="gender" id="male" value="male">
  		<label for="male">Male</label> <br>
		<input type="radio" name="gender" id="female" value="female">
		<label for="female">Female</label> <br>
		<input type="radio" name="gender" id="other" value="other">
		<label for="other">Other</label> <br>

		<p>Nationality :</p>
		<select id="nationality">
			<option value="Indonesian">Indonesian</option>
			<option value="Singaporean">Singaporean</option>
			<option value="Malaysian">Malaysian</option>
			<option value="Australian">Australian</option>
		</select>
		<br>

		<p>Language Spoken</p>
		<input type="checkbox" name="bahasa1" id="bahasa1" value="Indonesia">
 		<label for="bahasa1"> Bahasa Indonesia </label> <br>
 		<input type="checkbox" name="bahasa2" id="bahasa2" value="English">
 		<label for="bahasa2"> English </label> <br>
 		<input type="checkbox" name="otherbahasa" id="otherbahasa" value="Other">
 		<label for="otherbahasa"> Other </label> <br><br>

 		<label for="bio"> Bio : </label> <br><br>
 		<textarea id="bio" name="bio"> </textarea> <br>

 		<button type="submit" name="submit" >Submit</button>
	</form>
</body>
</html>