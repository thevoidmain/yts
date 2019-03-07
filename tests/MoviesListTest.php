<?php

namespace pxgamer\YTS;

use PHPUnit\Framework\TestCase;

class MoviesListTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCanRetrieveMovies()
    {
        $movies = Movies::list();
        $this->assertTrue($movies->isNotEmpty());
        $this->assertTrue($movies->first()->getId() > 0);
    }

    /**
     * @throws \Exception
     */
    public function testCanRetrieveMoviesByQuality()
    {
        $movies = Movies::list([
            'quality' => Movies::QUALITY_720
        ]);
        $this->assertTrue($movies->isNotEmpty());
        $this->assertTrue($movies->first()->getId() > 0);
    }

    /**
     * @throws \Exception
     */
    public function testCanRetrieveMoviesByQuery()
    {
        $movies = Movies::list([
            'query_term' => 'Lord of the Rings',
        ]);
        $this->assertTrue($movies->isNotEmpty());
        $this->assertTrue($movies->first()->getId() > 0);
    }

    /**
     * @throws \Exception
     */
    public function testCanRetrieveMoviesByPage()
    {
        $movies = Movies::list([
            'page' => 2,
        ]);
        $this->assertTrue($movies->isNotEmpty());
        $this->assertTrue($movies->first()->getId() > 0);
    }

    /**
     * @throws \Exception
     */
    public function testCanRetrieveMoviesByMinimumRating()
    {
        $movies = Movies::list([
            'minimum_rating' => 5,
        ]);
        $this->assertTrue($movies->isNotEmpty());
        $this->assertTrue($movies->first()->getId() > 0);
    }

    /**
     * @throws \Exception
     */
    public function testCanRetrieveMoviesByGenre()
    {
        $movies = Movies::list([
            'genre' => 'Action',
        ]);
        $this->assertTrue($movies->isNotEmpty());
        $this->assertTrue($movies->first()->getId() > 0);
    }
}
