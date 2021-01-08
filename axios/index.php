<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js" integrity="sha512-DZqqY3PiOvTP9HkjIWgjO6ouCbq+dxqWoJZ/Q+zPYNHmlnI2dQnbJ5bxAHpAMw+LXRm4D72EIRXzvcHQtE8/VQ==" crossorigin="anonymous"></script>
    <title>Dischi</title>
  </head>
  <body>
    <div id="app">
      <header>
        <img src="img/logo.png" alt="">
      </header>
      <div class="container">
        <div class="item-container" v-for="disco in dischi">
            <img :src="disco.poster" alt="">
            <h3 class="style-title">{{disco.title}}</h3>
            <h4 class="style-text">{{disco.author}}</h4>
            <span class="style-text">{{disco.year}}</span>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
