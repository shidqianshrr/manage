<?php

namespace App\Http\Controllers;

use App\Models\ShoppingModel;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index()
    {
        $data['page'] = 'Shopping';
        $data['shopping'] = ShoppingModel::paginate(10);
        return view('shopping.index')->with($data);
    }

    public function create()
    {
        $data['page'] = 'Shopping';
        $data['shopping'] = ShoppingModel::get();
        return view('shopping.create')->with($data);
    }

    public function store(Request $request)
    {
        $shopping = new ShoppingModel();
        $shopping->Name = $request->Name;

        try {
            $shopping->save();
            if ($shopping->save()) {
                return redirect('shopping');
            }
        } catch (Exception $e) {
            report($e);
            return false;
        }
    }

}
