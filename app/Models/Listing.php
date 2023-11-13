<?php 
    namespace App\Models;

    class Listing {
        public static function all(){
            return [[
                'id' => 1,
                'title' => 'job one',
                'description' => 'test text field'
            ],
            [
                'id' => 2,
                'title' => 'job two',
                'description' => 'another test text field'
            ]
            ];
        }

        public static function find($id){
            $listings = self::all();
            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }