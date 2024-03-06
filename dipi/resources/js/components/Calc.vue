<template>
    <div>
      <h2>Калькулятор стоимости перевозки</h2>
      <form @submit.prevent="calculateCost">
        <div>
          <label for="weight">Вес груза (кг):</label>
          <input v-model.number="weight" type="number" id="weight" required>
        </div>
        <div>
          <label for="distance">Расстояние (км):</label>
          <input v-model.number="distance" type="number" id="distance" required>
        </div>
        <button type="submit">Рассчитать стоимость</button>
      </form>
      <div v-if="cost >= 0">
        <h3>Предварительная стоимость: {{ cost }} руб.</h3>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        weight: 0,
        distance: 0,
        cost: -1,
      };
    },
    methods: {
      calculateCost() {
        // Примерная стоимость за кг на км
        const pricePerKgPerKm = 0.5;
        this.cost = this.weight * this.distance * pricePerKgPerKm;
      },
    },
  };
  </script>