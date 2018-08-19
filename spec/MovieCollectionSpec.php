<?php

namespace spec;

use Movie;
use MovieCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieCollectionSpec extends ObjectBehavior
{
    /*
    |
    | Os métodos devem começar com 'it' ou 'its'
    |
    */
    function it_is_initializable()
    {
        /*
        |
        | $this se refere a classe que está sendo testada:
        | MovieCollection e não MovieCollectionSpec
        |
        */
        $this->shouldHaveType(MovieCollection::class);
    }

    function it_stores_a_collection_of_movies(Movie $movie)
    {
        $this->add($movie);

        $this->shouldHaveCount(1);
    }

    function it_can_accept_multiple_movies_to_add_at_once(Movie $movie1, Movie $movie2)
    {
        $this->add([$movie1, $movie2]);

        $this->shouldHaveCount(2);
    }

    function it_cat_mark_all_movies_as_watched(Movie $movie1, Movie $movie2)
    {

        $movie1->watch()->shouldBeCalled();
        $movie2->watch()->shouldBeCalledTimes(1);
        // $movie2->watch()->shouldNotBeCalled();

        $this->add([$movie1, $movie2]);

        $this->markAllAsWatched();

    }
}
