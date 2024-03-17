<?php
namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                "id" => "1",
                "title" => "Listing One",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque facilis iste expedita tenetur dolor quis harum corporis excepturi suscipit aut quia dignissimos, debitis adipisci consequatur veritatis qui aliquam autem. Ipsum!",
            ],
            [
                "id" => "2",
                "title" => "Listing Two",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque facilis iste expedita tenetur dolor quis harum corporis excepturi suscipit aut quia dignissimos, debitis adipisci consequatur veritatis qui aliquam autem. Ipsum!",
            ],
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing["id"] == $id) {
                return $listing;
            }
        }
    }
}

