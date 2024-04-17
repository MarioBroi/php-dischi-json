console.log('app test');

const { createApp } = Vue;

createApp({
    data() {
        return {
            albums: [],
            error: '',
        }
    },
    methods: {

    },
    mounted() {

        //faccio una chiamata axios
        axios

            //vado a prendere l'api url 
            .get('script.php')

            //controllo che risultato mi dá
            .then((result) => {
                console.log(result.data);
                this.albums = result.data;
                console.log(this.albums);
            })

            //catturo errori in caso ci siano
            .catch((err) => {
                console.log(err.message);
                this.error = err.message
            });
    },
}).mount('#app');