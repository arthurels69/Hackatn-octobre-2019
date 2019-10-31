<?php
namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class ApiManager {

    public function createQuery(string $url)
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'http://hackathon-wild-hackoween.herokuapp.com/' . $url);
        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();
        return $content;
    }

    public function getAllMovies()
    {
        $getMovies = $this->createQuery('movies');
        return $getMovies;
    }
    public function getAllMoviesByCountry(string $country)
    {
        $getMovies = $this->createQuery('movies/search/country/' . $country);
        return $getMovies;
    }
    public function getAllMoviesById(string $id)
    {
        $getMovies = $this->createQuery('movies/' . $id);
        return $getMovies;
    }

    public function getAllMonsters(){
        $getMonsters = $this->createQuery('monsters');
        return $getMonsters;
    }
    public function getMonsterId(string $id){
        $getMonsters = $this->createQuery('monsters/' . $id);
        return $getMonsters;
    }

    public function getAllMonstersById(string $id){
        $getMonstersById = $this->createQuery('monsters/search/level/' . $id);
        return $getMonstersById;
    }
}
