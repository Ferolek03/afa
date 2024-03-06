<template>
    <div>
      <button @click="showCreate = true">Создать заявку</button>
      
      <div v-if="showCreate">
        <div class="modal">
          <h3>Создание заявки</h3>
          
          <form>
            <input type="text" placeholder="Название" v-model="newRequest.title">
            
            <textarea v-model="newRequest.description"></textarea>
          
            <button @click="createRequest">Создать</button>
            <button @click="showCreate = false">Отмена</button>
          </form>
        </div>
      </div>
  
      <div v-for="request in requests">
        <div class="request">
          <h3>{{ request.title }}</h3>
          <p>{{ request.description }}</p>
  
          <button @click="showEdit = request">Редактировать</button>
          <button @click="deleteRequest(request)">Удалить</button>
        </div>
  
        <div v-if="showEdit === request" class="modal">
          <h3>Редактирование заявки</h3>
          
          <form>
            <input type="text" v-model="showEdit.title">
          
            <textarea v-model="showEdit.description"></textarea>
          
            <button @click="updateRequest(showEdit)">Сохранить</button>
            <button @click="showEdit = null">Отмена</button>
          </form>  
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        showCreate: false,
        showEdit: null,
        newRequest: {}, 
        requests: []
      }
    },
    methods: {
      createRequest() {
        // логика создания заявки 
        this.requests.push(this.newRequest)
        this.newRequest = {}
        this.showCreate = false
      },
      updateRequest(request) {
        // логика обновления заявки
        this.showEdit = null
      },
      deleteRequest(request) {
        // логика удаления заявки  
      }
    }  
  }
  </script>
  
  <style>
  .modal {
    background: #fff;
    padding: 20px; 
  }
  
  button {
    background: #007bff;
    border: none;
    color: #fff;
    padding: 10px;
  }
  </style>