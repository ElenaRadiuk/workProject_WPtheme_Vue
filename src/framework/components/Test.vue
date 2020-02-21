<template>
    <div>
        test {{print}}
        <div v-for="prod in products">
            {{ prod.title.rendered }}
        </div>

        <div class="ic-price__top">
            <div class="ic-price__top-wrapper">
                <div class="ic-price__top-item">
                    <h1 class="ic-price__main-title">Product</h1>
                </div>
            </div>
        </div>

        <div class="ic-price-info page-container-wide">
            <ul id="tabs" class="ic-price-info__tabs">
                <li><a id="tab1">lite</a></li>
                <li><a id="tab2">pro</a></li>
            </ul>

            <div class="ic-price-info_container container" id="tab1C">
                <div class="ic-price-info__column">
                    <h3 class="ic-price-info__title">
                        lite
                    </h3>
                    <div class="ic-price-info__product-price">
                        <div class="ic-price-info__sum">price</div>
                    </div>

                    <div class="data-text-wrapper">
                        <div class="ic-btn__try-btn">
                            <a href="">
                                price
                            </a>
                        </div>
                        <div class="ic-price-data">
                            <div class="ic-price__features">
                                lite 1
                            </div>
                            <div class="ic-price__features">
                                lite 1
                            </div>
                            <div class="ic-price__features">
                                lite 1
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ic-price-info_container container" id="tab2C">
                <div class="ic-price-info__column">
                    <h3 class="ic-price-info__title">
                        pro
                    </h3>
                    <div class="ic-price-info__product-price">
                        <div class="ic-price-info__sum">price</div>
                    </div>

                    <div class="data-text-wrapper">
                        <div class="ic-btn__try-btn">
                            <a href="">
                                price
                            </a>
                        </div>
                        <div class="ic-price-data">
                            <div class="ic-price__features">
                                pro
                            </div>
                            <div class="ic-price__features">
                                pro
                            </div>
                            <div class="ic-price__features">
                                pro
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
            message: "test data: ",
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
            return this.message + new Date();
        }
    },
    created() {
        this.$http.get('wp/v2/products').then(response => {
            window.console.log(response);
            for(let product in response.data) {
                this.products.push(response.data[product]);
            }
        }, error => { alert(error); });
    }
};
</script>
