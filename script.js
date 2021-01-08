var app = new Vue({
  el: "#app",
  data: {
    dischi: [],
  },

  mounted: function () {
    axios.get("data.php").then((risposta) => {
      this.dischi = risposta.data;
      console.log(this.dischi);
    });
  },
});
