<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
// 以下追加
use App\Models\Area;

class AreaTest extends TestCase
{
    // 以下追加
    // use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function testArea()
    {
        $this->assertDatabaseHas('areas',[
            'area_name' => '第一公園'
        ]);
        $this->assertDatabaseHas('areas',[
            'area_name' => '第二公園'
        ]);
        $this->assertDatabaseHas('areas',[
            'area_name' => '臨海公園'
        ]);
        $this->assertDatabaseHas('areas',[
            'area_name' => '第二森林公園'
        ]);
    }
}
