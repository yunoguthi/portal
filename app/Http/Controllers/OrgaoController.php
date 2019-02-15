<?php

namespace App\Http\Controllers;

use App\Models\Orgao;
use App\Repositories\Repository;
use App\Repositories\OrgaoRepository;
use Illuminate\Http\Request;

class OrgaoController extends Controller
{

     protected $model;

     public function __construct(Orgao $orgao)
   {
       $this->model = new Repository($orgao);
   }

 //   public function __construct(Orgao $orgao)
 // {
 //     $this->model = new OrgaoRepository($Orgao);
 // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return $this->model->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     // create record and pass in only fields that are fillable
      return $this->model->create($request->only($this->model->getModel()->fillable));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orgao  $orgao
     * @return \Illuminate\Http\Response
     */
    public function show(Orgao $orgao)
    {
      return $this->model->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orgao  $orgao
     * @return \Illuminate\Http\Response
     */
    public function edit(Orgao $orgao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orgao  $orgao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orgao $orgao)
    {
        $this->model->update($request->only($this->model->getModel()->fillable), $id);
        return $this->model->find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orgao  $orgao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orgao $orgao)
    {
        return $this->model->delete($id);
    }
}
