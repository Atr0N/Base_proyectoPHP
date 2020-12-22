<?php

    class Dashboard extends Controllers{
        public function __construct()
        {
            parent::__construct();            
        }

        public function dashboard()
        {
            $data['page_id'] = 2;
            $data['page_tag'] = "Dashboard - Tienda Virtual";
            $data['page_title']="Dashboard - Tienda Virtual";
            $data['page_name'] ="dashboard";
           $this->views->getView($this,"dashboard",$data);
        }
        
        /*public function insertar()
            {
                $data = $this->model->setUser("Jose",12);
                print_r($data);
                $data = $this->model->setUser("NAI",16);
                print_r($data);
                $data = $this->model->setUser("Matias",24);
                print_r($data);
            }
            public function verusuario($id)
            {
                $data = $this->model->getUser($id);
                print_r($data);
            }
            public function actualizar()
            {
                $data = $this->model->updateUser(1,"Roberto",20);
                print_r ($data);
            }
            public function verusuarios()
            {
                $data = $this->model->getUsers();
                print_r($data);
            }
            public function eliminarUsuario($id)
            {
                $data = $this->model->delUser($id);
                print_r ($data); }*/
       
         
    
   
   
   
    }


?>