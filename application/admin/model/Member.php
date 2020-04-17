<?php

namespace app\admin\model;

use think\Model;


class Member extends Model
{

    

    

    // 表名
    protected $name = 'member';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'status_text',
        'genderdata_text',
        'maritalstatuslist_text',
        'educationlist_text'
    ];
    

    
    public function getStatusList()
    {
        return ['normal' => __('Status normal'), 'hidden' => __('Status hidden')];
    }

    public function getGenderdataList()
    {
        return ['unknown' => __('Genderdata unknown'), 'male' => __('Genderdata male'), 'female' => __('Genderdata female')];
    }

    public function getMaritalstatuslistList()
    {
        return ['spinsterhood' => __('Maritalstatuslist spinsterhood'), 'married' => __('Maritalstatuslist married'), 'divorced' => __('Maritalstatuslist divorced')];
    }

    public function getEducationlistList()
    {
        return ['illiteracy' => __('Educationlist illiteracy'), 'primary' => __('Educationlist primary'), 'middle' => __('Educationlist middle'), 'senior' => __('Educationlist senior'), 'junior' => __('Educationlist junior'), 'regular' => __('Educationlist regular'), 'graduate' => __('Educationlist graduate'), 'doctor' => __('Educationlist doctor'), 'postdoctor' => __('Educationlist postdoctor')];
    }


    public function getStatusTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getGenderdataTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['genderdata']) ? $data['genderdata'] : '');
        $list = $this->getGenderdataList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getMaritalstatuslistTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['maritalstatuslist']) ? $data['maritalstatuslist'] : '');
        $list = $this->getMaritalstatuslistList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getEducationlistTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['educationlist']) ? $data['educationlist'] : '');
        $list = $this->getEducationlistList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
