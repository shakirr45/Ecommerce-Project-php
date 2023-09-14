<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    *{
   margin:0px;
   padding:0px;
   box-sizing: border-box;
   font-family: sans-serif;
}
body{
	background-color: #dee0e3;
}
.heading{
	text-align: center;
	margin-top: 25ox;
}
.heading h1{
	font-size: 50ox;
	color: #36455c;
	margin-bottom: 10px;
}
.heading p{
	font-size: 20px;
	color: #666;
	margin: auto;
}
.about-us{
	display: flex;
	align-items: center;
	width: 85%;
	margin: auto;
}
.about-us img{
	flex:0 50%;
	max-width: 50%;
	height: auto;
}
.content{
	padding: 35px;
}
.content h2{
	color: #36455c;
	font-size: 24px;
	margin: 15px 0px;
}
.content p{
	color: #666;
	font-size: 18px;
	line-height: 1.5;
	margin:15px 0px;
}
.read-more-btn{
	display: inline-block;
	color: #fff;
	background-color: #0084ff;
	border: none;
	border-radius: 5px;
	padding:12px 20px;
	font-size: 18px;
	cursor: pointer;
	transition: 0.2s ease;
}
.read-more-btn:hover{
	background-color: #006dd6;
}
@media(max-width:768px){
	.about-us{
		flex-direction: column;
	}
	.about-us img{
		flex:0 100%;
		max-width: 100;
	}
	.content{
		flex:0 100%;
		max-width: 100%;
		padding: 15px;
	}

}
</style>
</head>

<body>

<a href="fst2.php"><button class="read-more-btn">Back</button></a>

 <div class="heading">

    <h1>About Us</h1>
    <p>Welcome to our website. We're thrilled to have you here and share our story with you.</p>
 </div>
 <section class="about-us" >

<img src="rsz_1dried-dates-in-wooden-bowl-royalty-free-image-1640107942.jpg">
<div class="content">
    <h2>At our website, we are more than just an online retailer. We are a team of passionate individuals who are dedicated to providing you with the best shopping experience possible.</h2>
    <p> Our journey began with a simple idea: to create a space where people can discover high-quality products that enrich their lives.</p>
    <button class="read-more-btn">Read More</button>
    <p></p>
</div>
 </section>

    
</body>
</html>