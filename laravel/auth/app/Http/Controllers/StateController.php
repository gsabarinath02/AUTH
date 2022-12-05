<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    
  public function reset() {
    $statesArray = ["AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DC", "DE", "FL", "GA",
                       "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME", "MD",
                       "MA", "MI", "MN", "MS", "MO", "MT", "NE", "NV", "NH", "NJ",
                       "NM", "NY", "NC", "ND", "OH", "OK", "OR", "PA", "RI", "SC",
                       "SD", "TN", "TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY"];

    foreach ($statesArray as $key => $state) {

      // Concat the key
      $curKey = strval($state . ":electricity");
      $item = State::where([ 'name' => $curKey ])->first();
      $item->update([ 'name' => $curKey, 'consumption' => getConsumption() ]);
    }

    return redirect('/admin');
  }
}
