<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;
class SampleController extends Controller
{
    public function index() {

        //$samples = Sample::all();
        //$samples = Sample::orderBy('id')->get();
        //$samples = Sample::where('id', '<', 2)->orderBy('id')->get();
        $samples = Sample::latest()->get();

        return view('samples.index', [
          'samples' => $samples,
        ]);

      }

      public function show($id) {
        return view('samples.details', ['id' => $id]);
      }

      public function create() {
        return view('samples.create');
      }
}
