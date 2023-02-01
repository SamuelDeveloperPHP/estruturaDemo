<?php

    class patchesModel{

        private $id;// int AI PK
        private $name;// varchar(64)
        private $description;// text
        private $version;// varchar(9)
        private $has_file;// tinyint
        private $enable;// tinyint
        private $deleted;// varchar(45)


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
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of version
         */ 
        public function getVersion()
        {
                return $this->version;
        }

        /**
         * Set the value of version
         *
         * @return  self
         */ 
        public function setVersion($version)
        {
                $this->version = $version;

                return $this;
        }

        /**
         * Get the value of has_file
         */ 
        public function getHas_file()
        {
                return $this->has_file;
        }

        /**
         * Set the value of has_file
         *
         * @return  self
         */ 
        public function setHas_file($has_file)
        {
                $this->has_file = $has_file;

                return $this;
        }

        /**
         * Get the value of enable
         */ 
        public function getEnable()
        {
                return $this->enable;
        }

        /**
         * Set the value of enable
         *
         * @return  self
         */ 
        public function setEnable($enable)
        {
                $this->enable = $enable;

                return $this;
        }

        /**
         * Get the value of deleted
         */ 
        public function getDeleted()
        {
                return $this->deleted;
        }

        /**
         * Set the value of deleted
         *
         * @return  self
         */ 
        public function setDeleted($deleted)
        {
                $this->deleted = $deleted;

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
                $sql = 'SELECT * FROM patches';
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
                $this->id = $raw['id'];
                $this->name = $raw['name'];
                $this->description = $raw['description'];
                $this->version = $raw['version'];
                $this->has_file = $raw['has_file'];
                $this->enable = $raw['enable'];
                $this->deleted = $raw['deleted'];
               
                return $this;
        }

        function validate () {
                /*
                $arrMsg = [];

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

                return $arrMsg;
                */
        }
}