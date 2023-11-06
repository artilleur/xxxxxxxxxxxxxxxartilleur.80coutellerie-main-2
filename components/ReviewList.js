app.component('review-list',
{
    props: {
        reviews: {
            type: Array,
            required: true
        }
    },
    template:
    /*html*/
    `<div class="review-container">
    <h3>Avis:</h3>
    <ul>
    <li v-for="(review, index) in reviews" :key="index">
    {{review.name}} a donné {{ '&#9733'.repeat(review.rating) }} 
    <br />
    "{{review.review}}"
    </li>
    </ul>
    </div>`
})