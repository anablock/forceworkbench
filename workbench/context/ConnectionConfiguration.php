<?php
 
class ConnectionConfiguration {
    private $sessionId;
    private $isSecure;
    private $host;
    private $apiVersion;

    function __construct($sessionId, $isSecure, $host, $apiVersion) {
        $this->sessionId = $sessionId;
        $this->isSecure = $isSecure;
        $this->host = $host;
        $this->setApiVersion($apiVersion);
    }

    function getSessionId() {
        return $this->sessionId;
    }

    function isSecure() {
        return $this->isSecure;
    }

    function getHost() {
        return $this->host;
    }

    function setApiVersion($apiVersion) {
        $this->apiVersion = floor($apiVersion) == $apiVersion ? floor($apiVersion) . ".0" : $apiVersion;
    }

    function getApiVersion() {
        return $this->apiVersion;
    }
}

?>
