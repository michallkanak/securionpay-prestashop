<?php

class PrestashopCurlConnection extends \SecurionPay\Connection\CurlConnection
{

    /**
     * @var string
     */
    private $userAgentExtra;

    /**
     * @param string $securionPayPluginVersion
     */
    public function __construct($securionPayPluginVersion)
    {
        parent::__construct();

        $this->userAgentExtra = 'PrestaShop/' . _PS_VERSION_ . ' (SecurionPay-plugin/' . $securionPayPluginVersion . ')';
    }

    /**
     * @param string $url
     * @param array $headers
     * @return Response
     */
    public function get($url, $headers)
    {
        $headers = $this->updateUserAgent($headers);

        return parent::get($url, $headers);
    }

    /**
     * @param string $url
     * @param string $requestBody
     * @param array $headers
     * @return Response
     */
    public function post($url, $requestBody, $headers)
    {
        $headers = $this->updateUserAgent($headers);

        return parent::post($url, $requestBody, $headers);
    }

    /**
     * @param string $url
     * @param string $headers
     * @return Response
     */
    public function delete($url, $headers)
    {
        $headers = $this->updateUserAgent($headers);

        return parent::delete($url, $headers);
    }

    /**
     * @param array $headers
     * @return string
     */
    protected function updateUserAgent($headers)
    {
        $headers['User-Agent'] .= ' ' . $this->userAgentExtra;

        return $headers;
    }

}
