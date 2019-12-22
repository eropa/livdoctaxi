<?php

namespace App\Services;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdatePasswordRequest;
use App\Http\Requests\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;

class  UserService{

    /**
     * Добалвение нового пользователя
     * @param UserRequest $request
     * @return string
     */
    static function add(UserRequest $request){
        $modelUser =new User();
        $modelUser->name=$request->input('name');
        $modelUser->email=$request->input('email');
        $modelUser->password=bcrypt($request->input('password'));
        $modelUser->role=$request->input('role');
        $modelUser->save();
        return "Запись добавлена";
    }

    /**
     * Удаление записи
     * @param $id
     * @return string
     */
    static  function delete($id){
        $result=User::destroy($id);
        return ($result)?"Запись удалена" : "Запись не УДАЛЕНА !!!!!!" ;
    }


    /**
     * Обновление записи
     * @param Request $request
     * @return string
     */
    static  function updateDate(UserUpdateRequest $request){
        $modelUser=User::find($request->input('id'));
        $modelUser->name=$request->input('name');
        $modelUser->email=$request->input('email');
        $modelUser->role=$request->input('role');
        $result=$modelUser->save();
        return ($result)?"Запись обновлена" : "Запись не ОБНОВЛЕНА !!!!!!" ;
    }


    static  function updateDatePassword(UserUpdatePasswordRequest $request){
        $modelUser=User::find($request->input('id'));
        $modelUser->password=bcrypt($request->input('password'));
        $result=$modelUser->save();
        return ($result)?"Запись обновлена" : "Запись не ОБНОВЛЕНА !!!!!!" ;
    }




}
