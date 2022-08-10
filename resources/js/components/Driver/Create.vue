<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Crear Conductor</h5>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="create">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                        <label>Tipo de Identificación</label>
                                        <input type="text" class="form-control" v-model="driver.TipoId"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Nro de Identificación</label>
                                        <input type="text" class="form-control" v-model="driver.NroId"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" v-model="driver.Nombre"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha de Nacimiento</label>
                                        <input type="text" class="form-control" v-model="driver.FechaNac"/>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default{
    name:"create-driver",
    data() {
        return {
            driver:{
                TipoId:"",
                NroId:"",
                Nombre:"",
                FechaNac:""
            }
        }
    },
    methods: {
        async create(){
            await this.axios.post('/api/Drive', this.driver)
                .then(response=>{
                    this.$router.push({name:"showDriver"})
                })
                .catch(error=>{
                    console.log("error")
                })
        }
    },
}
</script>
