<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public static function all($columns = ['*'])
    {
        return [    ['id' => 1, 
        'title' => 'listing 1',
        'description' => 'this is listing 1'],
        ['id' => 2,
        'title' => 'listing 2',
        'description' => 'this is listing 2'],
        ['id' => 3,
        'title' => 'listing 3',
        'description' => 'this is listing 3'
        ]
        
    ];
  
    }
    public static function find($id)
    {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
