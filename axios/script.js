var app = new Vue({
  el: "#app",
  data: {
    dischi: [],
    author: "",
  },
  methods: {
    change: function() {
      let autore = this.author;
      axios
      // scaricare i dati dal file data, aggiungendo come chiave l'autore richiesto
        .get('data.php', {
          params: {
            "autore" : autore
          }
        })
        // pushare nell'array i risultati filtrati(o no) a seconda della select
        .then((risposta) => {
          this.dischi = risposta.data;
        });
    }
  },
  // chiamata axios per visualizzare tutti i risultati
  mounted: function () {
    axios.get("data.php").then((risposta) => {
      this.dischi = risposta.data;
      console.log(this.dischi);
    });
  },
});
