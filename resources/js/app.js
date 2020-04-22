
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
require('owl.carousel');

window.Vue      = require('vue');
window.Vuesax   = require('vuesax');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.use(Vuesax)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);
Vue.component('buscar-coautor', require('./components/BuscarCoAutor.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: function() {
        return {
            modal: false,
            staticPosition: false,
            isEvento: '',
            inputs: [],
        }
    },
    methods: {
        modalEliminar(id) {
            this.modal     = true;
            this.entidadId = id;
        },
        addRow() {
            this.inputs.push({
                one: '',
                two: ''
            })
        },
        deleteRow(index) {
            this.inputs.splice(index,1)
        }
    }
});
