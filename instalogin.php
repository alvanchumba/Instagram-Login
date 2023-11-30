<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Instagram Log in form design</title>
    
</head>
<body>
	<style type="text/css">
		body{
	margin: 0;
	padding: 0;
	display: flex;
	min-height: 100vh;
	align-items: center;
	justify-content: center;
	background: linear-gradient(#fb009f,#fe0202);
}

.container{
	text-align: center;

}
.text{
	color: #fff;
	letter-spacing: 1px;
	margin: 10px;
}
.page{
	width: 350px;
	background: #fff;
	border-radius: 5px;
	padding-bottom: 15px;
}
.title{
	padding: 30px 0;
	text-transform: capitalize;
	font-size: 25px;
	font-family: 'Pacifico',cursive;
}
form{
	width: 75%;
	display: flex;
	flex-direction: column;
	position: relative;
	left: 50%;
	transform: translateX(-50%);
}
form input{
	margin-bottom: 5px;
	border: 1px solid rgba(0, 0, 0, 0.4);
	border-radius: 3px;
	outline: none;

}
form input:focus{
	border: 1px solid rgba(0, 0, 0, 0.7);
    background: #efefef;
}
input[type="text"],input[type="password"]{
	padding-left: 10px;
	position: relative;
	height: 35px;
	font-size: 17px;
}
input::placeholder{
	font-weight: normal;
	font-size: 13px;
	transition: 0.3s ease;
}
input:focus::placeholder{
	position: absolute;
	font-size: 10px;
	transform: translateY(-13px);
}

	</style>


<div class="cointainer">
	<div class="text">Log in to continue</div>
	<div class="page">
		<div class="title">Instagram</div>
		<form>
			<input type="text" placeholder="Phone number,username, or email" name="">
			<input type="password" placeholder="password" name="">
			<button>Log in</button>
			<div class="option">OR</div>
		</form>
		<div class="fblink"></div>
		<span class="fab fa-facebook"></span>
		<a href="#">Log in with Facebook</a>
	</div>
	<div class="forget-id">
		<a href="#">Forget password?</a>
	</div>
	<div class="signup"></div>
	<p>Don't have an account?<a href="#">Sign up</a></p>
</div>
</body>
</html>