<template>
<Form ref="formItem" :model="formItem" :rules="ruleValidate" :label-width="80">
<FormItem label="我的名字" prop="myname">
    <Input v-model="formItem.myname" type="textarea" :rows="4"></Input>
    </FormItem>
<FormItem label="所在城市" prop="mycityname">
    <Input v-model="formItem.mycityname" placeholder="标题"></Input>
    </FormItem>
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
                        formItem:{myname:'',//我的名字
mycityname:'',//所在城市
},
                        columns1:[{title:'我的名字',
key:'myname',
width:'',
},{title:'所在城市',
key:'mycityname',
width:'120',
},],
                        listData:[]
                   }
                },
methods:{
},
mounted(){
},
}
</script>
