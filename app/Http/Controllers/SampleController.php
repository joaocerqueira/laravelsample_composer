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

        $sample = Sample::findOrFail($id);
        return view('samples.show', ['sample' => $sample]);
      }

      public function create() {
        return view('samples.create');
      }

      public function store() {
        $sample = new Sample();
        $sample->description = request('description');
        $sample->save();
        return redirect('/')->with('mssg', 'New Sample created!');
      }

      public function destroy($id) {
        $sample = Sample::findOrFail($id);
        $sample->delete();
        return redirect('/')->with('mssg', 'Sample deleted!');
      }
}
