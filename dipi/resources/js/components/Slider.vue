<template>
  <div>
    <h1>Vue Carousel</h1>
    <div class="card-carousel-wrapper">
      <div class="card-carousel--nav__left" @click="moveCarousel(-1)" :class="{ 'disabled': atHeadOfList }"></div>
      <div class="card-carousel">
        <div class="card-carousel--overflow-container">
          <div class="card-carousel-cards">
            <div class="card-carousel--card" v-for="(item, index) in visibleItems" :key="index">
              <div class="card-carousel--card--footer">
                <p>{{ item.name }}</p>
                <p class="tag" :class="{ 'secondary': index > 0 }" v-for="(tag, tagIndex) in item.tag" :key="tagIndex">{{ tag }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-carousel--nav__right" @click="moveCarousel(1)" :class="{ 'disabled': atEndOfList }"></div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      startIndex: 0,
      windowSize: 3,
      items: [
        { name: 'Kin Khao', tag: ["Thai"] },
        { name: 'Jū-Ni', tag: ["Sushi", "Japanese", "$$$"] },
        { name: 'Delfina', tag: ["Pizza", "Casual"] },
        { name: 'San Tung', tag: ["Chinese", "$$"] },
        { name: 'Anchor Oyster Bar', tag: ["Seafood", "Cioppino"] },
        { name: 'Locanda', tag: ["Italian"] },
        { name: 'Garden Creamery', tag: ["Ice cream"] },
      ]
    }
  },
  computed: {
    atEndOfList() {
      return this.startIndex + this.windowSize >= this.items.length;
    },
    atHeadOfList() {
      return this.startIndex === 0;
    },
    visibleItems() {
      return this.items.slice(this.startIndex, this.startIndex + this.windowSize);
    }
  },
  methods: {
    moveCarousel(direction) {
      if (direction === 1 && !this.atEndOfList) {
        this.startIndex++;
      } else if (direction === -1 && !this.atHeadOfList) {
        this.startIndex--;
      }
    },
  }
};
</script>

<style scoped>
.card-carousel--nav__left.disabled,
.card-carousel--nav__right.disabled {
  opacity: 0.2;
  border-color: black;
}

.card-carousel--overflow-container {
  display: flex;
}



.card-carousel-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 20px 0 40px;
  color: #666a73;
}

.card-carousel {
  display: flex;
  justify-content: center;
  width: 740px;
}

.card-carousel-cards {
  display: flex;
  flex-wrap: nowrap; /* Предотвращает перенос элементов на новую строку */
}

.card-carousel--overflow-container {
  overflow: hidden;
}
.card-carousel--card {
  flex: 0 0 auto; /* Отключает увеличение размера элементов */
  margin-right: 20px; 
  width: 170px;
  border: 3px solid yellow;/* Расстояние между элементами */
}

.card-carousel--nav__left, 
.card-carousel--nav__right {
  display: inline-block;
  width: 15px;
  height: 15px;
  padding: 10px;
  box-sizing: border-box;
  border-top: 2px solid #42b883;
  border-right: 2px solid #42b883;
  cursor: pointer;
  margin: 0 20px;
  transition: transform 150ms linear;
}

.card-carousel--nav__left[disabled], 
.card-carousel--nav__right[disabled] {
  opacity: 0.2;
  border-color: black;
}

.card-carousel--nav__left {
  transform: rotate(-135deg);
}

.card-carousel--nav__left:active {
  transform: rotate(-135deg) scale(0.9); 
}

.card-carousel--nav__right {
  transform: rotate(45deg);
}

.card-carousel--nav__right:active {
  transform: rotate(45deg) scale(0.9);
}

/* Остальные стили */
  </style>