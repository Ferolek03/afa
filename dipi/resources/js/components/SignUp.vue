<template>
    <div>
      <form @submit.prevent="submitForm">
        <div class="main">
          <p class="text_top">Регистрация</p>
          <p class="text_bot">Убедитесь, что вы правильно заполнили все поля</p>
          <input type="text" placeholder="Ваше имя" id="name" v-model="name" required>
          <input type="tel" placeholder="Ваш номер телефона"  id="number" v-model="number" required>
          <input type="date" placeholder="Дата вашего рождения"  id="data" v-model="data" required>
          <input type="text" placeholder="Ваша почта"  id="email" v-model="email" required>
          <input type="text" placeholder="Пароль"  id="password" v-model="password" required>
          <button type="submit" class="btn">Сохранить</button>
      </div>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        name: '',
        number: '',
        data: '',
        email: '',
        password: ''
      };
    },
    methods: {
      submitForm() {
        console.log('Форма отправлена');
      }
    }
  };
  </script>
  
  
  <style scoped>
  form > div {
    width: 500px;
    height: 500px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  form > div > label {
    width: 120px;
  }
  
  form > div > input {
    margin: 10px 0;
    width: 250px;
    height: 30px;
    padding-left: 10px;
    border: 2px solid #2c3e50;
    border-radius: 5px;
  }
  
  form > div > input:focus {
    outline: none;
    border: 2px solid rgb(102, 101, 119);
  }
  
  form > input {
    margin-right: 20px;
    width: 200px;
    height: 35px;
    border: 2px solid #2c3e50;
    border-radius: 5px;
    background: rgba(91, 92, 95, 0.8);
    cursor: pointer;
  }
  form > div > button {
    margin: 10px 0;
    width: 250px;
    height: 30px;
    padding-left: 10px;
    border: 2px solid #2c3e50;
    border-radius: 5px;
  }
  
  form > div > button:focus {
    outline: none;
    border: 2px solid rgb(43, 36, 248);
  }
  
  form > button {
    margin: 20px 0;
    width: 200px;
    height: 35px;
    border: 2px solid #2c3e50;
    border-radius: 5px;
    background: rgba(204, 205, 211, 0.8);
    cursor: pointer;
  }
  </style>