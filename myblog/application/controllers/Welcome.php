<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function login()
    {
        $this->load->view('login');
    }
    public function regist()
    {
        $this->load->view('regist');
    }
    public function save(){
	    //1.接收数据
        $name = $this->input->post('username');
        $pwd1 = $this->input->post('pwd1');
        $pwd2 = $this->input->post('pwd2');

        $data = array(
//            'name' => $name,
        );
//        $flag = TRUE;
        //2.验证信息
        if ($name == ''){
            $data['name_error'] = '用户名不能为空';
//            $flag = FALSE;
            //页面跳转,加载页面，一次请求
//            $this->load->view('regist',$data);
            //重定向，两次请求，不可以传参
//            redirect("welcome/regist");
            }
       if ($pwd1 != $pwd2){
            $data['pwd_error'] = '两次密码不一致';
//           $flag = FALSE;
       }
       if (count($data) >1 ){
           $this->load->view('regist',$data);
       }
       else{
           //3.链接数据库（加载model，调用model里的方法）
           $this->load->model('User_model');
           $rows = $this -> User_model -> save($name,$pwd1);

           if($rows > 0){
               echo 'success';
           }else{
               echo 'fail';
           }

       }

        //4.跳转页面
    }
    public function login_check(){
        $name = $this -> input ->post('username');
        $pwd = $this -> input ->post('pwd');

        $this->load->model('User_model');

        $result = $this->User_model->get_user_by_name_and_pwd($name,$pwd);

        //将用户信息存到session里面
//        $this->session->set_userdata('user',$result);

//		var_dump($result);
        $this -> load ->view('welcome_message',array(
//            'age'=> 13
                'user'=>$result
        ));

    }
    public function detail(){
        $this -> load ->view('detail');
    }

//http://localhost/myci/welcome/login
//http://localhost/项目名/控制器/方法
}
