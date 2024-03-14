import './bootstrap';
import {createApp} from 'vue';
import SignUp from './components/SignUp.vue';
import Login from './components/Login.vue';
import DarkTema from './components/DarkTema.vue';
import Search from './components/Search.vue';
import Slider from './components/Slider.vue';
import Footer from './components/Footer.vue';
import Create from './components/Create.vue';
import Calc from './components/Calc.vue';
import AddFile from './components/AddFile.vue';




const app = createApp({});

app.component('sign-up', SignUp);
app.component('login', Login);
app.component('dark-tema', DarkTema);
app.component('search', Search);
app.component('slider', Slider);
app.component('AppFooter', Footer);
app.component('create', Create);
app.component('calc', Calc);
app.component('add-file', AddFile);
app.mount('#app')



