<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this -> display();
    }
    
    public function thelast(){
        $data = M('port') -> select();
        $this -> assign('data', $data);
        $this -> display();
    }
    
    public function record(){
        $this -> display();
    }
    
    public function getdata() {
        if (IS_POST) {
            $carnum= I('post.carnum');
            $where['carnum'] = $carnum;
            $data = M('park_record') -> where($where) -> find();
            if ($data == null) {
                $re['status'] = 'false';
                $this -> ajaxReturn($re);
            } else {
                $where['pstatus'] = 1;
                $data = M('park_record') -> where($where) -> order('id desc') -> find();
                $re['status'] = 'true';
                $re['pid'] = $data['pid'];
                $this -> ajaxReturn($re);
            }
        }
    }
}