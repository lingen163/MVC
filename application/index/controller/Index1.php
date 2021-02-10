<?php
namespace app\index;
class Index{
    public function show(){              
        $data=model\model::getData();
        echo view\View::disPlay($data);
        return $data;       
    }
}
