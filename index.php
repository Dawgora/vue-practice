<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div id="app">
        <h1>{{message}}</h1>

        <input type="text" name="name" value="{{message}}" v-model="message">
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.min.js"></script>
    <script type="text/javascript">
        var data = {
          'message': 'hello world'
        };

        new Vue({
          el: '#app',
          data: data
        });
    </script>

  </body>
</html>
