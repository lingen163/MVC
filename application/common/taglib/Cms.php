<?php
namespace app\common\taglib;
use think\template\TagLib;
//use think\Db;

class Cms extends TagLib{
    protected $tags=[
        'webname'=>['attr'=>'name','close'=>0],   //attr为参数，close是否封闭（为1封闭是双标签，为0不封闭是单标签）
        'copyright'=>['attr'=>'','close'=>0],  
        'news'=>['attr'=>'limit','close'=>1]
    ];
    public function tagWebname($tag){
        $name=$tag['name'];
        $domain=$tag['domain'];
        return $name.'公司官方网站'.$domain.'<br/>';
    }
    public function tagCopyright(){
        return 'Copyright ©1996-2021 SINA Corporation, All Rights Reserved'.'<br/>';
    }
    public function tagNews($tag,$content){
        $limit=isset($tag['limit'])?$tag['limit']:'';
        $str='<?php ';
        if($limit){
            $str.='$news=db("news")->limit('.$limit.')->select();';
        }else{
            $str.='$news=db("news")->select();';
        }
        $str.='foreach($news as $v):';
        $str.='extract($v);?>';
        $str.=$content;
        $str.="<?php endforeach; ?>";
        return $str;
    }
}