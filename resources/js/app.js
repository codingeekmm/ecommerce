import './bootstrap';
import { createApp } from 'vue';
import ProductsComponent from './components/ProductsComponent.vue';

const app = createApp({});
app.component('products-component', ProductsComponent);
app.mount('#app');

