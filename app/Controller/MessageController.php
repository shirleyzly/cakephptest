<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppController', 'Controller');

class MessageController extends AppController
{
    //公共方法
    var $components = array('Session','Cookie');
    /**
     * 首页
     * @author shirley
     */
    public function index()
    {   
        $this->set('title_for_layout', '在线留言-科之润咖啡');  
        $this->layout = 'Home/default';
    }  

}
