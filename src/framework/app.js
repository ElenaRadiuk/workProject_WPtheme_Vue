import Vue from 'vue';
import VueResource from 'vue-resource';
require("./register");

Vue.use(VueResource);

Vue.http.options.root = "/wp-json";

Vue.config.productionTip = false;

new Vue({ el: "#app" });
