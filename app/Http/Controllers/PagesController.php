<?php

namespace App\Http\Controllers;

use App\Well;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //

    public function about(){
//        $data = []; //pass data as a second agument to view
//        $data['first'] = 'wassim';
//        $data['second'] = 'benhallam';
//        you can also use the: ->with('name', $name) or ->with(['' => '', '' => ''])

        $first = 'Wassim';
        $last = 'Benhallam';
        return view('generic.about', compact('first','last'));
    }

    public function contact(){
        return view('generic.contact');
    }

    public function displayWells(){
        $wellLocations = [];
        $all_wells = Well::all();
        $counter = 0;
        foreach($all_wells as $well){
            $result = $well->update(['uwi' => 'Unknown', 'MD' => abs(floor(sin($counter)*10000)), 'state' => 'Morocco']);
/*            if($counter<3) {
                $well->state = 'Virginia';
            }elseif($counter<7){
                $well->state = 'New York';
            }else $well->state = 'Morocco';
            $well->save();*/

            array_push($wellLocations, $well->MD.",   ". $well->state);
            $counter++;
        }
        return view('wells.allWells', compact('wellLocations', 'counter'));
    }
}
