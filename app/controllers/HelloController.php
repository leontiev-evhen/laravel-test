<?php
class HelloController extends BaseController
{
    public function showIndex ($name = '%username%')
    {
        return View::make('hello.index', ['username' => $name]);
    }

    public function showForm ()
    {
        return View::make('hello.form', ['actionName' => __FUNCTION__]);
    }

    public function postForm ()
    {   
       // return View::make('hello.post', ['name' => Input::get('name')]);
       return Redirect::route('bladepath');

    }

    public function showBlade ()
    {
        return View::make('hello.blade', ['list' => [1, 2, 3, 4, 5], 'item' => 'my text', 'ival' => 100]);
    }

    public function getMyAction ()
    {
       // return Request::method();
       return View::make('hello.my-form');

    }

    public function postMyForm()
    {
        $data = Input::all();
        Session::put('data', $data);
        Session::put('my-form-name', Input::get('email'));
    }

    public function getSession ()
    {
        return print_r(Session::all(), true);
    }



    public function getJson ()
    {
        $data = ['name' => 'Steave', 'email' => 'test@test.com'];
        return Response::json($data);
    }

}
