<template>
<Form ref="formItem" :model="formItem" :rules="ruleValidate" :label-width="80">
<FormItem label="名称" prop="title">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
<FormItem label="摘要" prop="descoration">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
<FormItem label="文号" prop="wenhao">
    <Input v-model="formItem.wenhao" placeholder="标题"></Input>
    </FormItem>
<FormItem label="推荐" prop="tuijian">
    <Input v-model="formItem.tuijian" placeholder="标题"></Input>
    </FormItem>
<FormItem label="图片" prop="picurl">
    <Input v-model="formItem.picurl" type="textarea" :rows="4"></Input>
    </FormItem>
<FormItem label="内容" prop="content">
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
                        formItem:{title:'',//名称
descoration:'',//摘要
wenhao:'',//文号
tuijian:'',//推荐
picurl:'',//图片
content:'',//内容
},
                        columns1:[{title:'名称',
key:'title',
width:'100',
},{title:'摘要',
key:'descoration',
width:'120',
},{title:'文号',
key:'wenhao',
width:'150',
},{title:'推荐',
key:'tuijian',
width:'180',
},{title:'图片',
key:'picurl',
width:'200',
},{title:'内容',
key:'content',
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
