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

},
},
mounted(){
},
}
</script>
