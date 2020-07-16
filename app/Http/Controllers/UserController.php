<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadusuario;


class UserController extends Controller
{

    private $objUser;

    public function __construct()
    {
        $this->objUser=new cadusuario();
    }

    public function index()
    {
        $user=$this->objUser->all();
        return view ('index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this ->objUser->create([
           'nome'=>$request->nome,
           'email'=>$request->email,
           'telefone'=>$request->telefone,
           'senha'=>$request->senha,
           'foto'=>$request->foto

        ]);
         return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=$this->objUser->find($id);
        return view ('edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objUser->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'telefone'=>$request->telefone,
            'senha'=>$request->senha,
            'foto'=>$request->foto
        ]);

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objUser->destroy($id);
        return($del)?"sim":"nao";
    }
}
