<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\http\Requests\ListFormRequest;

use App\Todolist;
use App\Category;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lists = Todolist::all();

        return View('lists.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::lists('name', 'id');
        return View('lists.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ListFormRequest $request)
    {
        $list = new Todolist(array(
            'name'=> $request->get('name'), 
            'description' => $request->get('description')

        ));

        $list->save();

        if (count($request->get('categories')) > 0) {
            $list->categories()->attach($request->get('categories'));
        }

        return \Redirect::route('lists.create')->with('message', 'Your list has been created!');
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
        $list = Todolist::findOrFail($id);
        //$list = Todolist::findBySlug($id);

        return View('lists.show', compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $list = Todolist::find($id);

        return View('lists.edit', compact('list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ListFormRequest $request, $id)
    {
        $list = Todolist::find($id);

        $list->update([
            'name' => $request->get('name'),
            'description' => $request->get('description')
            ]);
        return \Redirect::route('lists.edit', array($list->id))->with('message', 'Your list has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
