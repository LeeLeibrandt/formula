import Template from './products.vue';

//PRODUCTS
const products = [
    {
        id: 1,
        title: 'Team Hoodie',
        price: 350,
        qty: 1,
        img: '../img/Lewis.png'
    },
    {
        id: 2,
        title: 'Team Hoodie',
        price: 350,
        qty: 1,
        img: '../img/Lewis.png'
    }
];

new Vue({

    el: '#app',

    data: {
       cartItem: [],
       items: products
    },
    
});