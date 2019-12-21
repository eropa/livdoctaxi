@extends('layouts.appback')

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Пользователи</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li >Главная</li>
                        <li class="active">Пользователи</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="content mt-3">

        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title mb-3">Список пользователей</strong>
                            <a class="btn btn-primary" href="{{ route('user.create') }}" role="button">Добавить</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Имя</th>
                                    <th scope="col">email</th>
                                    <th scope="col">role</th>
                                    <th scope="col">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dataUsers as $item)
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>Редактировать / Удалить</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>



    </div> <!-- .content -->
@endsection