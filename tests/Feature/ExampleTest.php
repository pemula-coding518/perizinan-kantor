<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Root url redirects to /ajukan-izin.
     */
    public function test_root_redirects_to_form(): void
    {
        $response = $this->get('/');
        $response->assertRedirect('/ajukan-izin');

        $formResponse = $this->get('/ajukan-izin');
        $formResponse->assertSee('Izin Darurat hanya dapat diajukan pada hari yang sama dan maksimal pukul')
            ->assertSee('08.30 WIB')
            ->assertDontSee('08.00 WIB');
    }
}
