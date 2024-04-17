<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Albums dispense</title>
</head>

<body>

    <div id="app">

        <header class="app-header">
            <div class="logo">
                Albums dispense
            </div>
            <!-- /.logo -->
        </header>
        <!-- /.app-header -->

        <main class="app-main">

            <div class="container">
                    <div class="dischi">
                        <div class="card" v-for="album in albums">
                            <img :src="album.poster" alt="" class="album-poster">
                            <div>{{album.title}}</div>
                        </div>
                </div>
            </div>
            <!-- /.container -->
        </main>
        <!-- /.app-main -->

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