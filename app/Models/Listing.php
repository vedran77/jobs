<?php

namespace App\Models;

class Listing {
    public static function getAll() {
        return [
            [
                'id' => 1,
                'title' => 'Listing 1',
                'description' => 'Description 1'
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'Description 2'
            ]
            ];
    }

    public static function find($id) {
        $listings = self::getAll();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}