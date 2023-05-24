const { createApp } = Vue;
createApp({
  data(){
    return{
      apiUrl: 'http://localhost/php-todo-list-json/server.php',
      list: [],
      readTask: '',
    }
  },

  methods:{
    stampList(){
      console.log(axios);
      axios.post(this.apiUrl).then(result => {
        this.list = result.data;
        console.log(this.list)
      })
    },

    addTask(){
      const data = new FormData();
      data.append('todoItem', this.readTask);

      axios.post(this.apiUrl,data,{
        header:{'Content-Type': 'multipart/form-data'}
      }).then(result => {
        this.list = result.data;
        console.log(this.list)
      })
    }

  },

  mounted(){
      this.stampList();

  },


}).mount('#app')