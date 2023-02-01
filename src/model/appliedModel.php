<?php


    class appliedModel{

        private $id;// int AI PK 
        private $company_id;// int 
        private $patch_id;// int 
        private $comments;// text 
        private $date;// datetime


        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of company_id
         */ 
        public function getCompany_id()
        {
                return $this->company_id;
        }

        /**
         * Set the value of company_id
         *
         * @return  self
         */ 
        public function setCompany_id($company_id)
        {
                $this->company_id = $company_id;

                return $this;
        }

        /**
         * Get the value of patch_id
         */ 
        public function getPatch_id()
        {
                return $this->patch_id;
        }

        /**
         * Set the value of patch_id
         *
         * @return  self
         */ 
        public function setPatch_id($patch_id)
        {
                $this->patch_id = $patch_id;

                return $this;
        }

        /**
         * Get the value of comments
         */ 
        public function getComments()
        {
                return $this->comments;
        }

        /**
         * Set the value of comments
         *
         * @return  self
         */ 
        public function setComments($comments)
        {
                $this->comments = $comments;

                return $this;
        }

        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        function __construct()
        {

        }

        function create()
        {
                try {
                        $db = Database::getInstancePDO();
                        //token
                        $sql = "select md5(concat(cast(max(id) as char), '" . $this->name . "')) as token from recorder.companies";
                        $stmt = $db->prepare($sql);
                        $stmt->execute();
                        $obj = $stmt->fetchObject();
                        $this->token = $obj->token;
            
                        $sql = "insert into recorder.apllied (                                    
                                    company_id,
                                    patch_id,
                                    comments,
                                    date                                    
                                ) VALUES (
                                    :company_id,
                                    :patch_id,
                                    :comments,
                                    :date
                                ); ";
                        $stmt = $db->prepare($sql);
                        $stmt->bindValue(':company_id', $this->company_id);
                        $stmt->bindValue(':patch_id', $this->patch_id);
                        $stmt->bindValue(':comments', $this->tocommentsken);
                        $stmt->bindValue(':date', $this->date);
                        
                        $stmt->execute();
                        $this->id = $db->lastInsertId();
                        return true;
                    } catch (\PDOException $e) {
                        global $error;
                        $error = $e;
                    }

        }

        static function read()
        {   
                $db = Database::getInstancePDO();
                $sql_read = 'SELECT id, comments FROM applied';
                $stmt = $db->prepare($sql_read);
                $stmt->execute();

               // print_r($stmt->fetchAll(\PDO::FETCH_ASSOC));exit;
               if ($stmt->rowCount() > 0) {
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
                } else {
                throw new \Exception("Nenhum registro encontrado!");
                }
                
        }
        
        
        function update()
        {

        }
        
        function delete()
        {

        }

        function fill($raw)
        {
                $this->id = $raw['id'];
                $this->company_id = $raw['company_id'];
                $this->patch_id = $raw['patch_id'];
                $this->comments = $raw['comments'];
                $this->date = $raw['date'];
                
                return $this;
        }

    function validate () {
        /*$arrMsg = [];

        if ($this->name == '') {
            $arrMsg['message'][] = 'Informe o Cliente';
        }
        if ($this->debug == '') {
            $arrMsg['message'][] = 'Selecione o Debug';
        }
        if ($this->abcMethod == '') {
            $arrMsg['message'][] = 'Selecione o Método ABC ';
        }
        if (count($arrMsg) > 0) {
            $arrMsg['type'] = 'danger';
        }

        return $arrMsg;*/
    }
}