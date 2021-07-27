<?php

namespace Tests\Feature\Controllers;

use App\Http\Controllers\EmailController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmailControllerTest extends TestCase
{

    /**
     * @group email
     * Tests the api edit form
     */
    public function test_sendMessage()
    {
        $response = $this->post('/email/send',
            [   'title' => 'Тестовый загололвок',
                'body' => 'Тестовое сообщение',
                'email' => 'voxomex290@dmsdmg.com',
            ]);
        $code = $response->getStatusCode();
        var_dump('code', $code);

        $response
            ->assertStatus(200);
    }
}
