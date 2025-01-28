<?php

namespace Tests\Feature;

use App\Models\Pizza;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WinkelwagenTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function testVoegAanWinkelwagen()
    {
        $pizza = Pizza::create([
            'naam' => 'Pizza Margherita',
            'prijs' => 8.50,
            'beschrijving' => 'Tomatensaus, mozzarella, basilicum',
            'image' => 'margherita.jpg'
        ]);

        $response = $this->post('/winkelwagen/toevoegen/' . $pizza->id, [
            'formaat_id' => 1,
            'aantal' => 2,
        ]);

        $response->assertSessionHas('winkelwagen');

        $winkelwagen = session()->get('winkelwagen');
        $this->assertArrayHasKey($pizza->id, $winkelwagen);
        $this->assertEquals('Pizza Margherita', $winkelwagen[$pizza->id]['naam']);
    }
}
