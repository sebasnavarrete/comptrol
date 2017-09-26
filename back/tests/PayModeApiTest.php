<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PayModeApiTest extends TestCase
{
    use MakePayModeTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePayMode()
    {
        $payMode = $this->fakePayModeData();
        $this->json('POST', '/api/v1/payModes', $payMode);

        $this->assertApiResponse($payMode);
    }

    /**
     * @test
     */
    public function testReadPayMode()
    {
        $payMode = $this->makePayMode();
        $this->json('GET', '/api/v1/payModes/'.$payMode->id);

        $this->assertApiResponse($payMode->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePayMode()
    {
        $payMode = $this->makePayMode();
        $editedPayMode = $this->fakePayModeData();

        $this->json('PUT', '/api/v1/payModes/'.$payMode->id, $editedPayMode);

        $this->assertApiResponse($editedPayMode);
    }

    /**
     * @test
     */
    public function testDeletePayMode()
    {
        $payMode = $this->makePayMode();
        $this->json('DELETE', '/api/v1/payModes/'.$payMode->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/payModes/'.$payMode->id);

        $this->assertResponseStatus(404);
    }
}
