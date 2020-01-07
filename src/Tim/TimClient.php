<?php

namespace BiuBiuJun\QCloud\Tim;

use BiuBiuJun\QCloud\Kernel\AbstractClient;
use BiuBiuJun\QCloud\Kernel\HttpClient\TlsSigHttpClient;

/**
 * Class TimClient
 *
 * @package BiuBiuJun\QCloud\Tim
 */
class TimClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $baseUri = 'https://console.tim.qq.com/';

    /**
     * TimClient constructor.
     *
     * @param string $sdkAppId
     * @param string $identifier
     */
    public function __construct(string $sdkAppId, string $identifier)
    {
        $this->sdkAppId = $sdkAppId;
        $this->identifier = $identifier;
    }

    public function setSignForEcdsa(string $privateKey, string $publicKey)
    {
        $this->privateKey = $privateKey;
        $this->publicKey = $publicKey;
        $this->sigVersion = 'V1';
    }

    public function setSignForHmac(string $key)
    {
        $this->key = $key;
        $this->sigVersion = 'V2';
    }

    /**
     * @return \BiuBiuJun\QCloud\Kernel\HttpClient\TlsSigHttpClient
     * @throws \BiuBiuJun\QCloud\Exceptions\InvalidArgumentException
     */
    public function getClient()
    {
        if (!$this->client instanceof TlsSigHttpClient) {
            $this->client = new TlsSigHttpClient($this->sdkAppId, $this->identifier, $this->getTlsSign(), $this->baseUri);
        }

        return $this->client;
    }
}
