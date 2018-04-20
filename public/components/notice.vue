<template>
<FormItem label="名称1" prop="title">
    <Input v-model="formItem.title" placeholder="标题"></Input>
    </FormItem>
<FormItem label="名称2" prop="title">
    <Input v-model="formItem.title" type="textarea" :rows="4"></Input>
    </FormItem>
<FormItem label="名称4" prop="title3">
    <Input v-model="formItem.title3" placeholder="标题"></Input>
    </FormItem>
<FormItem label="名称4" prop="title3">
    <Input v-model="formItem.title3" placeholder="标题"></Input>
    </FormItem>
<FormItem label="zzzzzzzzzzzzz" prop="ttttttttttt">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
<FormItem label="gggg" prop="ttt">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
<FormItem label="文章" prop="article">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
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
                },
                methods:{
                },
                mounted(){//页面加载完成后显示
                               
                },
            }
        </script>
