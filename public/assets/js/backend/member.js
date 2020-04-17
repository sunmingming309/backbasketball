define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'member/index' + location.search,
                    add_url: 'member/add',
                    edit_url: 'member/edit',
                    del_url: 'member/del',
                    multi_url: 'member/multi',
                    table: 'member',
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
                        {field: 'user_name', title: __('User_name')},
                        {field: 'password', title: __('Password')},
                        {field: 'status', title: __('Status'), searchList: {"normal":__('Status normal'),"hidden":__('Status hidden')}, formatter: Table.api.formatter.status},
                        {field: 'phone', title: __('Phone')},
                        {field: 'openid', title: __('Openid')},
                        {field: 'real_name', title: __('Real_name')},
                        {field: 'nick_name', title: __('Nick_name')},
                        {field: 'headavatar', title: __('Headavatar'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'identity_frontal_image', title: __('Identity_frontal_image'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'identity_verso_image', title: __('Identity_verso_image'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'province_name', title: __('Province_name')},
                        {field: 'province_code', title: __('Province_code')},
                        {field: 'city_name', title: __('City_name')},
                        {field: 'city_code', title: __('City_code')},
                        {field: 'area_name', title: __('Area_name')},
                        {field: 'area_code', title: __('Area_code')},
                        {field: 'profession', title: __('Profession')},
                        {field: 'genderdata', title: __('Genderdata'), searchList: {"unknown":__('Genderdata unknown'),"male":__('Genderdata male'),"female":__('Genderdata female')}, formatter: Table.api.formatter.normal},
                        {field: 'age', title: __('Age')},
                        {field: 'stature', title: __('Stature')},
                        {field: 'bodyweight', title: __('Bodyweight'), operate:'BETWEEN'},
                        {field: 'birthday', title: __('Birthday'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'school', title: __('School')},
                        {field: 'maritalstatuslist', title: __('Maritalstatuslist'), searchList: {"spinsterhood":__('Maritalstatuslist spinsterhood'),"married":__('Maritalstatuslist married'),"divorced":__('Maritalstatuslist divorced')}, formatter: Table.api.formatter.normal},
                        {field: 'educationlist', title: __('Educationlist'), searchList: {"illiteracy":__('Educationlist illiteracy'),"primary":__('Educationlist primary'),"middle":__('Educationlist middle'),"senior":__('Educationlist senior'),"junior":__('Educationlist junior'),"regular":__('Educationlist regular'),"graduate":__('Educationlist graduate'),"doctor":__('Educationlist doctor'),"postdoctor":__('Educationlist postdoctor')}, formatter: Table.api.formatter.normal},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
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