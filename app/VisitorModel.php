<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorModel extends Model
{
    public function getAllVisitors(){
        $visitors = [
            0 => [
                'name' => 'Ahmed',
                'type' => 'ID Card',
                'id' => '12345678',
                'mobile' => '3312345678',
                'email' => 'mmallahham@hotmail.com',
                'visitees' => 'Basem',
                'purpose' => 'personal visit'
            ]
        ];
        return $visitors;
    }



}
