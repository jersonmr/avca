<template>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset md-3">
        <div class="input-group">
          <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Ingrese la cédula a buscar..." v-model="busqueda" @keyup.prevent="obtenerAspirantesPorCedula">
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="fa fa-search"></i>
            </span>
          </div>
        </div>
        <resultados-busqueda :aspirantes="aspirantes" @aspirante="obtenerAspirante"></resultados-busqueda>
      </div>
    </div>
  </div>
</template>

<script>
  import ResultadosBusqueda from "./ResultadosBusqueda";
  export default {
    name: "Buscador",
    components: {ResultadosBusqueda},
    props: {
      formId: {
        type: String,
        default: ''
      },
    },
    data() {
      return {
        busqueda: '',
        aspirantes: []
      }
    },
    methods: {
      obtenerAspirantesPorCedula() {
        if (this.busqueda !== '') {
          axios.get('/rrhh/backend/obtener-aspirantes/' + this.busqueda)
            .then(response => {
              //console.log(response.data);
              this.aspirantes = response.data;
            })
        } else {
          document.getElementById(this.formId).reset();
        }
      },
      obtenerAspirante(aspirante) {
        //this.aspirante = aspirante;
        this.$emit('aspirante', aspirante);
      }
    },
  }
</script>

<style scoped>

</style>