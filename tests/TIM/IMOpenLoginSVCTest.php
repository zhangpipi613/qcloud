<?php

namespace BiuBiuJun\Tests\TIM;

use BiuBiuJun\QCloud\TIM\Parameters\AccountDeleteItem;
use BiuBiuJun\QCloud\TIM\Requests\AccountDeleteRequest;
use BiuBiuJun\QCloud\TIM\Requests\AccountImportRequest;
use BiuBiuJun\QCloud\TIM\Requests\KickRequest;
use BiuBiuJun\QCloud\TIM\Requests\MultiAccountImportRequest;
use BiuBiuJun\Tests\TestCase;

class IMOpenLoginSVCTest extends TestCase
{
    public function testAccountImport()
    {
        $request = new AccountImportRequest('ak47-biubiubiu', 'ak47');
        $response = $this->getTIMClient()->sendRequest($request);

        $this->assertTrue($response->isSuccessful());
    }

    public function testMultiAccountImport()
    {
        $request = new MultiAccountImportRequest([
            'ak47-001',
            'ak47-002',
            'ak47-003',
        ]);
        $response = $this->getTIMClient()->sendRequest($request);

        $this->assertTrue($response->isSuccessful());
    }

    public function testAccountDelete()
    {
        $accountDeleteItem = new AccountDeleteItem([
            'ak47-001',
            'ak47-002',
        ]);
        $request = new AccountDeleteRequest($accountDeleteItem);
        $response = $this->getTIMClient()->sendRequest($request);

        $this->assertTrue($response->isSuccessful());
    }

    public function testKick()
    {
        $request = new KickRequest('ak47-biubiubiu');
        $response = $this->getTIMClient()->sendRequest($request);

        $this->assertTrue($response->isSuccessful());
    }
}