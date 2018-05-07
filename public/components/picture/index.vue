<template>
    <Form ref="formItem" :model="formItem" :rules="ruleValidate" :label-width="80">
        <FormItem label="用户名" prop="username">
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
    props: ['obserable'],
    name: 'zmitiindex',
    data() {
        return {
            currentIndex: '',
            formItem: {
                username: '', //用户名
            },
            columns1: [{
                title: '用户名',
                key: 'username',
                width: '180',
            }, ],
            listData: []
        }
    },
    methods: {},
    mounted() {},
}
</script>