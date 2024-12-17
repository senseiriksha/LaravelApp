<?php

namespace Tests\Feature;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Gate;
use Tests\TestCase;

class MovieTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     */


    public function test_index_returns_movies_in_view(): void
    {
        $user = User::factory()->create([
            'email' => 'antonio.pavic@test.hr'
        ]);
    
        $movie1 = Movie::factory()->create();
        $movie2 = Movie::factory()->create();
        $movie3 = Movie::factory()->create();
    
        $response = $this->actingAs($user)->get('/movies');
    
        $response->assertStatus(200);
    
        $response->assertSee('Popis svih filmova')
                 ->assertSee($movie1->name)
                 ->assertSee($movie2->name)
                 ->assertSee($movie3->name);
    }
    

    public function test_show_displays_specific_movie_with_id(): void
    {
        $user = User::factory()->create([
            'email' => 'antonio.pavic@test.hr'
        ]);

        $movie = Movie::factory()->create();

        $response = $this->actingAs($user)->get('/movies/' . $movie->id . '/');

        $response->assertStatus(200)
            ->assertJson([
                "id" => $movie->id,
                "name" => $movie->name,
                "year" => $movie->year
            ]);
    }
}
