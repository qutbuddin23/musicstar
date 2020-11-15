

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login popup box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" type="text/css">
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hover Placeholder With Validation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>


<div class="login-popup">
  	 <div class="box">
  	 	 <div class="img-area">
  	 	 	<div class="img">
  	 	 	</div>
  	 	 	<h1>Your Logo</h1>
  	 	 </div>
  	 	 <div class="form">
  	 	 	<div class="close">&times;</div>
  	 	 	<h1>Log In</h1>
  	 	 	<form>
  	 	 		<div class="form-group">
  	 	 			<input type="text" placeholder="Email" class="form-control">
  	 	 		</div>
  	 	 		<div class="form-group">
  	 	 			<input type="password" placeholder="Password" class="form-control">
  	 	 		</div>
  	 	 		<div class="form-group">
  	 	 			<label><input type="checkbox">
  	 	 				Remember Me
  	 	 			</label>
  	 	 		</div>
  	 	 		<button type="submit" class="btn">Log In</button>
  	 	 	</form>
  	 	 </div>
  	 </div>
  </div> 
<script src="script.js"></script>
</body>
</html>


<style>
body{
	font-family: sans-serif;
	margin:0;
	line-height: 1.5;
}

*{
	box-sizing: border-box;
	margin:0;
}

.login-popup{
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	z-index: 1099;
	background-color:rgba(0,0,0,0.6);
	visibility: hidden;
	opacity: 0;
	transition: all 1s ease;
}
.login-popup.show{
	visibility:visible;
	opacity: 1;
}
.login-popup .box{
	background-color:#ffffff;
	width: 750px;
	position: absolute;
	left: 50%;
	top:50%;
	transform:translate(-50%,-50%);
	display: flex;
	flex-wrap: wrap;
	opacity: 0;
	margin-left: 50px;
	transition: all 1s ease;

}
.login-popup.show .box{
	opacity: 1;
	margin-left: 0;
}
.login-popup .box .img-area{
	flex:0 0 50%;
	max-width: 50%;
	position: relative;
	overflow: hidden;
	padding:30px;
	display: flex;
	align-items: center;
	justify-content: center;
}
.login-popup .box .img-area h1{
	font-size: 30px;
}
.login-popup .box .img-area .img{
	position: absolute;
	left:0;
	top:0;
	width: 100%;
	height: 100%;
	background-image: url('img/bg.jpg');
	background-size: cover;
	background-position: center;
	animation: zoomInOut 7s linear infinite;
	z-index: -1;

}
@keyframes zoomInOut{
	0%,100%{
		transform: scale(1);
	}
	50%{
		transform: scale(1.1);
	}
}
.login-popup .box .form{
	flex:0 0 50%;
	max-width: 50%;
	padding:40px 30px;
}

.login-popup .box .form h1{
	color:#000000;
	font-size: 30px;
	margin:0 0 30px;
}
.login-popup .box .form .form-control{
	height: 45px;
	margin-bottom: 30px;
	width: 100%;
	border:none;
	border-bottom:1px solid #cccccc;
	font-size: 15px;
	color:#000000;
}
.login-popup .box .form .form-control:focus{
	outline: none;
}
.login-popup .box .form label{
	font-size: 15px;
	color:#555555;
}
.login-popup .box .form .btn{
	width: 100%;
	background-color: #E91E63;
	margin-top:40px;
	height: 45px;
	border:none;
	border-radius: 25px;
	font-size: 15px;
	text-transform: uppercase;
	color:#ffffff;
	cursor: pointer;
}
.login-popup .box .form .btn:focus{
	outline: none;
}

.login-popup .box .form .close{
	position: absolute;
	right: 10px;
	top:0px;
	font-size: 30px;
	cursor: pointer;
}

/*responsive*/
@media(max-width: 767px){
	.login-popup .box{
		width: calc(100% - 30px);
	}
	.login-popup .box .img-area{
		display: none;
	}
	.login-popup .box .form{
		flex: 0 0 100%;
        max-width: 100%;
	}
}


    </style>

    
	<script type="text/javascript">
   


  const loginPopup = document.querySelector(".login-popup");
  const close = document.querySelector(".close");


  window.addEventListener("load",function(){
 
   showPopup();
   // setTimeout(function(){
   //   loginPopup.classList.add("show");
   // },5000)

  })

  function showPopup(){
        const timeLimit = 5 // seconds;
        let i=0;
        const timer = setInterval(function(){
         i++;
         if(i == timeLimit){
          clearInterval(timer);
          loginPopup.classList.add("show");
         } 
         console.log(i)
        },1000);
  }


  close.addEventListener("click",function(){
    loginPopup.classList.remove("show");
  })


 
    </script>

    