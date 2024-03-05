<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePizzaRequest;
use App\Http\Requests\UpdatePizzaRequest;
use App\Models\OccurrenceBook;

class OccurrenceBookController  extends Controller
{
    public function index() {
        $OccurrenceBook = OccurrenceBook::latest()->get();      
        return view('OccurrenceBook.index', [
            'OccurrenceBook' => $OccurrenceBook,
        ]);
    }

    public function show($id) {
        // Retrieve a single pizza by its ID
        $Occurrence= OccurrenceBook::findOrFail($id);
        return view('OccurenceBook.show', ['OccurrenceBook' => OccurrenceBook]);
    }

    public function create() {
        return view('Occurence.create');
    }

    public function store() {
        // Create a new Pizza instance and save it to the database
        $OccurrenceBook = new OccurrenceBook ();
        $OccurrenceBook->officer = request('officer');
        $OccurrenceBook->shift = request('shift');
        $OccurrenceBook->occurrence = request('occurrence');
        $OccurrenceBook->subject = request('subject');
        $OccurrenceBook->ref = request('ref');
        $OccurrenceBook->entry = request('entry');
        $OccurrenceBook->datetime = request('datetime');
        $OccurrenceBook->save();

    
        // Redirect to the index page after saving
      return view('OccurrenceBook.tableOccurrenceBook');
    }
}
