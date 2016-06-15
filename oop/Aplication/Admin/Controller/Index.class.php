<?php
namespace Aplication\Admin\Controller;
use \Core\DB;
class Index extends DB{
    public function users(){        
        $res = $this->query('ts_users');
        
    }    
}
