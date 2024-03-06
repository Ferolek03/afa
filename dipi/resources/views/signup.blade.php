<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" href="./src/assets/signup.css">
	<title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
	<div class="nav">
		<div class="left_bar">
			<img class="logo" src="./src/components/icons/pngwing.com (2).png" alt="логотип">
				<div class="fone">
					<img src="./src/components/icons/Vector-1.png" alt="">
					<p>22-22-22</p>
				</div>
			
			
                
    
		</div>
		<div class="right_bar">
            <a href="./">Домой</a>
            <a href="./login.html">Вход</a>
			<a href="./page_pizza.html">Меню</a>
            <a href="./generate.html">Генератор</a>
			<a href="./carts.html">Корзина</a>
			<a href="./page_about.html">О нас</a>
		</div>
	</div>


    <div id="sign">
        <SignUp />
    </div>



    <div id="footer">
        <Footer />
    </div>
</body>
</html>

<style>
    *{
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
    font-size: 26px;
    margin-left: 15px;
}

.main{
    margin: 0 auto;
    margin-top: 100px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #bbbbbb;
    border-radius: 40px;
}

.main>input{
    width: 230px;
    border: 0;
    margin-top: 20px;
    padding: 20px;
    background-color: #F3F3F3;
}

.text_top{
    font-size: 25px;
}

.text_bot{
    text-align: center;
    font-size: 18px;
}

.btn{
    background-color: #2da764;
    color: white;
    width: 180px;
    height: 40px;
    font-size: 21px;
    border-radius: 30px;
    border: 0;
    margin-top: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 30px;
}

</style>