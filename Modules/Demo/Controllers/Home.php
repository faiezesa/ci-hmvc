<?php
    
    namespace App\Modules\Demo\Controllers;
    
    use App\Controllers\BaseController;
    
    class Home extends BaseController
    {
        public function __construct()
        {
        
        }
        
        public function index()
        {
            return $this->blade('Module Demo');
        }
    }
