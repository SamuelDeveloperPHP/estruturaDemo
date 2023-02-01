<?php

    class api_batchModel{

        private $id_item;// int AI PK 
        private $id_batch;// int 
        private $processado;// smallint 
        private $data;// text 
        private $log;// text


        /**
         * Get the value of id_item
         */ 
        public function getId_item()
        {
                return $this->id_item;
        }

        /**
         * Set the value of id_item
         *
         * @return  self
         */ 
        public function setId_item($id_item)
        {
                $this->id_item = $id_item;

                return $this;
        }

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
         * Get the value of processado
         */ 
        public function getProcessado()
        {
                return $this->processado;
        }

        /**
         * Set the value of processado
         *
         * @return  self
         */ 
        public function setProcessado($processado)
        {
                $this->processado = $processado;

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

        function __construct()
        {

        }

        function create()
        {

        }

        static function read()

        {   
                $db = Database::getInstancePDO();
                $sql = 'SELECT * FROM api_batch';
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

        }function fill($raw)
                {
                        $this->id_batch = $raw['id_batch'];
                        $this->status = $raw['status'];                
                        $this->token = $raw['token'];
                        $this->data = $raw['data'];
                        $this->log = $raw['log'];
                        $this->entidade = $raw['entidade'];
                        
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