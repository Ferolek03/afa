
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<link rel="stylesheet" href="../css/app.css">    
	<title>Главная страница</title>
    @vite('resources/js/app.js')
</head>
<body>
	<div class="nav">
		<div class="left_bar">
			<img class="logo" src="/image/dark.png" alt="логотип">
				<div class="fone">
					<p>22-22-22</p>
				</div>


				<!-- <div id="app"></div> 
        <DarkTema></DarkTema>
	</div>	 -->
			 



	<div class="right_bar">			
    	<a href="./signup">Регистрация</a>
    	<a href="./login">Вход</a>
    	<a href="./create">Создание заявки</a>
		<a href="./profile.html">Профиль</a>
		<a href="./about">О нас</a>
	</div>
</div>
	<div>
		<div class="main">
			<div class="block_main">
			<div class="left_block">
				<p class="text_main_top">Вкусная пицца с доставкой <span>на дом</span></p>
				<p class="text_main_bot">Доставим пиццу в течении 30 минут</p>
				<button class="btn">заказать</button>
			</div>
			
		</div>
		
        <div id="app">
        <Slider>
		</Slider>
         </div>

		 <!-- <div id="create">
			<Create />
		 </div> -->


		<!-- <div id="add">
			<AddFile />
		</div> -->


		
	</div>
	
    
</body>
</html>

<style>*{
	margin: 0;
	padding: 0;	
}

body{
	background-color: #ffffff;
}

img{
	width: 40px;
	height: 40px;
}

.nav{
	display: flex;
	justify-content: space-between;
	margin-top: 35px;
}

.logo{
	width: 60px;
	height: 60px;
}

.left_bar{
	margin-left: 50px;
	display: flex;
}

.left_bar>img{
	margin-left: 20px;
}

.fone{
	display: flex;
	align-items: center;
	font-size: 26px;
}

.fone>img{
	margin-left: 20px;
	margin-right: 20px;
	width: 30px;
	height: 30px;
}

.right_bar{
	margin-right: 50px;
}

.right_bar>a{
	text-decoration: none;
	color: black;
	font-size: 28px;
	margin-left: 15px;
}

/* main */
.block_main{
	display: flex;
	justify-content: space-around;

}

.left_block{
	margin-top: 50px;
}

.btn{
	background-color: #F29857;
	color: white;
	width: 240px;
	height: 60px;
	font-size: 28px;
	border-radius: 30px;
	border: 0;
	margin-top: 50px;
	display: flex;
	justify-content: center;
	align-items: center;
}

.text_main_top{
	font-size: 72px;
	width: 600px;
}

span{
	color: #D03100;
}

.text_main_bot{
	color: #828282;
	font-size: 30px;
}

.main_img{
	width: 700px;
	height: 700px;
}

.slider{
	background-color: #F29857;
	width: 100%;
	height: 300px;
	margin-top: -200px;
	position: absolute;
}

.slider>p{
	font-size: 72px;
	text-align: center;
}


.slide{
	background-color: rgb(116, 149, 179);
	width: 800px;
	height: 250px;
	border-radius: 25px;
	display: flex;
	justify-content: space-around;
	align-items: center;
	margin: 0 auto;
}

.slide_text{
	color: #000000;
	font-size: 72px;
}

.slide_text_bot{
	font-size: 30px;
	color: #222222;
}

.slide_right>img{
	width: 280px;
	height: 220px;
}

/* footer */

</style>