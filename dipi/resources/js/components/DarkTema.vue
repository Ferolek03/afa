

<template>
  <div>
    <img :src="currentIcon1">
    <img :src="currentIcon2">
    <img :src="currentImage" @click="changeTheme($event)">
  </div>
</template>

<script>
import lightImg from '@/public/image/dark.png';
import darkImg from '@/public/image/light.png';
import icon1Light from '@/public/image/mask_group.png';
import icon2Light from '@/public/image/mask_group-1.png';
import icon1Dark from '@/public/image/pngwing.com (4).png';
import icon2Dark from '@/public/image/pngegg.png';

export default {
  data() {
    return {
      darkTheme: false,
      images: {
        light: lightImg,
        dark: dark,
      },
      icons: {
        light: {
          icon1: import('@/public/image/mask_group.png'),
          icon2: import('@/public/image/mask_group-1.png'),
        },
        dark: {
          icon1: import('@/public/image/pngwing.com (4).png'),
          icon2: import('@/public/image/pngegg.png'),
        },
      },
    };
  },
  computed: {
    currentImage() {
      return this.darkTheme ? this.images.dark : this.images.light;
    },
    currentIcon1() {
      return this.darkTheme ? this.icons.dark.icon1 : this.icons.light.icon1;
    },
    currentIcon2() {
      return this.darkTheme ? this.icons.dark.icon2 : this.icons.light.icon2;
    },
  },
  methods: {
    changeTheme(event) {
      event.preventDefault();
      this.darkTheme = !this.darkTheme;
      document.body.classList.toggle('light-theme');
      document.body.classList.toggle('dark-theme');
    },
  },
};
</script>

<style>
:root {
  --color-background-light: #ffffff;
  --color-background-dark: #000000;
  --color-text-light: #000000;
  --color-text-dark: #ffffff;
  --color-text-light: #000000;
  --another-color-text-light: #000000;
  
  
}

body.light-theme {
  background-color: var(--color-background-light);
  color: var(--color-text-light);
}

body.dark-theme {
  background-color: var(--color-background-dark);
  color: var(--color-text-dark);
}

body.light-theme a {
  color: var(--color-text-light);
}

body.dark-theme a {
  color: var(--color-text-dark);
}

body.light-theme p {
  color: var(--color-text-light);
}

body.dark-theme p {
  color: var(--color-text-dark);
}



</style>