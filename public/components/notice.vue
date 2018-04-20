<template>
<Form ref="formItem" :model="formItem" :rules="ruleValidate" :label-width="80">
<FormItem label="名称" prop="title">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
<FormItem label="名称2" prop="title2">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
<FormItem label="名称3" prop="title3">
    <Input v-model="formItem.title3" placeholder="标题"></Input>
    </FormItem>
<FormItem label="名称4" prop="title4">
    <Input v-model="formItem.title4" placeholder="标题"></Input>
    </FormItem>
<FormItem label="zzzzzzzzzzzzz" prop="ttttttttttt">
    <Input v-model="formItem.ttttttttttt" type="textarea" :rows="4"></Input>
    </FormItem>
<FormItem label="gggg" prop="ttt">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
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
                    formItem:{title:'',//名称
title2:'',//名称2
title3:'',//名称3
title4:'',//名称4
ttttttttttt:'',//zzzzzzzzzzzzz
ttt:'',//gggg
},
                    columns1:[],
                    listData:[]
                },
                methods:{
                },
                mounted(){//页面加载完成后显示
                               
                },
            }
        </script>
