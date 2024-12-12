<?php

namespace App;

use App\Models\Movie;
use PDO;

class MovieRepository
{

    // public function __construct(private DatabaseConnectionInterface $databaseConnection)
    // {
        
    // }

    public function getMovies()
    {
        // return Movie::all()->toArray();

        return [1,2,3];

        // $statement = $this->databaseConnection->query('SELECT * FROM filmovi');

        // return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function getMovie(string $name){
    //     $statement = $this->databaseConnection->prepare('SELECT * FROM filmovi WHERE naziv = :name');
    //     $statement->bindParam(':name', $name);
    //     $statement->execute();

    //     return $statement->fetchAll(PDO::FETCH_ASSOC);
    // }

    // public function removeMovie(string $name)
    // {
    //     $statement = $this->databaseConnection->prepare('DELETE FROM filmovi WHERE naziv = :name');
    //     $statement->bindParam(':name', $name);
    //     $statement->execute();

    //     return "Obrisan film pod nazivom <b>$name</b>";
    // }

    // public function editMovie(string $name, string $newName)
    // {
    //     $statement = $this->databaseConnection->prepare('UPDATE filmovi SET naziv = :newName WHERE naziv = :name');
    //     $statement->bindParam(':name', $name);
    //     $statement->bindParam(':newName', $newName);
    //     $statement->execute();

    //     return "Uređujem film pod nazivom <b>$name</b> u naziv <b>$newName</b>.";
    // }
}