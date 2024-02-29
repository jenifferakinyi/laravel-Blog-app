<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'listing one',
                'description' => 'removing the welcome blade content removing the welcome blade content removing the welcome blade content'
            ],
            [
                'id' => 2,
                'title' => 'listing two',
                'description' => 'removing the welcome blade content removing the welcome blade content removing the welcome blade content'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }

        return null;
    }
}
