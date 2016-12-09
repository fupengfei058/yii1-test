<?php
/**
 * Created by PhpStorm.
 * User: fupengfei
 * Date: 2016/12/9
 * Time: 11:49
 */
class ContestantController extends Controller
{
    public function actionIndex()
    {
        //设置cookie:
        /*$cookie = new CHttpCookie('mycookie','this is my cookie'); ;
        $cookie->expire = time()+60*60*24*30;
        Yii::app()->request->cookies['mycookie']= $cookie;

        //读取cookie:
        $cookie = Yii::app()->request->getCookies();
        echo $cookie['mycookie']->value;

        //销毁cookie:
        $cookie = Yii::app()->request->getCookies();
        unset($cookie['mycookie']);

        $this->render('index');*/
    }

    //增加记录
    public function actionAdd()
    {
        $model = new Contestant();

        $model->attributes = $_POST['Contestant'];
        if(!empty($_POST['Contestant']['picList'])){
            //文件上传
            $file = CUploadedFile::getInstance($model,'picList'); //获取表单名为filename的上传信息
            $filename = $file->getName();//获取文件名
            $filesize = $file->getSize();//获取文件大小
            $filetype = $file->getType();//获取文件类型
            $model->picList = $filename;//数据库中要存放文件名
            $uploadfile='./assets/upload/'.time().$filename;
            $file->saveAs($uploadfile,true);//上传操作
        }

        if($model->save()){
            Yii::app()->user->setFlash('success','添加成功');
            $this->redirect(array('add'));
        }else{
            echo 1;
        }

        $this->renderPartial("add",array("model"=>$model));
    }

    //查询记录
    public function actionInfo()
    {
        $contestant = new Contestant;
        $info = $contestant -> findAll();
        foreach($info as $val){
            print_r($val->contestantName);
            echo "<br />";
        }
    }

    //更新记录
    public function actionUpdate()
    {
        $contestant = Contestant::model() -> findByPk(2);
        $contestant -> mobile = '10000';
        $contestant -> save();
    }

    //删除记录
    public function actionDelete()
    {
        $contestant = Contestant::model() -> findByPk(3);
        $contestant -> delete();
    }

}