<!DOCTYPE html>
<html
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<div id="app">
            <button type="submit" @click.prevent="plusOne">
                Increment counter: {{ count }}
            </button>

    <pre>
        {{ $data | json }}
    </pre>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
<script type="text/javascript">
    new Vue({
            el: '#app',
          data:  {
              count: 0
          },
        methods: {
            plusOne: function()
            {
                this.count++;
            }
        }
    });
</script>

</body>
</html>
