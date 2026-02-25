<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\View\View;
use Illuminate\Http;

class PhoneController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Phone';
        $viewData['subtitle'] = 'List of phones';
        $viewData['phone'] = Phone::all();

        return view('phone.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $phone = Phone::findOrFail($id);
        $viewData['title'] = $phone->getName();
        $viewData['subtitle'] = $phone->getName().' phone details';
        $viewData['phone'] = $phone;

        return view('phone.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Create new phone listing';

        return view('phone.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Phone::validate($request);

        Phone::create($request->all());

        return back()->with('message', 'Product created succesfully!');
    }

    public function delete($id): View
    {
        Phone::destroy($id);

        $viewData = [];
        $viewData['title'] = 'Phone';
        $viewData['subtitle'] = 'List of phones';
        $viewData['phones'] = Phone:all();

        return view('phone.index')->with('viewData', $viewData);
    }
}
