<template>
  <div class="container">
    <input type="file" @change="handleFileUpload">
    <button @click="uploadFile">Upload</button>
    <div v-if="uploadedFile" class="file-info">
      <p>File Name: {{ uploadedFile.name }}</p>
      <p>File Size: {{ uploadedFile.size }} bytes</p>
      <p>File Type: {{ uploadedFile.type }}</p>
      <button @click="deleteFile" class="delete">Delete File</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      file: null,
      uploadedFile: null
    };
  },
  methods: {
    handleFileUpload(event) {
      this.file = event.target.files[0];
    },
    uploadFile() {
      if (this.file) {
        this.uploadedFile = {
          name: this.file.name,
          size: this.file.size,
          type: this.file.type
        };
        // Здесь можно добавить логику для загрузки файла на сервер
      } else {
        alert('Please select a file to upload');
      }
    },
    deleteFile() {
      this.uploadedFile = null;
      // Дополнительная логика для удаления файла, если необходимо
    }
  }
};
</script>


<style>
.container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="file"] {
  margin-bottom: 10px;
}

button {
  padding: 5px 10px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

.file-info {
  margin-top: 10px;
}

.file-info p {
  margin: 5px 0;
}

button.delete {
  margin-top: 10px;
  background-color: #dc3545;
}
</style>