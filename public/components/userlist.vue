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
addete(uid){
var s=this;var sendurl="1";symbinUtil.ajax({
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
