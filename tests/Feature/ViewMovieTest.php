<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMovieTest extends TestCase
{
    public function the_main_page_shows_correct_info()
    {


        $response = $this->get(route('movies.index'));
        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
    }

    public function the_search_dropdwon_works_correctly()
    {
        Http::fake([
            'https://api.themovie.db.org/3/search/movie?query=jumanji' => $this->fakeSearchMovies(),
        ]);
    }

    public function fakeSearchMovies() {
        
    }
}
