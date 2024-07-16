<?php

namespace App\Http\Controllers;

use App\Models\forms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  show the forms page
    public function index()
    {
        $forms = form::orderBy("created_at", "desc")->get();

        return view("forms.list", [
            "forms" => $forms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    //  show create form page
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    //  store the form in the DB
    public function store(Request $request)
    {
        // Validator::make($request->all(),$)
        $Forms = new forms();
        $Forms->fname = $request->fname;
        $Forms->lname = $request->lname;
        $Forms->email = $request->email;
        $Forms->phone = $request->phone;
        $Forms->address = $request->address;
        $Forms->city = $request->city;
        $Forms->state = $request->state;
        $Forms->zip = $request->zip;
        $Forms->country = $request->country;
        $Forms->message = $request->message;
        $Forms->save();

        return redirect()->route('forms.index')->with('success', 'form added successfully');

    }

    /**
     * Display the specified resource.
     */


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    //  show edit form page
    public function edit(int $id)
    {
        $form = forms::findOrFail(id);
        
        return view('forms.edit', [
            'form' => $form
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    //  this is update form page
    public function update(Request $request, string $id)
    {
        // Validator::make($request->all(),$)

        $Forms = forms::findOrFail($id);

        $Forms->fname = $request->fname;
        $Forms->lname = $request->lname;
        $Forms->email = $request->email;
        $Forms->phone = $request->phone;
        $Forms->address = $request->address;
        $Forms->city = $request->city;
        $Forms->state = $request->state;
        $Forms->zip = $request->zip;
        $Forms->country = $request->country;
        $Forms->message = $request->message;
        $Forms->save();

        return redirect()->route('forms.index')->with('success', 'form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    //  delete a form
    public function destroy(string $id)
    {
        //
        $Forms = forms::findOrFail($id);

        $Forms->delete();

        return redirect()->route('forms.index')->with('success', 'form deleted successfully');

    }
}