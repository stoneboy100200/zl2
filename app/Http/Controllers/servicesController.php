<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use MongoDB\Driver;
use MongoClient;

Class servicesController extends Controller
{

    public  function main(){
        return view('services/main');
    }
    public  function electronic(){
       return 'electronic';
    }
}