<template>
    <div class="footer">
		<img class="logos" src="./src/components/icons/pngwing.com (2).png" alt="логотип">
		<div class="fones">
			<p class="dost">Доставка</p>
			<div class="fone">
				<img src="./src/components/icons/Vector-1.png" alt="">
				<p>22-22-22</p>
			</div>
		</div>
		<div class="time">
			<p class="time_text">ПН-ПТ: 11:00-23:00</p>
			<p class="time_text">СБ-ВС: 12:00-23:00</p>
		</div>
	</div>
  </template>
  
  <script>
  export default {
    
  };
  </script>
  
  
  
  <style scoped>
  .footer{
	width: 100%;
	
	height: 100px;
	margin-top: 350px;
	display: flex;
	justify-content: space-around;
}

.logos{
	width: 100px;
	height: 100px;
}

.dost{
	font-size: 35px;
	margin-left: 25px;
	margin-bottom: 10px;
	margin-top: 10px;
}

.time_text{
	font-size: 35px;
	margin-top: 10px;
}

.image_footer>img{
	width: 60px;
	height: 60px;
	padding-left: 50px;
	margin-top: 20px;
}
  </style>