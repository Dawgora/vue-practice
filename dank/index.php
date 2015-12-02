<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

<div id="app">
  <form>
      <span class="error" v-show="!message">no message</span>

      <textarea cols="30" rows="10" v-model="message"></textarea>

      <button type="submit" v-show="message">
          Send the shit
      </button>
  </form>

    <pre>
        {{ $data | json }}
    </pre>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.min.js"></script>
<script type="text/javascript">
    new Vue({
        el: '#app',
        data: {
            message: ''
        }
    });
</script>

</body>
</html>
