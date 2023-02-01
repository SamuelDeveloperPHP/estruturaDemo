<?php

    class api_batch_itemModel{

        private $id_batch;// int AI PK 
        private $status;// smallint 
        private $token; // varchar(32) 
        private $data; // text 
        private $log;// text 
        private $entidade;// varchar(45)
        

        /**
         * Get the value of id_batch
         */ 
        public function getId_batch()
        {
                return $this->id_batch;
        }

        /**
         * Set the value of id_batch
         *
         * @return  self
         */ 
        public function setId_batch($id_batch)
        {
                $this->id_batch = $id_batch;

                return $this;
        }

        /**
         * Get the value of status
         */ 
        public function getStatus()
        {
                return $this->status;
        }

        /**
         * Set the value of status
         *
         * @return  self
         */ 
        public function setStatus($status)
        {
                $this->status = $status;

                return $this;
        }

        /**
         * Get the value of token
         */ 
        public function getToken()
        {
                return $this->token;
        }

        /**
         * Set the value of token
         *
         * @return  self
         */ 
        public function setToken($token)
        {
                $this->token = $token;

                return $this;
        }

        /**
         * Get the value of data
         */ 
        public function getData()
        {
                return $this->data;
        }

        /**
         * Set the value of data
         *
         * @return  self
         */ 
        public function setData($data)
        {
                $this->data = $data;

                return $this;
        }

        /**
         * Get the value of log
         */ 
        public function getLog()
        {
                return $this->log;
        }

        /**
         * Set the value of log
         *
         * @return  self
         */ 
        public function setLog($log)
        {
                $this->log = $log;

                return $this;
        }

        /**
         * Get the value of entidade
         */ 
        public function getEntidade()
        {
                return $this->entidade;
        }

        /**
         * Set the value of entidade
         *
         * @return  self
         */ 
        public function setEntidade($entidade)
        {
                $this->entidade = $entidade;

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
                        $sql = "select md5(concat(cast(max(id) as char), '" . $this->status . "')) as token from recorder.companies";
                        $stmt = $db->prepare($sql);
                        $stmt->execute();
                        $obj = $stmt->fetchObject();
                        $this->token = $obj->token;
            
                        $sql = "insert into recorder.companies (
                                    name,
                                    label,
                                    token,
                                    debug,
                                    abcMethod,
                                    isCobranca,
                                    app,
                                    api,
                                    created
                                ) VALUES (
                                    :name,
                                    :label,
                                    :token,
                                    :debug,
                                    :abcMethod,
                                    :isCobranca,
                                    :app,
                                    :api,
                                    now() 
                                ); ";
                        $stmt = $db->prepare($sql);
                        $stmt->bindValue(':name', $this->name);
                        $stmt->bindValue(':label', $this->label);
                        $stmt->bindValue(':token', $this->token);
                        $stmt->bindValue(':debug', $this->debug);
                        $stmt->bindValue(':abcMethod', $this->abcMethod);
                        $stmt->bindValue(':isCobranca', $this->isCobranca);
                        $stmt->bindValue(':app', $this->app);
                        $stmt->bindValue(':api', $this->api);
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
                $sql = 'SELECT * FROM api_batch_item';
                $stmt = $db->prepare($sql);
                $stmt->execute();

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
                $this->id_item = $raw['id_item'];
                $this->id_batch = $raw['id_batch'];                
                $this->processado = $raw['processado'];
                $this->data = $raw['data'];
                $this->log = $raw['log'];
               
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
