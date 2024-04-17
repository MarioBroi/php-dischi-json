<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- CSS -->
    <link href='./assets/css/style.css' rel='stylesheet'>

    <title>Albums dispense</title>
</head>

<body>

    <div id="app">

        <main>
            <div class="dischi">

                <div class="card" v-for="album in albums">
                    <img :src="album.poster" alt="">
                    <div>{{album.title}}</div>
                </div>

            </div>
        </main>
    </div>
    <!-- /.app -->

    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- VUE 3 -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

    <!-- JS -->
    <script src='./assets/js/app.js'></script>
</body>

</html>