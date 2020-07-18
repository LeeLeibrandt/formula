new Vue({

    el: '#app',

    data: {
        //Quantity of product
        item: 1,
    },

    methods: {
        //FUNCTIONS
        add:function(){
            this.item++;
        },
        subtract:function(){
            this.item--;
        }
    }

});