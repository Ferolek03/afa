vue
<template>
  <div>
    <input type="file" @change="handleFileUpload">
    <button @click="uploadFile">Upload</button>
    <div v-if="uploadedFile">
      <p>File Name: {{ uploadedFile.name }}</p>
      <p>File Size: {{ uploadedFile.size }} bytes</p>
      <p>File Type: {{ uploadedFile.type }}</p>
      <button @click="deleteFile">Delete File</button>
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