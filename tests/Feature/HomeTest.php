<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Tag;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;
    public function test_empty(){
        $this->get('/')
            ->assertStatus(200)
            ->assertSee('No hay etiquetas');
    }

    public function test_with_data(){
        $tag = Tag::factory()->create();

        $this->get('/')
            ->assertStatus(200)
            ->assertSee($tag->name)
            ->assertDontSee('No hay etiquetas');
    }
}
