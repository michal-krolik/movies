<?php


// use Illuminate\Foundation\Testing\RefreshDatabase;
namespace Movies;

use App\Models\Movie;
use Tests\TestCase;

class MovieTest extends TestCase
{
    /**
     * Użytkownik może wyświetlić wyszukiwarkę
     */
    public function test_user_can_see_search_form(): void
    {
        $response = $this->get(route('movies.index'));

        $response->assertOk();
        $response->assertViewIs('movies.index');
    }

    /**
     * Użytkownik może wyświetlić wszystkie filmy
     */
    public function test_user_can_list_all_movies()
    {
        $response = $this->post(route('movies.search'), [
            'title' => null
        ]);

        $response->assertOk();
        $response->assertViewIs('movies.index');
        $response->assertViewHas('movies');
    }

    /**
     * Użytkownik może wyszukać konkretny film po tytule
     */
    public function test_user_can_search_for_specific_movie()
    {
        $movieTitle = 'Ojciec chrzestny';
        $movie = Movie::query()->where('title', $movieTitle)->get()->first();
        $response = $this->post(route('movies.search'), [
            'title' => $movieTitle
        ]);

        $response->assertOk();
        $response->assertViewIs('movies.index');
        $response->assertSeeTextInOrder([$movie->title, $movie->genre->getLabel()]);
    }
}
