<template>
    <form v-on:submit.prevent="addTest()">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="mb-0">Tabla de alimentos</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                            <draggable class="list-group" :list="foodNews" group="foods" :element="'div'">
                                    <li v-for="(food, index) in foodNews" class="list-group-item list-group-item-action" :key="food.id" :data-id="food.id">
                                        {{ food.name }}
                                    </li>
                                </draggable> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="mb-0">Frecuencia de Consumo</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h5>1 véz al día</h5>
                                    </div>
                                    <div class="card-body">
                                        <draggable class="list-group" :list="one_day" group="foods" :element="'div'">
                                            <li v-for="(food, index) in one_day" class="list-group-item list-group-item-action" :key="food.id" :data-id="food.id">
                                               {{ food.name }}
                                            </li>
                                        </draggable>
                                    </div>
                                </div>
                                
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h5>2 - 3 veces al día</h5>
                                    </div>
                                    <div class="card-body">
                                      <draggable class="list-group" :list="twoOrTreeForDay" group="foods" :element="'div'">
                                        <li v-for="(food, index) in twoOrTreeForDay" class="list-group-item list-group-item-action" :key="food.id" :data-id="food.id">
                                            {{ food.name }}
                                        </li>
                                    </draggable>  
                                </div>
                            </div>

                            <div class="card card-primary">
                                    <div class="card-header">
                                        <h5>1 a la semana</h5>
                                    </div>
                                    <div class="card-body">
                                      <draggable class="list-group" :list="oneForWeek" group="foods" :element="'div'">
                                        <li v-for="(food, index) in oneForWeek" class="list-group-item list-group-item-action" :key="food.id" :data-id="food.id">
                                                {{ food.name }}
                                        </li>
                                    </draggable>  
                                </div>
                            </div>

                            <div class="card card-primary">
                                    <div class="card-header">
                                        <h5>2 - 3 veces a la semana</h5>
                                    </div>
                                    <div class="card-body">
                                      <draggable class="list-group" :list="twoOrTreeForWeek" group="foods" :element="'div'">
                                        <li v-for="(food, index) in twoOrTreeForWeek" class="list-group-item list-group-item-action" :key="food.id" :data-id="food.id">
                                                {{ food.name }}
                                        </li>
                                    </draggable>  
                                </div>
                            </div>

                            <div class="card card-primary">
                                    <div class="card-header">
                                        <h5>4 - 6 veces a la semana</h5>
                                    </div>
                                    <div class="card-body">
                                      <draggable class="list-group" :list="fourOrSixForWeek" group="foods" :element="'div'">
                                        <li v-for="(food, index) in fourOrSixForWeek" class="list-group-item list-group-item-action" :key="food.id" :data-id="food.id">
                                                {{ food.name }}
                                        </li>
                                    </draggable>  
                                </div>
                            </div>

                            <div class="card card-primary">
                                    <div class="card-header">
                                        <h5>Cada 15 días</h5>
                                    </div>
                                    <div class="card-body">
                                      <draggable class="list-group" :list="fifteenDays" group="foods" :element="'div'">
                                        <li v-for="(food, index) in fifteenDays" class="list-group-item list-group-item-action" :key="food.id" :data-id="food.id">
                                                {{ food.name }}
                                        </li>
                                    </draggable>  
                                </div>
                            </div>

                            <div class="card card-primary">
                                    <div class="card-header">
                                        <h5>1 véz al mes</h5>
                                    </div>
                                    <div class="card-body">
                                      <draggable class="list-group" :list="oneMonth" group="foods" :element="'div'">
                                        <li v-for="(food, index) in oneMonth" class="list-group-item list-group-item-action" :key="food.id" :data-id="food.id">
                                                {{ food.name }}
                                        </li>
                                    </draggable>  
                                </div>
                            </div>

                            <div class="card card-primary">
                                    <div class="card-header">
                                        <h5>Nunca</h5>
                                    </div>
                                    <div class="card-body">
                                      <draggable class="list-group" :list="never" group="foods" :element="'div'">
                                        <li v-for="(food, index) in never" class="list-group-item list-group-item-action" :key="food.id" :data-id="food.id">
                                                {{ food.name }}
                                        </li>
                                    </draggable>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-success">Guardar Datos</button>
        </div>
    </div>
    </form>
</template>

<script>
    import draggable from 'vuedraggable'
    import axios from 'axios'
    export default {
        components: {
            draggable,
        },
        props:['foods', 'patient'],
        data(){
            return{
                foodNews: this.foods,
                patient_id: this.patient.id,
                patient_slug: this.patient.slug,
                one_day: [],
                twoOrTreeForDay: [],
                oneForWeek: [],
                twoOrTreeForWeek: [],
                fourOrSixForWeek: [],
                fifteenDays: [],
                oneMonth: [],
                never: []
            }
        },
        methods:{
            addTest(){
                for (let i = 0; i < this.one_day.length; i++) {
                    axios.post('/frequencyConsumption/add', {
                    patient_id: this.patient_id,
                    food_name: this.one_day[i].name,
                    food_group: this.one_day[i].group_id,
                    frecuency: '1 véz al día'
                }).then(function (response) {
                    //
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                }
                for (let i = 0; i < this.twoOrTreeForDay.length; i++) {
                    axios.post('/frequencyConsumption/add', {
                    patient_id: this.patient_id,
                    food_name: this.twoOrTreeForDay[i].name,
                    food_group: this.twoOrTreeForDay[i].group_id,
                    frecuency: '2 - 3 veces al día'
                }).then(function (response) {
                    //
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                }

                for (let i = 0; i < this.oneForWeek.length; i++) {
                    axios.post('/frequencyConsumption/add', {
                    patient_id: this.patient_id,
                    food_name: this.oneForWeek[i].name,
                    food_group: this.oneForWeek[i].group_id,
                    frecuency: '1 véz por semana'
                }).then(function (response) {
                    //
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                }

                for (let i = 0; i < this.twoOrTreeForWeek.length; i++) {
                    axios.post('/frequencyConsumption/add', {
                    patient_id: this.patient_id,
                    food_name: this.twoOrTreeForWeek[i].name,
                    food_group: this.twoOrTreeForWeek[i].group_id,
                    frecuency: '2 - 3 veces por semana'
                }).then(function (response) {
                    //
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                }

                for (let i = 0; i < this.fourOrSixForWeek.length; i++) {
                    axios.post('/frequencyConsumption/add', {
                    patient_id: this.patient_id,
                    food_name: this.fourOrSixForWeek[i].name,
                    food_group: this.fourOrSixForWeek[i].group_id,
                    frecuency: '4 - 6 veces por semana'
                }).then(function (response) {
                    //
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                }

                for (let i = 0; i < this.fifteenDays.length; i++) {
                    axios.post('/frequencyConsumption/add', {
                    patient_id: this.patient_id,
                    food_name: this.fifteenDays[i].name,
                    food_group: this.fifteenDays[i].group_id,
                    frecuency: 'cada 15 días'
                }).then(function (response) {
                    //
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                }

                for (let i = 0; i < this.oneMonth.length; i++) {
                    axios.post('/frequencyConsumption/add', {
                    patient_id: this.patient_id,
                    food_name: this.oneMonth[i].name,
                    food_group: this.oneMonth[i].group_id,
                    frecuency: '1 véz al mes'
                }).then(function (response) {
                    //
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                }

                for (let i = 0; i < this.never.length; i++) {
                    axios.post('/frequencyConsumption/add', {
                    patient_id: this.patient_id,
                    food_name: this.never[i].name,
                    food_group: this.never[i].group_id,
                    frecuency: 'Nunca'
                }).then(function (response) {
                    //
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                }
                window.location.href='http://nutriologia.com/patient/'+this.patient.slug+'/ClinicHistory';
            }
        },
    }
</script>
