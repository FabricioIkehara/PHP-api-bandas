<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{

    public function getAll(){

     $bands = $this->getBands();

     return response()->json($bands, 200, [], JSON_PRETTY_PRINT);

    }

public function getById($id){

    $band = null;

    foreach($this->getBands() as $_band) {
        if($_band['id'] == $id){
            $band = $_band;

 }
}
return $band ? response()->json($band, 200, [], JSON_PRETTY_PRINT): abort(404);
 }


public function getBandsByGender($gender){

    $bands =[];

    foreach($this->getBands() as $_band) {
        if ($_band['gender'] == $gender)
        $bands[] = $_band;
}

return response()->json($bands);

}

public function store(Request $request){

    $validate = $request->validate([

        'id'=> 'numeric',
        'name'=> 'required|min 3'

    ]);

return  response()->json($request->all());

}
public function getBands(){

    return [
        [
            'id' => 1, 'name' => 'Queen of stone age', 'gender'=> 'Alternative rock'
        ],
        [
            'id' => 2, 'name' => 'Pantera', 'gender'=> 'Trash Metal'
        ],
        [
            'id' => 3, 'name' => 'Ramones', 'gender'=> 'Punk Rock'
        ],
        [
            'id' => 4, 'name' => 'Iron Maden', 'gender'=> 'Heavy metal'
        ],
        [
            'id' => 5, 'name' => 'CPM 22', 'gender'=> 'hardcore'
        ]
        ];
    }

}
