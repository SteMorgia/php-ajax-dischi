var app = new Vue({
    el: '#app',
    data: {
        myArray: []
    },
    created() {
        axios.get('http://http://localhost/php-ajax-dischi/secondVersione/api/')
        .then(response => {
            this.myArray = response.data;
        })
    }
})