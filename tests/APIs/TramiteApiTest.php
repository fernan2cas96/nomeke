<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Tramite;

class TramiteApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_tramite()
    {
        $tramite = factory(Tramite::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/tramites', $tramite
        );

        $this->assertApiResponse($tramite);
    }

    /**
     * @test
     */
    public function test_read_tramite()
    {
        $tramite = factory(Tramite::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/tramites/'.$tramite->id
        );

        $this->assertApiResponse($tramite->toArray());
    }

    /**
     * @test
     */
    public function test_update_tramite()
    {
        $tramite = factory(Tramite::class)->create();
        $editedTramite = factory(Tramite::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/tramites/'.$tramite->id,
            $editedTramite
        );

        $this->assertApiResponse($editedTramite);
    }

    /**
     * @test
     */
    public function test_delete_tramite()
    {
        $tramite = factory(Tramite::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/tramites/'.$tramite->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/tramites/'.$tramite->id
        );

        $this->response->assertStatus(404);
    }
}
