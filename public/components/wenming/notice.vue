<template>
<Form ref="formItem" :model="formItem" :rules="ruleValidate" :label-width="80">
<FormItem label="图片" prop="picurl">
<RadioGroup v-model="formItem.picurl">
<Radio label="金斑蝶"></Radio>
<Radio label="爪哇犀牛"></Radio>
<Radio label="印度黑羚"></Radio>
<Radio label="测试"></Radio>
</RadioGroup>
</FormItem>
<FormItem label="内容" prop="content">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
<FormItem label="颜色" prop="color">
<CheckboxGroup v-model="formItem.color">
<Checkbox label="苹果"></Checkbox>
<Checkbox label="香蕉"></Checkbox>
<Checkbox label="西瓜"></Checkbox>
</CheckboxGroup>
</FormItem>
<FormItem label="大小" prop="size">
    <DatePicker type="date" multiple placeholder="Select date" style="width: 300px"></DatePicker>
    </FormItem>
<FormItem label="创建时间" prop="createtime">
<CheckboxGroup v-model="formItem.createtime">
<Checkbox label=""></Checkbox>
</CheckboxGroup>
</FormItem>
<FormItem label="开关" prop="kaiguan">
<Switch v-model="formItem.kaiguan" @on-change=""></Switch>
</FormItem>
<FormItem label="下拉框" prop="xialakuang">
<Select v-model="formItem.xialakuang" style="width:200px">
<Option v-for="item in cityList" :value="item.value" :key="item.value">{{ item.label }}</Option>
</FormItem>
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
createtime:'',//创建时间
kaiguan:'',//开关
xialakuang:'',//下拉框
},
                        columns1:[{title:'图片',
key:'picurl',
width:'200',
},{title:'颜色',
key:'color',
width:'120',
},{title:'大小',
key:'size',
width:'120',
},{title:'创建时间',
key:'createtime',
width:'100',
},{title:'开关',
key:'kaiguan',
width:'80',
},{title:'下拉框',
key:'xialakuang',
width:'0',
},],
                        listData:[]
                   }
                },
methods:{
add(uid){
var s=this;var sendurl="http://www.baidu.com";symbinUtil.ajax({
                            url:sendurl,
                            validate:s.validateData,
                            data:formparams,
fn(data){
if(data.getret === 0){
s.$Message.success(data.getmsg);
s.getListData();
}else{
s.Message.error({
content:data.getmsg,
duration: 10
});
}
}

}),
},
edit(rid){
var s=this;var sendurl="http://www.name.com";symbinUtil.ajax({
                            url:sendurl,
                            validate:s.validateData,
                            data:formparams,
fn(data){
if(data.getret === 0){
s.$Message.success(data.getmsg);
s.getListData();
}else{
s.Message.error({
content:data.getmsg,
duration: 10
});
}
}

}),
},
remove(idx){
var s=this;var sendurl="https://127.0.0.1/";symbinUtil.ajax({
                            url:sendurl,
                            validate:s.validateData,
                            data:formparams,
fn(data){
if(data.getret === 0){
s.$Message.success(data.getmsg);
s.getListData();
}else{
s.Message.error({
content:data.getmsg,
duration: 10
});
}
}

}),
},
getlistdata(uid){
var s=this;var sendurl="http://127.0.0.1/alldata";symbinUtil.ajax({
                            url:sendurl,
                            validate:s.validateData,
                            data:formparams,
fn(data){
if(data.getret === 0){
s.$Message.success(data.getmsg);
s.getListData();
}else{
s.Message.error({
content:data.getmsg,
duration: 10
});
}
}

}),
},
getcitydata(){
var s=this;var sendurl="http://localhost/a.json";symbinUtil.ajax({
                            url:sendurl,
                            validate:s.validateData,
                            data:formparams,
fn(data){
if(data.getret === 0){
s.$Message.success(data.getmsg);
s.getListData();
}else{
s.Message.error({
content:data.getmsg,
duration: 10
});
}
}

}),
},
},
mounted(){
},
}
</script>
