<?php

namespace Tests\Unit;

use App\DatabaseConnectionInterface;
use App\MovieRepository;
use PHPUnit\Framework\TestCase;

class MovieRepositoryTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_get_movies_returns_all_movies(): void
    {
        $movieRepository = new MovieRepository();
        $this->assertSame([1,2,3], $movieRepository->getMovies());
    }
}
