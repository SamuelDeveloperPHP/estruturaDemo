<?php

class database
{
    private static $instancePDO;

    public function __construct()
    {
    }

    /**
     * Método Singleton de conexão ao bd
     * 
     * @return [type]
     */
    public static function getInstancePDO()
    {
        if (self::$instancePDO == null) {
            self::$instancePDO = new PDO('mysql:host=' . _DEMO_DB_SERVER_  . ';dbname=' . _DEMO_DB_NAME_, _DEMO_DB_USER_, _DEMO_DB_PASSWORD_);
            self::$instancePDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instancePDO;
    }

    /**
     * @param mixed $api
     * 
     * @return [type]
     */
    static public function insertLogRequest($api)
    {
        global $recorderConfig;

        $db = self::getInstancePDO();

        $sql = "INSERT INTO api_log_request (companyid, url, method, created, header, payload, agent, ip) 
                VALUES (:companyid, :url, :method, now(), :header, :payload, :agent, :ip) ";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':companyid', $recorderConfig['company_id']);
        $stmt->bindValue(':url', $api->getUrl() ? $api->getUrl() : '/' );
        $stmt->bindValue(':method', $api->getPhpMethod());
        $stmt->bindValue(':header', json_encode($api->getHeaders()));
        $stmt->bindValue(':payload', $api->getPayload());
        $stmt->bindValue(':agent', $api->getAgent());
        $stmt->bindValue(':ip', $api->getIp());
        $stmt->execute();
        return $db->lastInsertId();
    }

    /**
     * @param mixed $htmlCode
     * @param mixed $message
     * @param mixed $messageTranslated
     * @param null $response
     * 
     * @return [type]
     */
    static public function insertLogResponse($htmlCode, $message, $messageTranslated, $response = null)
    {
        global $apiLogRequestId;

        $db = self::getInstancePDO();

        $sql = "INSERT INTO api_log_response (apilogrequestid, header, http_code, created, msg_code, msg_description, response) 
                VALUES (:apilogrequestid, :header, :http_code, now(), :msg_code, :msg_description, :response)";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':apilogrequestid', $apiLogRequestId);
        $stmt->bindValue(':header', json_encode([]));
        $stmt->bindValue(':http_code', $htmlCode);
        $stmt->bindValue(':msg_code', $message);
        $stmt->bindValue(':msg_description', $messageTranslated);
        $stmt->bindValue(':response', json_encode($response));
        $stmt->execute();

        return true;
    }
}
