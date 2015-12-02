Vue.component('tasks', {
    template: '#tasks-template',
    props: ['list']
});

new Vue({
    el: '#app',
    data: {
        tasks: [
            {body:'go to the store', completed: true},
            {body:'go to the bank' , completed: false},
            {body:'go to the shop' , completed: false}
        ]
    },
    props: ['tasks']

});
