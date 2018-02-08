<?php
/**
 * Created by PhpStorm.
 * Author: Amit Shrestha.
 * Date: 2/8/18
 * Time: 12:07 PM
 */

namespace Amitshrestha\Calculator;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;

class CalculatorController extends Controller{



    /*
     *
     *  My first package built using Laravel 5.5
     *
     */


    /*
     * @param $a,$b Two variables that is passed using input.
     *
     */

    public function add($a, $b){
        $result = $a + $b;
	return $result;
        return view('calculator::result', compact('result'));
    }

    public function subtract($a, $b){
        $result = $a - $b;
	return $result;
        return view('calculator::result', compact('result'));
    }

    public function multiply($a, $b){
        $result = $a * $b;
	return $result;
        return view('calculator::result', compact('result'));
    }

    public function divide($a, $b){
        try{
            $result = $a / $b;
		return $result;
        }catch(\Exception $e){
            echo "<h1>Error</h1>";
            echo $e->getMessage(); exit;
        }
        return view('calculator::result', compact('result'));
    }

    public function root($a){
        try{
            $result = pow($a, 1/$a);
	    return $result;
        }catch(\Exception $e){
            echo "<h1>Error</h1>";
            echo $e->getMessage(); exit;
        }
        return view('calculator::result', compact('result'));
    }

    public function factorial($a){
        try{
            $result = 1;
            for ($x=$a; $x>=1; $x--)
            {
                $result = $result * $x;
            }
	    return $result;
            return view('calculator::result', compact('result'));
        }catch(\Exception $e){
            echo "<h1>Error</h1>";
            echo $e->getMessage(); exit;
        }        
    }


}
