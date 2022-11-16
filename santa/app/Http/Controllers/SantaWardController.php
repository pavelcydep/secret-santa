<?php

namespace App\Http\Controllers;
use App\Models\Santa;
use Illuminate\Http\Request;

class SantaWardController extends Controller
{
    public function getSanta($id)
    {
        $santa = Santa::find($id); 
        $ward = Santa::find($id)->wards;
        foreach($ward as $ward)
            {
         $ward['name'].'<br>';
            }
       $santaName= $santa['name'];
        $wardName=$ward['name'];
       return response()->json(['Santa' => $santaName, 'Ward' => $wardName]);
    }
}
