<template>
    <div>

        <div class="input-group mb-3">
            <input id="autor_id" type="text" class="form-control" v-bind:class="{'is-invalid': errors.autor_id}" placeholder="Nombre del autor" v-model="busqueda">
            <div class="input-group-append">
                <button type="button" class="btn input-group-text input-group-busqueda" v-on:click="obtenerCoAutores"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <p class="small">Por favor usa letras en minúscula y acentos</p>

        <div>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between align-items-center" v-for="(seleccionado, index) in coautoresSeleccionados">
                    <img :src="assetImg+'storage/'+seleccionado.foto" alt="" class="rounded-circle" width="40">
                    <p class="m-0 ml-4">{{ seleccionado.nombre }}</p>
                    <input type="hidden" class="form-control" name="autor_id[]" v-bind:value="seleccionado.id">
                    <button type="button" class="btn btn-sm btn-danger" v-on:click.prevent="removeElement(index)"><i class="fas fa-times"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center" v-for="(data, index) in coautoresbd">
                    <img :src="assetImg+'storage/'+data['foto']" alt="" class="rounded-circle" width="40">
                    <p class="text-center m-0 ml-4">{{ data['nombre'] }}</p>
                    <div v-if="data['numeroDocumento'] == documento">
                        <span class="badge badge-primary">Autor</span>
                    </div>
                    <input type="hidden" class="form-control" name="autor_id[]" v-bind:value="data['id']">
                    <button type="button" class="btn btn-sm btn-danger" v-if="userid !== data['id']" v-on:click.prevent="remove(index)"><i class="fas fa-times"></i></button>
                </li>
            </ul>
        </div>

        <div class="lista-coautores" v-bind:class="{active: isActive}">
            <h3 class="text-center">Autores</h3>
            <p class="text-center mt-2"><i v-show="loading" class="fa fa-spinner fa-spin fa-3x"></i></p>

            <ul class="list-group" v-if="filtrarCoAutores.length">
                <li class="list-group-item d-flex justify-content-between align-items-center" v-if="coautor['id'] !== userid" v-for="coautor in filtrarCoAutores">
                    {{ coautor.nombre }}
                    <button type="button" class="btn btn-success btn-sm" v-on:click="agregarNuevoCoAutor(coautor)">Agregar</button>
                </li>
            </ul>
            <p v-else class="text-center">El usuario con este número de documento no se encuentra</p>

        </div>
    </div>
</template>

<script>
    export default {
        props: ['coautoresguardados', 'userid', 'userdocumento', 'errors'],
        data: function () {
            return {
                assetImg: asset,
                busqueda: '',
                isActive: false,
                coautores: [],
                coautoresSeleccionados: [],
                coautoresbd: this.coautoresguardados,
                documento: this.userdocumento,
                loading: false
            }
        },
        mounted: function() {
            document.querySelectorAll('input').forEach(function(el) {
                el.addEventListener('keypress', function(event) {
                    if (event.keyCode == 13) {
                        event.preventDefault();
                    }
                });
            });
        },
        methods: {
            obtenerCoAutores (event) {
                var self = this;
                self.loading = true;
                if (self.busqueda !== '') {
                    axios.get('/obtener_autores').then(function(response) {
                        self.coautores  = response.data;
                        self.isActive   = true;
                        self.loading    = false;
                    })
                } else {
                    self.coautores = [];
                    self.isActive = false;
                }
            },
            agregarNuevoCoAutor: function (coautor) {
                this.coautoresSeleccionados.push({
                    id: coautor.id,
                    nombre: coautor.nombre,
                    foto: coautor.foto
                })
            },
            mostrarPanel: function () {
                this.isActive = true
            },
            ocultarPanel: function () {
                this.isActive = false
            },
            removeElement: function(index) {
                this.coautoresSeleccionados.splice(index, 1);
            },
            remove: function(index) {
                this.coautoresbd.splice(index, 1);
            },
        },
        computed: {
            filtrarCoAutores: function () {
                var self = this;
                return this.coautores.filter( function (coautor) {
                    return coautor.nombre.toLowerCase().indexOf(self.busqueda) >= 0
                })
            }
        }
    }
</script>
<style>
    .lista-coautores {
        background: #f1f1f1;
        max-height: 500px;
        min-height: 120px;
        overflow-y: scroll;
        padding: 8px;
        opacity: 0;
        transition: opacity .3s ease;
    }
    .lista-coautores.active {
        opacity: 1;
    }
</style>
