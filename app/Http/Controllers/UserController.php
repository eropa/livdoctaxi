<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdatePasswordRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Список всех пользователей в системе
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $dataUsers=User::all();
        return view('admin.user.index',['dataUsers'=>$dataUsers]);
    }

    /**
     * Форма добавления пользователя
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('admin.user.create');
    }


    /**
     * Операция добавления
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request){
        $message=UserService::add($request);
        return redirect()->route('user.index')->with('status', $message);
    }

    /**
     * Удаление пользователя по номеру
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        $message=UserService::delete($id);
        return redirect()->route('user.index')->with('status', $message);
    }


    /**
     * Форма редактирования
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $data=User::find($id);
        return view('admin.user.edit',['data'=>$data]);
    }

    /**
     * Обновления данных
     * @param UserUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserUpdateRequest $request){
        $message=UserService::updateDate($request);
        return redirect()->route('user.index')->with('status', $message);
    }

    /**
     * Обновления пароля
     * @param UserUpdatePasswordRequest $request
     */
    public function updatePassword(UserUpdatePasswordRequest $request){
        $message=UserService::updateDatePassword($request);
        return redirect()->route('user.index')->with('status', $message);
    }

}
