<?php

//limit的两个参数 越过多少条 取多少条


class Page{
    //成员属性
    private $page=1;
    private $maxRows=0;
    private $pageSize=0;
    private $maxPage=0;

    function __construct($maxRows,$pageSize=5){
        //进行初始化操作
        $this->maxRows=$maxRows;
        $this->pageSize=$pageSize;
        $this->page=isset($_GET['page'])?$_GET['page']:1;
        //获取总页数
        $this->getMaxPage();
        //验证当前页的值
        $this->checkPage();
    }

    private function getMaxPage(){
        $this->maxPage=ceil($this->maxRows/$this->pageSize);
    }

    //验证当前页
    private function checkPage(){
        if($this->page>$this->maxPage){
            $this->page=$this->maxPage;
        }
        if($this->page<1){
            $this->page=1;
        }
    }

    //输出页码
    public function showPage(){
        $str='';
        $str.='当前页'.$this->page.'/'.$this->maxPage.'页，共'.$this->maxRows.'条&nbsp;&nbsp;';
        $str.='<a href="">首页</a>&nbsp;&nbsp;';
        $str.='<a href="">上一页</a>&nbsp;&nbsp;';
        $str.='<a href="">下一页</a>&nbsp;&nbsp;';
        $str.='<a href="">尾页</a>&nbsp;&nbsp;';
    }
    //返回分页的limit条件
    public function limit(){
        $num=($this->page-1)*$this->pageSize;
        $limit=$num.','.$this->pageSize;
        return $limit;
    }





}
































?>