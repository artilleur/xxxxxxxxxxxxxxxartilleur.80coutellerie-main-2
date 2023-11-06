app.component("review-form", {
    template:
      /*html*/
      `<form class="review-form" @submit.prevent="onSubmit">
      <h3>Laissez un avis</h3>
      <label for="name">Nom:</label>
      <input id="name" type="text" v-model="name" />
      <label for="review">Avis:</label>
      <textarea id="review" v-model="review"></textarea>
      <label for="rating">Note:</label>
      <select id="rating" v-model.number="rating">
      <option >5</option>
      <option >4</option>
      <option >3</option>
      <option >2</option>
      <option >1</option>
      </select>
      <input type="submit" class="button" value="Envoyer"/>
      </form>`,
    data() {
      return {
        name: "",
        review: "",
        rating: null,
      };
    },
    methods: {
      onSubmit() {
        if (
          this.name === "" ||
          this.review === "" ||
          this.rating === null 
        ) {
          alert("Votre avis n'est pas entièrement complété.");
          return;
        }
  
        let productReview = {
          name: this.name,
          review: this.review,
          rating: this.rating,
        };
        this.$emit("review-submitted", productReview);
  
        this.name = "";
        this.review = "";
        this.rating = null;
      },
    },
  });