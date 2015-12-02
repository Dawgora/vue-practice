Vue.component('tasks', {
    template: '#tasks-template',
    props: ['list'],
    computed: {
        remaining: function()
        {
            var vm= this;
            return this.list.filter(this.inProgress).length;
        }
    },
    methods: {
        isCompleted: function(task)
        {
            return task.completed;
        },
        inProgress: function(task)
        {
            return ! this.isCompleted(task);
        },
        deleteTask: function(task)
        {
            this.list.$remove(task);
        },
        clearCompleted: function()
        {
            this.list = this.list.filter(this.inProgress);
        },
        editTask: function()
        {
            alert('test!');
        }
    }
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
