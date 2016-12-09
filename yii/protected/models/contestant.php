<?php
/**
 * Created by PhpStorm.
 * User: fupengfei
 * Date: 2016/12/9
 * Time: 11:54
 */
class Contestant extends CActiveRecord{

    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    public function tableName(){
        return "vote_contestant";
    }

    public function attributeLabels() {
        return array(
            "contestantName"=>"选手名称",
            "mobile"=>"电话",
            "email"=>"邮箱",
            "sex"=>"性别",
            "picList"=>"图片",
            "desc"=>"选手描述"
        );
    }

    public function rules() {
        return array(
            array("contestantName","required","message"=>"选手名称不能为空"),
            array("mobile",'length', 'max'=>13,"allowEmpty"=>false,"message"=>"号码长度不正确"),
            array("sex","in","range"=>array(1,2),"message"=>"性别有误"),
            array("picList","required","message"=>"图片不能为空"),
            array("desc","required","message"=>"选手描述不能为空"),
        );
    }

}