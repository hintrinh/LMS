<?php
namespace Home\Controller;

use Think\Controller;
use Think\Page;

class MainController extends Controller
{
	
	public function sessionCheck() //session检测方法
    {
        if (!session("id")) {
            //die(ACTION_NAME);
            session("nologurl",ACTION_NAME);//未登陆时将action记录到session
            $this->error("您尚未登陆!", U('User/showLogin')); //返回登陆页面
        }
	}
	protected function _model(){
        return new \Think\Model();
    }
	public function showMain(){		//主界面显示，包括页头页脚
		$info = array(
			'操作系统'=>PHP_OS,
			'运行环境'=>$_SERVER["SERVER_SOFTWARE"],
			'PHP运行方式'=>php_sapi_name(),
			'ThinkPHP版本'=>THINK_VERSION.' [ <a href="http://thinkphp.cn" target="_blank">查看最新版本</a> ]',
			'上传附件限制'=>ini_get('upload_max_filesize'),
			'执行时间限制'=>ini_get('max_execution_time').'秒',
			'服务器时间'=>date("Y年n月j日 H:i:s"),
			'北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
			'服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
			'剩余空间'=>round((disk_free_space(".")/(1024*1024)),2).'M',
			'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
			'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
			'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
		);
		$mysql=array(
			'mysql_version' =>$this->_mysql_version(),//mysql 版本  
            'mysql_size' =>$this->_mysql_db_size(), //mysql数据库大小  
			 'max_ex_time' =>ini_get("max_execution_time")."秒", //脚本最大执行时间 
		);
		$m['title']="LMS - 主界面";
		$this->assign($m);
		$this->assign('info',$info);
		$this->assign('mysql',$mysql);
		layout(true);
		$this->display();
		}
	private function _mysql_version()
    {
        $Model = self::_model();
        $version = $Model->query("select version() as ver");
        return $version[0]['ver'];
    }
    private function _mysql_db_size()
    {        
        $Model = self::_model();
        $sql = "SHOW TABLE STATUS FROM ".C('DB_NAME');
        $tblPrefix = C('DB_PREFIX');
        if($tblPrefix != null) {
            $sql .= " LIKE '{$tblPrefix}%'";
        }
        $row = $Model->query($sql);
        $size = 0;
        foreach($row as $value) {
            $size += $value["Data_length"] + $value["Index_length"];
        }
        return round(($size/1048576),2).'M';
    }
	
	 public function editProfile(){		//修改资料view
        $this->sessionCheck();
        $user = M("User")->getById(session("id"));
        $this->assign("title", "编辑资料");
        $this->assign("data", $user);
		layout(true);
        $this->display();
    }
	public function doEditProfile(){//修改资料操作
        $user = M("User");
        $rules = array(
			array('name','require','用户名必须填写！') ,
            array('email', 'require', '邮箱地址必须填写哦!')
			
           
        );
        if (!$user->validate($rules)->field("name,email")->where("id=" . session("id"))->create()) {
            $this->error($user->getError()); //创建失败回显原因
        }
        if ($user->save()) {
            $this->success("管理员资料修改成功!", U("Main/editProfile"));
        } else {
            $this->error("没有改动任何内容!");
        }
    }
	/*	读者信息增删改	*/
	
	/*	Start	*/
	
	public function addReader(){
		$m['title']="LMS - 添加读者信息";
		$m['action']=U("Main/doAddReader");
		$this->assign($m);
		layout(true);
		$this->display();
		
		
	}
	public function doAddReader(){
		
		$reader=M("reader");
		/* $types=$_POST['reader_types'];
		echo $types; */
		$rules=array(
			array('reader_name','require','姓名未填写！'),
			array('reader_card','require','借书卡号未填写！')
		);
		if(!$reader->validate($rules)->field(array('reader_name','reader_types','reader_card','reader_department','reader_class'))->create()){ 
            $this->error($reader->getError());
        }
        if($reader->add()){
            $this->success('读者信息添加成功', U('Main/addReader'));
        }else{
			$this->error("添加失败！");
		}
	}
	public function updateReader(){
		$m['title']="LMS - 修改读者信息";
		$this->assign($m);
		$reader=M("reader");
		import('Org.Util.Page');
		$count=$reader->count();
		$Page=new Page($count,10);
		$show=$Page->show();
		$data=$reader->order('reader_id')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		layout(true);
		$this->display();
		
		
		
	}
	public function editReader(){
		$id=$_GET['id'];
		$m['id']=$id;
		$m['title']="LMS - 修改读者信息";
		$m['action']=U("Main/doUpdateReader");
		$this->assign($m);				
		layout(true);
		$this->display();
	}
	public function doUpdateReader(){
		$reader=M("reader");
		$data['reader_id']=(int)$_POST['reader_id'];
		$data['reader_name']=$_POST['reader_name'];
		$data['reader_types']=$_POST['reader_types'];
		$data['reader_card']=$_POST['reader_card'];
		$data['reader_department']=$_POST['reader_department'];
		$data['reader_class']=$_POST['reader_class'];
		
        if($reader->save($data)){
            $this->success("读者资料修改成功!", U("Main/updateReader"));
        } else {
            $this->error("没有改动任何内容!");
         }
	}
	public function deleteReader(){
		$m['title']="LMS - 删除读者信息";
		$this->assign($m);
		$reader=M("reader");
		$this->data=$reader->select();
		layout(true);
		$this->display();
	}
	public function doDeleteReader(){
		$reader=M("reader");
		$id=$_GET['id'];
		$m['id']=$id;
		if($reader->where("reader_id=".$id)->delete()){
            $this->success("读者资料删除成功!", U("Main/deleteReader"));
        } else {
            $this->error("删除失败!");
         }
		
	}
	/*	End	*/
	
	/*	图书管理增删改	*/
	
	/*	Starrt	*/
	public function addBook(){
		$m['title']="LMS - 图书入库";
		$m['action']=U("Main/doStorage");
		$this->assign($m);
		layout(true);
		$this->display();
	}
	public function doStorage(){
		$rules=array(
		array('bookname','require','书名未填写！'),
            array('isbn','require','书籍编码未填写！'),
            array('class','require','书籍类别未选择！'),
			array('author','require','作者未填写！'),
			array('publish','require','出版社未填写！'),
            array('tsdj','require','书籍单价未填写！'),
            array('cfwz','require','存放位置未填写！'),            
            array('rksl','require','入库数量未填写！'),
            
		);
		$book=M("book");
		if(!$book->validate($rules)->field(array('bookname','isbn','class','author','publish','tsdj','rksj','cfwz','rksl','intro'))->create()){ 
            $this->error($user->getError());
        }
        if($book->add()){
            $this->success('图书入库成功', U('Main/addBook'));
        }else{
			$this->error("添加失败！");
		}
	}
	public function updateBook(){
		$m['title']="LMS - 修改图书信息";
		$this->assign($m);
		$book=M("book");
		import('Org.Util.Page');
		$count=$book->count();
		$Page=new Page($count,10);
		$show=$Page->show();
		$data=$book->order('book_id')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		layout(true);
		$this->display();
	}
	public function editBook(){
		$id=$_GET['id'];
		$m['id']=$id;
		$m['title']="LMS - 修改图书信息";
		$m['action']=U("Main/doUpdateBook");
		$this->assign($m);				
		layout(true);
		$this->display();
	}
	public function doUpdateBook(){
		$book=M("book");
		$data['book_id']=(int)$_POST['book_id'];		
		$data['class']=$_POST['class'];		
		$data['bookname']=$_POST['bookname'];		
		$data['isbn']=(int)$_POST['isbn'];		
		$data['author']=$_POST['author'];		
		$data['publish']=$_POST['publish'];		
		$data['tsdj']=$_POST['tsdj'];		
		$data['rksj']=$_POST['rksj'];
		$data['cfwz']=$_POST['cfwz'];
		$data['rksl']=(int)$_POST['rksl'];
		$data['intro']=$_POST['intro'];
		
		 if($book->save($data)){
            $this->success("图书资料修改成功!", U("Main/updateBook"));
        } else {
            $this->error("没有改动任何内容!");
         }
		
	}
	public function deleteBook(){
		$m['title']="LMS - 删除图书信息";
		$this->assign($m);
		$book=M("book");
		$this->data=$book->select();
		layout(true);
		$this->display();
	}
	public function doDeleteBook(){
		$book=M("book");
		$id=$_GET['id'];
		$m['id']=$id;
		if($book->where("book_id=".$id)->delete()){
            $this->success("读者资料删除成功!", U("Main/deleteBook"));
        } else {
            $this->error("删除失败!");
         }
	}
	/*	End	*/
	
	/*	图书借阅管理模块	*/
	
	/*	Start	*/	
	public function lendBook(){
		$m['title']="LMS - 图书借阅";
		$m['action']=U("Main/queryBook");
		$book=M("book");
		import('Org.Util.Page');
		$count=$book->count();
		$Page=new Page($count,10);
		$show=$Page->show();
		$data=$book->order('book_id')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		layout(true);
//		var_dump($show);
		$this->assign($m);
		$this->display();
	}
	public function queryBook(){
		$json =$_REQUEST;
//		var_dump($json);
		$query_class=$json['class'];
		$condition=$json['condition'];
//		var_dump($condition);
		$map[$query_class]=array('like','%'.$condition.'%');
		$book=M("book");
		$this->data=$book->where($map)->select();
		layout(true);
		$this->display('lendBook');
	}
	public function doLendBook(){
		$bid=$_GET['id'];
		$m['title']='';
		$reader=M('reader');
		import('Org.util.Page');
		$count=$reader->count();


	}

	

}
