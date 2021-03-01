<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class WitchController extends BaseController
{
    public function index()
    {
      return $this->fibonacci(5);
    }

    public function store(Request $request)
    {
        $data = [];
        if($request->vilagers)
        {
            foreach($request->vilagers as $key => $value)
            {
                $age = (int)$request->vilagers[$key]['age'];
                $year = (int)$request->vilagers[$key]['year'];

                if($age > $year)
                {
                    $data[$key]['show_year'] = -1;
                    $data[$key]['number'] = -1;
                }else{
                    $data[$key]['show_year'] = $year - $age;
                    $data[$key]['number'] = $this->fibonacci($year - $age);
                }
            }

        }
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    function fibonacci($index) {
      # array ini akan digunakan untuk menampung bilangan fibonacci
      $fibonacci = [];

      if ($index < 0) {
        # langsung hentikan fungsi jika $index kurang dari 0
        return $fibonacci;
      }

      # mulai perulangan
      for ($i = 0; $i <= $index; $i++) {
        if ($i < 2) {
          $number = $i;
        } else {
          $number = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        # tambahkan $number ke dalam array $fibonacci
        array_push($fibonacci, $number);
      }

      return array_sum($fibonacci);
    }
}
