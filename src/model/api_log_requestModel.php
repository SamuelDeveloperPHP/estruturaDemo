<?php

    class api_log_requestModel{
        
        private $apilogrequestid;// int AI PK 
        private $companyid;// int 
        private $url;// text 
        private $method;// varchar(20) 
        private $created;// datetime 
        private $header;// text 
        private $payload;// text 
        private $agent;// text 
        private $ip;// text
        

        /**
         * Get the value of apilogrequestid
         */ 
        public function getApilogrequestid()
        {
                return $this->apilogrequestid;
        }

        /**
         * Set the value of apilogrequestid
         *
         * @return  self
         */ 
        public function setApilogrequestid($apilogrequestid)
        {
                $this->apilogrequestid = $apilogrequestid;

                return $this;
        }

        /**
         * Get the value of companyid
         */ 
        public function getCompanyid()
        {
                return $this->companyid;
        }

        /**
         * Set the value of companyid
         *
         * @return  self
         */ 
        public function setCompanyid($companyid)
        {
                $this->companyid = $companyid;

                return $this;
        }

        /**
         * Get the value of url
         */ 
        public function getUrl()
        {
                return $this->url;
        }

        /**
         * Set the value of url
         *
         * @return  self
         */ 
        public function setUrl($url)
        {
                $this->url = $url;

                return $this;
        }

        /**
         * Get the value of method
         */ 
        public function getMethod()
        {
                return $this->method;
        }

        /**
         * Set the value of method
         *
         * @return  self
         */ 
        public function setMethod($method)
        {
                $this->method = $method;

                return $this;
        }

        /**
         * Get the value of created
         */ 
        public function getCreated()
        {
                return $this->created;
        }

        /**
         * Set the value of created
         *
         * @return  self
         */ 
        public function setCreated($created)
        {
                $this->created = $created;

                return $this;
        }

        /**
         * Get the value of header
         */ 
        public function getHeader()
        {
                return $this->header;
        }

        /**
         * Set the value of header
         *
         * @return  self
         */ 
        public function setHeader($header)
        {
                $this->header = $header;

                return $this;
        }

        /**
         * Get the value of payload
         */ 
        public function getPayload()
        {
                return $this->payload;
        }

        /**
         * Set the value of payload
         *
         * @return  self
         */ 
        public function setPayload($payload)
        {
                $this->payload = $payload;

                return $this;
        }

        /**
         * Get the value of agent
         */ 
        public function getAgent()
        {
                return $this->agent;
        }

        /**
         * Set the value of agent
         *
         * @return  self
         */ 
        public function setAgent($agent)
        {
                $this->agent = $agent;

                return $this;
        }

        /**
         * Get the value of ip
         */ 
        public function getIp()
        {
                return $this->ip;
        }

        /**
         * Set the value of ip
         *
         * @return  self
         */ 
        public function setIp($ip)
        {
                $this->ip = $ip;

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
                $sql = 'SELECT * FROM api_log_request';
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
                $this->apilogrequestid = $raw['apilogrequestid'];
                $this->companyid = $raw['companyid'];
                $this->url = $raw['url'];
                $this->method = $raw['method'];
                $this->created = $raw['created'];
                $this->header = $raw['header'];
                $this->payload = $raw['payload'];
                $this->agent = $raw['agent'];
                $this->ip = $raw['ip'];
                
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
