define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'store/index' + location.search,
                    add_url: 'store/add',
                    edit_url: 'store/edit',
                    del_url: 'store/del',
                    multi_url: 'store/multi',
                    table: 'store',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'member_id', title: __('Member_id')},
                        {field: 'store_name', title: __('Store_name')},
                        {field: 'storeavatar', title: __('Storeavatar'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'status', title: __('Status'), searchList: {"normal":__('Status normal'),"hidden":__('Status hidden')}, formatter: Table.api.formatter.status},
                        {field: 'store_bannerimages', title: __('Store_bannerimages'), events: Table.api.events.image, formatter: Table.api.formatter.images},
                        {field: 'store_phone', title: __('Store_phone')},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'member.id', title: __('Member.id')},
                        {field: 'member.user_name', title: __('Member.user_name')},
                        {field: 'member.password', title: __('Member.password')},
                        {field: 'member.status', title: __('Member.status'), formatter: Table.api.formatter.status},
                        {field: 'member.phone', title: __('Member.phone')},
                        {field: 'member.openid', title: __('Member.openid')},
                        {field: 'member.real_name', title: __('Member.real_name')},
                        {field: 'member.nick_name', title: __('Member.nick_name')},
                        {field: 'member.headavatar', title: __('Member.headavatar'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'member.identity_frontal_image', title: __('Member.identity_frontal_image'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'member.identity_verso_image', title: __('Member.identity_verso_image'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'member.province_name', title: __('Member.province_name')},
                        {field: 'member.province_code', title: __('Member.province_code')},
                        {field: 'member.city_name', title: __('Member.city_name')},
                        {field: 'member.city_code', title: __('Member.city_code')},
                        {field: 'member.area_name', title: __('Member.area_name')},
                        {field: 'member.area_code', title: __('Member.area_code')},
                        {field: 'member.profession', title: __('Member.profession')},
                        {field: 'member.genderdata', title: __('Member.genderdata')},
                        {field: 'member.age', title: __('Member.age')},
                        {field: 'member.stature', title: __('Member.stature')},
                        {field: 'member.bodyweight', title: __('Member.bodyweight'), operate:'BETWEEN'},
                        {field: 'member.birthday', title: __('Member.birthday'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'member.school', title: __('Member.school')},
                        {field: 'member.maritalstatuslist', title: __('Member.maritalstatuslist')},
                        {field: 'member.educationlist', title: __('Member.educationlist')},
                        {field: 'member.createtime', title: __('Member.createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});