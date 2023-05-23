const { createApp } = Vue;
createApp({
  data(){
    return{
      apiUrl: 'http://localhost/php-todo-list-json/server.php',
      list: []
    }
  },

  methods:{
    stampList(){
      console.log('ciaooo');
      console.log(axios);
      axios.post(this.apiUrl).then(result => {
        this.list = result.data;
        console.log(this.list)
      })
    }

  },

  mounted(){
      this.stampList();

  },


}).mount('#app')