<template>
<Form ref="formItem" :model="formItem" :rules="ruleValidate" :label-width="80">
</Form>
<Table :columns="columns1" :data="listData"></Table>
</template>
<script>
            import './index.css';
            import sysbinVerification from '../lib/verification';
            import symbinUtil from '../lib/util';
            import Vue from 'vue';
            export default {
                props:['obserable'],
                name:'zmitiindex',
                data(){
                    return {
                        currentIndex:'',                   
                        formItem:{},
                        columns1:[],
                        listData:[]
                   }
                },
methods:{
},
mounted(){
},
}
</script>
