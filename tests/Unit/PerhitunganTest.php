<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\RumusController;

class PerhitunganTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    public function testRumusLingkaran()
    {
        $Rumuslingkaran = new RumusController;
        $lingkaran = $Rumuslingkaran->lingkaran(3,3.14);
        $this->assertEquals(9.42, $lingkaran);
    }
}
