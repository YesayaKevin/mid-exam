<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PublisherController extends Controller
{
    public static function index(){
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'));
    }

    public static function find($id){
        $publisher = Publisher::find($id);
        return view('publisherDetail', compact('publisher'));
    }
}
