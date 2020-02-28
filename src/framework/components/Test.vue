<template>
    <div class="vue_product">
        <div class="ic-price__top">
            <div class="ic-price__top-wrapper">
                <div class="ic-price__top-item">
                    <h3 class="ic-price__main-title"> {{print}} </h3>
                </div>
            </div>
        </div>

        <div class="ic-price-info page-container-wide">
        <div v-for="prod in products">
            <div class="ic-price-info_container container" id="tab1C">
                <div class="ic-price-info__column">
                    <h3 class="ic-price-info__title">
                        {{ prod.content.rendered }}
                    </h3>
                    <div class="ic-price-info__product-date">
                        <h4>Available until date:</h4>
                        <div class="ic-price-upto_date"> {{prod.acf.date_pr}} </div>
                    </div>

                    <div class="data-text-wrapper">
                        <div class="ic-btn__try-btn">
                            <a href="/kontakt/">
                                try this product
                            </a>
                        </div>
                        <div v-for="feature_item in prod.acf.properties_list_pr" class="ic-price-data">
                            <div class="ic-price__features">
                                {{feature_item.feature}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: "Products ",
            now: new Date(),
            products: []
        };
    },
    computed: {
        print() {
            return this.getText();
        }
    },
    methods: {
        getText() {
            return `${this.message} Available for data: ${new Date().toLocaleString()}`;
        }
    },
    created() {
        this.$http.get('wp/v2/products').then(response => {
            // window.console.log(response);
            for(let product in response.data) {
                this.products.push(response.data[product]);
            }
        }, error => { window.console.log(error); });
    }
};
</script>

<style scoped lang="scss">
    .vue_product .ic-price__top .ic-price__top-item {
        padding: 55px;
    }
    .vue_product .ic-price__top .ic-price__top-item .ic-price__main-title {
        font-size: 22px;
    }
    .vue_product .ic-price__top .ic-price__top-wrapper {
        background: rgba(0, 147, 104, .06);
        width: 50%;
    }
    .vue_product .ic-price-info {
        display: flex;
        flex-wrap: wrap;
    }
    .vue_product .ic-price-info .ic-price-info__column {
        width: 100%
    }

    @media screen and (max-width: 768px){
        .vue_product .ic-price__top .ic-price__top-wrapper {
            width: 100%;
        }
    }
</style>
