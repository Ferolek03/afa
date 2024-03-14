<!-- <template>
  <div>
    <form @submit.prevent="submitForm">
      <div class="main">
        <p class="text_top">Вход</p>
        <p class="text_bot">Введите данные, указанные при регистрации</p>
        <input type="text" placeholder="Ваша почта" v-model="email">
        <input type="password" placeholder="Пароль" v-model="password">
        <button type="submit" class="btn">Войти</button>
      </div>
    </form>

    
  </div>
</template> -->

<template>
  <div class="div">
    <div class="div-2">
      <div class="div-3">Вход</div>
      <div class="div-4">Введите данные, <br />указанные при регистрации</div>
      <div class="div-5">
        <!-- <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/c340ed060f67a2f9f9a612773259c0e3bb737c1f5a14c7abc863a90afb23e88d?"
          class="img"
        /> -->
        <div class="div-6">Ваша почта</div>
      </div>
      <div class="div-7">
        <!-- <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/db9f576fc4128b2237dc073d7864c2096dad0b2a5fa464f51b4111bcc4c4ecbb?"
          class="img"
        /> -->
        <div class="div-8">Пароль</div>
      </div>
      <div class="div-9">
        <!-- <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/ee4ac2d3363aa3d3874c2d78916a008fd6b046f53710fad64ae353c5a9afb966?"
          class="img-2" -->
        />ВОЙТИ
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: ''
    };
  },
  methods: {
    submitForm() {
      axios.post('http://your-backend-url.com/login', {
        email: this.email,
        password: this.password
      })
      .then(response => {
        console.log('Ответ от сервера:', response.data);
      })
      .catch(error => {
        console.error('Ошибка при отправке данных на сервер:', error);
      });
    }
  }
};
</script>

<style scoped>
.div {
  border-radius: 70px;
  background-color: #fff;
  display: flex;
  max-width: 560px;
  justify-content: center;
  align-items: center;
  font-weight: 400;
  padding: 50px 60px;
}
@media (max-width: 991px) {
  .div {
    padding: 0 20px;
  }
}
.div-2 {
  display: flex;
  width: 333px;
  max-width: 100%;
  flex-direction: column;
}
.div-3 {
  color: #000;
  text-align: center;
  align-self: center;
  font: 700 30px Gilroy, sans-serif;
}
.div-4 {
  color: #828282;
  text-align: center;
  margin-top: 20px;
  font: 25px/38px Gilroy, sans-serif;
}
.div-5 {
  border-radius: 15px;
  background-color: #f3f3f3;
  display: flex;
  justify-content: space-between;
  gap: 20px;
  font-size: 15px;
  color: rgba(130, 130, 130, 0.67);
  line-height: 150%;
  margin: 32px 0 0 10px;
  padding: 37px 23px;
}
@media (max-width: 991px) {
  .div-5 {
    margin-right: 8px;
    padding: 0 20px;
  }
}
.img {
  aspect-ratio: 1;
  object-fit: auto;
  object-position: center;
  width: 16px;
}
.div-6 {
  font-family: Gilroy, sans-serif;
  flex-grow: 1;
  flex-basis: auto;
  margin: auto 0;
}
.div-7 {
  border-radius: 15px;
  background-color: #f3f3f3;
  display: flex;
  justify-content: space-between;
  gap: 20px;
  font-size: 15px;
  color: rgba(130, 130, 130, 0.67);
  white-space: nowrap;
  line-height: 150%;
  margin: 15px 0 0 10px;
  padding: 37px 23px;
}
@media (max-width: 991px) {
  .div-7 {
    margin-right: 8px;
    white-space: initial;
    padding: 0 20px;
  }
}
.div-8 {
  font-family: Gilroy, sans-serif;
  align-self: start;
  flex-grow: 1;
  flex-basis: auto;
}
.div-9 {
  display: flex;
  flex-direction: column;
  text-shadow: 0px 0.952px 0px rgba(255, 255, 255, 0.25);
  position: relative;
  fill: linear-gradient(
    180deg,
    rgba(255, 111, 111, 0.84) 0%,
    rgba(190, 10, 10, 0.77) 100%
  );
  overflow: hidden;
  align-self: center;
  aspect-ratio: 4.03;
  margin-top: 19px;
  justify-content: center;
  color: #fff;
  white-space: nowrap;
  text-align: center;
  letter-spacing: 1.71px;
  padding: 27px 4px;
  font: 700 17px Gilroy, sans-serif;
}
@media (max-width: 991px) {
  .div-9 {
    white-space: initial;
  }
}
.img-2 {
  position: absolute;
  inset: 0;
  height: 100%;
  width: 100%;
  object-fit: cover;
  object-position: center;
}
.div-10 {
  position: relative;
}
</style>