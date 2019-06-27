<template>
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
                                    <img :src="'/images/foods/'+ food.image" alt="'food.name'" style="width: 30px;"> {{ food.name }}
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
                                            <img :src="'/images/foods/'+ food.image" alt="'food.name'" style="width: 30px;"> {{ food.name }}
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
                                        <img :src="'/images/foods/'+ food.image" alt="'food.name'" style="width: 30px;"> {{ food.name }}
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
                                        <img :src="'/images/foods/'+ food.image" alt="'food.name'" style="width: 30px;"> {{ food.name }}
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
                                        <img :src="'/images/foods/'+ food.image" alt="'food.name'" style="width: 30px;"> {{ food.name }}
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
                                        <img :src="'/images/foods/'+ food.image" alt="'food.name'" style="width: 30px;"> {{ food.name }}
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
                                        <img :src="'/images/foods/'+ food.image" alt="'food.name'" style="width: 30px;"> {{ food.name }}
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
                                        <img :src="'/images/foods/'+ food.image" alt="'food.name'" style="width: 30px;"> {{ food.name }}
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
                                        <img :src="'/images/foods/'+ food.image" alt="'food.name'" style="width: 30px;"> {{ food.name }}
                                    </li>
                                </draggable>  
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
    import draggable from 'vuedraggable'
    export default {
        components: {
            draggable,
        },
        props:['foods'],
        data(){
            return{
                foodNews: this.foods,
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
    }
</script>
