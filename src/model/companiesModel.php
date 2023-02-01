<?php

/**
 * [Description companiesModel]
 */
class companiesModel
{
    private $id; // int(11) AI PK 
    private $name; // varchar(100) 
    private $label; // varchar(100) 
    private $deleted; // tinyint(3) UN 
    private $token; // varchar(100) 
    private $debug; // enum('true','false') 
    private $abcMethod; // enum('invoices','orders','2') 
    private $isCobranca; // enum('true','false') 
    private $app; // enum('true','false') 
    private $api; // enum('1','2','3') 
    private $created; // datetime 
    private $updated; // datetime
    //abstract
    private $flagDeleted;

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
     * Get the value of label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */
    public function setLabel($label)
    {
        $this->label = $label;

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
     * Get the value of debug
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Set the value of debug
     *
     * @return  self
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * Get the value of abcMethod
     */
    public function getAbcMethod()
    {
        return $this->abcMethod;
    }

    /**
     * Set the value of abcMethod
     *
     * @return  self
     */
    public function setAbcMethod($abcMethod)
    {
        $this->abcMethod = $abcMethod;

        return $this;
    }

    /**
     * Get the value of isCobranca
     */
    public function getIsCobranca()
    {
        return $this->isCobranca;
    }

    /**
     * Set the value of isCobranca
     *
     * @return  self
     */
    public function setIsCobranca($isCobranca)
    {
        $this->isCobranca = $isCobranca;

        return $this;
    }

    /**
     * Get the value of app
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Set the value of app
     *
     * @return  self
     */
    public function setApp($app)
    {
        $this->app = $app;

        return $this;
    }

    /**
     * Get the value of api
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * Set the value of api
     *
     * @return  self
     */
    public function setApi($api)
    {
        $this->api = $api;

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
     * Get the value of updated
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set the value of updated
     *
     * @return  self
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    function __construct()
    {
    }

    /**
     * @return [type]
     */
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

    function read()
    {
        $db = Database::getInstancePDO();
        $sql = "SELECT * FROM recorder.companies WHERE true";
        if ($this->id) {
            $sql .= " and id = " . $this->id;
        }
        if (!$this->flagDeleted) {
            $sql .= " and deleted = 0";
        }

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
        $db = Database::getInstancePDO();
        $sql = 'UPDATE recorder.companies 
                SET 
                    name = :name, 
                    label = :label, 
                    debug = :debug, 
                    abcMethod = :abcMethod, 
                    isCobranca = :isCobranca, 
                    app = :app, 
                    api = :api
                WHERE id = :id';
        $stmt = $db->prepare($sql);

        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':label', $this->label);
        $stmt->bindValue(':debug', $this->debug);
        $stmt->bindValue(':abcMethod', $this->abcMethod);
        $stmt->bindValue(':isCobranca', $this->isCobranca);
        $stmt->bindValue(':app', $this->app);
        $stmt->bindValue(':api', $this->api);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
    }


    function delete()
    {
        $db = Database::getInstancePDO();
        try {
            $sql = 'UPDATE recorder.companies 
            SET deleted = "1"                   
            WHERE id=:id ';
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();

            return true;
        } catch (\PDOException $e) {
            global $error;
            $error = $e;
        }
    }

    function fill($raw)
    {
        $this->id = $raw['id'];
        $this->name = $raw['name'];
        $this->label = $raw['label'];
        $this->deleted = $raw['deleted'];
        $this->token = $raw['token'];
        $this->debug = $raw['debug'];
        $this->abcMethod = $raw['abcMethod'];
        $this->isCobranca = $raw['isCobranca'];
        $this->app = $raw['app'];
        $this->api = $raw['api'];
        $this->created = $raw['created'];
        $this->updated = $raw['updated'];

        return $this;
    }

    function validate()
    {
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
    }

    /**
     * Get the value of flagDeleted
     */
    public function getFlagDeleted()
    {
        return $this->flagDeleted;
    }

    /**
     * Set the value of flagDeleted
     *
     * @return  self
     */
    public function setFlagDeleted($flagDeleted)
    {
        $this->flagDeleted = $flagDeleted;

        return $this;
    }
}
