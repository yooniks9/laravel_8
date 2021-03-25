<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class HttpRequestTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    protected function setUp(): void
    {
        parent::setup();

        Http::fake([
            "jsonplaceholder.*" => Http::response([
                'userId' => 123123123
            ])
        ]);
    }

    public function laravelSevenRequest()
    {
        $response = Http::retires(2, 500)->post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 123,
        ]);

        dd($response->json());
    }
}
