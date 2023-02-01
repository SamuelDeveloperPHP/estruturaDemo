<?php

    class api_log_responseModel{

        private $apilogresponseid;// int AI PK 
        private $apilogrequestid;// int 
        private $header;// text 
        private $http_code;// smallint 
        private $created;// datetime 
        private $msg_code;// varchar(100) 
        private $msg_description;// text 
        private $response;// text


        /**
         * Get the value of apilogresponseid
         */ 
        public function getApilogresponseid()
        {
                return $this->apilogresponseid;
        }

        /**
         * Set the value of apilogresponseid
         *
         * @return  self
         */ 
        public function setApilogresponseid($apilogresponseid)
        {
                $this->apilogresponseid = $apilogresponseid;

                return $this;
        }

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
         * Get the value of http_code
         */ 
        public function getHttp_code()
        {
                return $this->http_code;
        }

        /**
         * Set the value of http_code
         *
         * @return  self
         */ 
        public function setHttp_code($http_code)
        {
                $this->http_code = $http_code;

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
         * Get the value of msg_code
         */ 
        public function getMsg_code()
        {
                return $this->msg_code;
        }

        /**
         * Set the value of msg_code
         *
         * @return  self
         */ 
        public function setMsg_code($msg_code)
        {
                $this->msg_code = $msg_code;

                return $this;
        }

        /**
         * Get the value of msg_description
         */ 
        public function getMsg_description()
        {
                return $this->msg_description;
        }

        /**
         * Set the value of msg_description
         *
         * @return  self
         */ 
        public function setMsg_description($msg_description)
        {
                $this->msg_description = $msg_description;

                return $this;
        }

        /**
         * Get the value of response
         */ 
        public function getResponse()
        {
                return $this->response;
        }

        /**
         * Set the value of response
         *
         * @return  self
         */ 
        public function setResponse($response)
        {
                $this->response = $response;

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
                $sql = 'SELECT * FROM api_log_response';
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
        $this->apilogresponseid = $raw['apilogresponseid'];
        $this->apilogrequestid = $raw['apilogrequestid'];
        $this->header = $raw['header'];
        $this->http_code = $raw['http_code'];
        $this->created = $raw['created'];
        $this->msg_code = $raw['msg_code'];
        $this->msg_description = $raw['msg_description'];
        $this->iscobranca = $raw['isCobranca'];
        $this->response = $raw['response'];
        
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

