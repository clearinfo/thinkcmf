<template>
<Form ref="formItem" :model="formItem" :rules="ruleValidate" :label-width="80">
<FormItem label="图片" prop="picurl">
    <Input v-model="formItem.picurl" type="textarea" :rows="4"></Input>
    </FormItem>
<FormItem label="内容" prop="content">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
<FormItem label="颜色" prop="color">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
<FormItem label="大小" prop="size">
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
                    return {
                        currentIndex:'',                   
                        formItem:{picurl:'',//图片
content:'',//内容
color:'',//颜色
size:'',//大小
},
                        columns1:[{title:'图片',
key:'picurl',
width:'200',
},{title:'内容',
key:'content',
width:'',
},{title:'颜色',
key:'color',
width:'120',
},{title:'大小',
key:'size',
width:'120',
},],
                        listData:[]
                   }
                },
                methods:{
                },
                mounted(){//页面加载完成后显示
                               
                },
            }
        </script>
