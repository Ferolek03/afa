import './bootstrap';
import {createApp} from 'vue';
import SignUp from './components/SignUp.vue';
import Login from './components/Login.vue';
import DarkTema from './components/DarkTema.vue';
import Search from './components/Search.vue';
import Slider from './components/Slider.vue';
import Footer from './components/Footer.vue'
import Map from './components/Map.vue'
import Create from './components/Create.vue'
import Calc from './components/Calc.vue'
import AddFile from './components/AddFile.vue'

createApp(Calc).mount('#cal')
createApp(DarkTema).mount('#dt')
createApp(SignUp).mount('#sign')
createApp(Search).mount('#search')
createApp(Login).mount('#login')
createApp(Footer).mount('#footer')
createApp(Slider).mount('#slider')
createApp(Map).mount('#map')
createApp(Create).mount('#create')
createApp(AddFile).mount('#add')