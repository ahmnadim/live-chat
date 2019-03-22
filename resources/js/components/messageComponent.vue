<template>
    <div>
        <li class="list-group-item" :class="className"><slot></slot>
            <span id="time" class="badge badge-pill  float-right" :class="badgeClass">{{time}}</span>
        </li>
        <small class="badge float-right" :class="badgeClass">{{user}}</small>
    </div>
</template>

<script>
    export default {

        props:[
            'color',
            'user',
            'time'
        ],

        computed:{
            className:function(){
                return 'list-group-item-'+this.color
            },

            badgeClass(){
                return 'badge-'+this.color;
            }


        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


