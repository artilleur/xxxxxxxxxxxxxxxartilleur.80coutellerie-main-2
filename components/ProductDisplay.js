app.component("product-display", {
    props: {
      premium: {
        type: Boolean,
        required: true,
      },
    },
    template:
      /*html*/
      `<div class="product-display">
          <div class="product-container">
            <div class="product-image">
              <img v-bind:src="image" alt="chaussettes" />
            </div>
            <div class="product-info">
              <h1>{{ product }}</h1>
              <p v-if="inStock">En stock</p>
              <p v-else>Rupture</p>
              <p>Frais de port: {{shipping}}</p>
              <p>Détail:</p>
              <ul>
                <li v-for="detail in details">{{detail}}</li>
              </ul>
              <p>Existe en:</p>
              <div 
                v-for="(variant, index) in variants" 
                :key="variant.id" 
                @mouseover="updateVariant(index)" 
                class="color-circle" 
                :style="{ backgroundColor: variant.back }">
              </div>
              <button
              class="button"
              :class="{disabledButton: !inStock}"
              :disabled="!inStock"
              @click="addToCart"
            >
              Ajouter au panier
            </button>
            <button
              class="button"
              @click="remFromCart"
            >
              Enlever du panier
            </button>
            </div>
            <!--ICI-->
            <review-list v-if="reviews.length" :reviews="reviews"></review-list>
            <review-form @review-submitted="addReview"></review-form>
          </div>
        </div>`,
    data() {
      return {
        product: "Chaussette",
        selectedVariant: 0,
        details: ["50% coton", "30% laine", "20% polyester"],
        variants: [
          {
            id: 1234,
            color: "bleu",
            back: "#38475F",
            image: "./assets/images/socks_blue.jpg",
            quantity: 50,
          },
          {
            id: 3245,
            color: "vert",
            back: "#4F9869",
            image: "./assets/images/socks_green.jpg",
            quantity: 20,
          },
        ],
        reviews: [],
      };
    },
    methods: {
      addToCart() {
          this.variants[this.selectedVariant].quantity--
        this.$emit("add-to-cart",this.variants[this.selectedVariant].id)
      },
      remFromCart() {
          this.variants[this.selectedVariant].quantity++
  
        this.$emit("rem-from-cart",this.variants[this.selectedVariant].id)
      },
      updateVariant(index) {
        this.selectedVariant = index;
      },
      addReview(review) {
        this.reviews.push(review)
      }
    },
    computed: {
      image() {
        return this.variants[this.selectedVariant].image;
      },
      inStock() {
        return this.variants[this.selectedVariant].quantity;
      },
      shipping() {
        if (this.premium) {
          return "Gratuit";
        }
        return "5 €";
      },
    },
  });
 
  