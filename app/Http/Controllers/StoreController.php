<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Book;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        Book::firstOrCreate($data);
        return redirect()->route('index');
    }
}
