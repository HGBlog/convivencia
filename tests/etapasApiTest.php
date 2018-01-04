<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class etapasApiTest extends TestCase
{
    use MakeetapasTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateetapas()
    {
        $etapas = $this->fakeetapasData();
        $this->json('POST', '/api/v1/etapas', $etapas);

        $this->assertApiResponse($etapas);
    }

    /**
     * @test
     */
    public function testReadetapas()
    {
        $etapas = $this->makeetapas();
        $this->json('GET', '/api/v1/etapas/'.$etapas->id);

        $this->assertApiResponse($etapas->toArray());
    }

    /**
     * @test
     */
    public function testUpdateetapas()
    {
        $etapas = $this->makeetapas();
        $editedetapas = $this->fakeetapasData();

        $this->json('PUT', '/api/v1/etapas/'.$etapas->id, $editedetapas);

        $this->assertApiResponse($editedetapas);
    }

    /**
     * @test
     */
    public function testDeleteetapas()
    {
        $etapas = $this->makeetapas();
        $this->json('DELETE', '/api/v1/etapas/'.$etapas->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/etapas/'.$etapas->id);

        $this->assertResponseStatus(404);
    }
}
