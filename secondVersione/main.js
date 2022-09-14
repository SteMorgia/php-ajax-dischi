var app = new Vue({
    el: '#app',
    data: {
        myArray: []
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/secondVersione/api/api.php')
        .then(response => {
            this.myArray = response.data;
        })
    }
})