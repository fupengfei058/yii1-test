<?php
/**
 * Created by PhpStorm.
 * User: fupengfei
 * Date: 2016/12/9
 * Time: 11:24
 */
class Record extends CActiveRecord{

    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    public function tableName(){
        return "{{vote_record}}";
    }

    public function actionInfo(){
        $record = new Record;
        $info = $record -> findAll();
        foreach($info as $val){
            print_r($val->contestantName);
            echo "<br />";
        }
    }
}