<?php namespace Tests\Repositories;

use App\Models\Tramite;
use App\Repositories\TramiteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TramiteRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TramiteRepository
     */
    protected $tramiteRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tramiteRepo = \App::make(TramiteRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tramite()
    {
        $tramite = factory(Tramite::class)->make()->toArray();

        $createdTramite = $this->tramiteRepo->create($tramite);

        $createdTramite = $createdTramite->toArray();
        $this->assertArrayHasKey('id', $createdTramite);
        $this->assertNotNull($createdTramite['id'], 'Created Tramite must have id specified');
        $this->assertNotNull(Tramite::find($createdTramite['id']), 'Tramite with given id must be in DB');
        $this->assertModelData($tramite, $createdTramite);
    }

    /**
     * @test read
     */
    public function test_read_tramite()
    {
        $tramite = factory(Tramite::class)->create();

        $dbTramite = $this->tramiteRepo->find($tramite->id);

        $dbTramite = $dbTramite->toArray();
        $this->assertModelData($tramite->toArray(), $dbTramite);
    }

    /**
     * @test update
     */
    public function test_update_tramite()
    {
        $tramite = factory(Tramite::class)->create();
        $fakeTramite = factory(Tramite::class)->make()->toArray();

        $updatedTramite = $this->tramiteRepo->update($fakeTramite, $tramite->id);

        $this->assertModelData($fakeTramite, $updatedTramite->toArray());
        $dbTramite = $this->tramiteRepo->find($tramite->id);
        $this->assertModelData($fakeTramite, $dbTramite->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tramite()
    {
        $tramite = factory(Tramite::class)->create();

        $resp = $this->tramiteRepo->delete($tramite->id);

        $this->assertTrue($resp);
        $this->assertNull(Tramite::find($tramite->id), 'Tramite should not exist in DB');
    }
}
