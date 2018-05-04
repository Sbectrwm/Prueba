<?php

namespace App\Http\Controllers;
use App\Peoples;
use App\Credit_cards;
use App\Addresses;
use App\Http\Requests;
use App\Http\Requests\createPeopleRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $peoples = Peoples::all();
          return view('form_user.recibirDB', compact('peoples'));
    }
    public function show($id)
    {
        return view('users-shows', compact('id'));
    }
    public function create()
    {
          return view('form_user.users');
    }

    public function database(createPeopleRequest $request)
    {

      $peoples= new Peoples;
      $credit_cards = new Credit_cards;
      $adresses = new Addresses;

      Peoples::create($request->all());
      Credit_cards::create($request->all());
      Addresses::create($request->all());

      return view('form_user.users');
    }
}
