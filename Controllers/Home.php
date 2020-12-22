<?php

    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();            
        }

        public function home()
        {
            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title']="Pagina Principal";
            $data['page_name'] ="home";
            $data['page_content']="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit similique modi maiores unde praesentium animi placeat! Eligendi dolore ea dolor dolores sequi iste facere possimus laudantium perferendis. Repellat, praesentium aut?";
           $this->views->getView($this,"home",$data);
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