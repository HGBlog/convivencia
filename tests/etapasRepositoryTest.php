<?php

use App\Models\etapas;
use App\Repositories\etapasRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class etapasRepositoryTest extends TestCase
{
    use MakeetapasTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var etapasRepository
     */
    protected $etapasRepo;

    public function setUp()
    {
        parent::setUp();
        $this->etapasRepo = App::make(etapasRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateetapas()
    {
        $etapas = $this->fakeetapasData();
        $createdetapas = $this->etapasRepo->create($etapas);
        $createdetapas = $createdetapas->toArray();
        $this->assertArrayHasKey('id', $createdetapas);
        $this->assertNotNull($createdetapas['id'], 'Created etapas must have id specified');
        $this->assertNotNull(etapas::find($createdetapas['id']), 'etapas with given id must be in DB');
        $this->assertModelData($etapas, $createdetapas);
    }

    /**
     * @test read
     */
    public function testReadetapas()
    {
        $etapas = $this->makeetapas();
        $dbetapas = $this->etapasRepo->find($etapas->id);
        $dbetapas = $dbetapas->toArray();
        $this->assertModelData($etapas->toArray(), $dbetapas);
    }

    /**
     * @test update
     */
    public function testUpdateetapas()
    {
        $etapas = $this->makeetapas();
        $fakeetapas = $this->fakeetapasData();
        $updatedetapas = $this->etapasRepo->update($fakeetapas, $etapas->id);
        $this->assertModelData($fakeetapas, $updatedetapas->toArray());
        $dbetapas = $this->etapasRepo->find($etapas->id);
        $this->assertModelData($fakeetapas, $dbetapas->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteetapas()
    {
        $etapas = $this->makeetapas();
        $resp = $this->etapasRepo->delete($etapas->id);
        $this->assertTrue($resp);
        $this->assertNull(etapas::find($etapas->id), 'etapas should not exist in DB');
    }
}
