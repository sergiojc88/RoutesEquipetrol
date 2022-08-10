<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <router-link :to='{name:"createDriver"}' class="btn btn-success"><i class="fa-solid fa-circle-plus"></i></router-link>
            </div>

            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>ID</th>
                                <th>Tipo ID</th>
                                <th>Nro de ID</th>
                                <th>Nombre</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="driver in drivers" :key="driver.id">
                                <td>{{ driver.id}}</td>
                                <td>{{ driver.TipoId}}</td>
                                <td>{{ driver.NroId}}</td>
                                <td>{{ driver.Nombre}}</td>
                                <td>{{ driver.FechaNac}}</td>
                                <td>
                                    <router-link :to="{name:'editDriver', params:{id:driver.id}}" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i></router-link>
                                    <a type="button" @click="deleteDriver(driver.id)" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default{
    name:"driver",
    data() {
        return {
            drivers:[]
        }
    },
    mounted() {
        this.showDrivers()
    },
    methods: {
        async showDrivers() {
            await this.axios.get('/api/Drive')
                .then(response=>{
                    this.drivers = response.data
                })
                .catch(error=>{
                    //this.Drivers = []
                })
        },
        deleteDriver(id) {
            if(confirm("¿ Confirma eliminar el registro?")) {
                this.axios.delete('/api/Drive/' + id)
                .then(response=>{
                    this.showDrivers()
                })
                .catch(error=>{
                    console.log("error")
                })
            }
        }
    }
}
</script>
