@extends('layouts.appback')

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Редактировать</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li >Главная</li>
                        <li >Пользователи</li>
                        <li class="active">Редактировать</li>
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
                            <strong class="card-title mb-3">Редактировать пользователя</strong>

                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('user.update') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input type="text"
                                           name="name"
                                           class="form-control"
                                           value="{{ $data->name }}"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email"
                                           value="{{ $data->email }}"
                                           class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Роль</label>
                                    <select class="form-control" name="role">
                                        <option value="manager"
                                        @if($data->role=='manager')
                                            selected
                                        @endif
                                        >Менеджер</option>
                                        <option value="admin"
                                                @if($data->role=='admin')
                                                selected
                                                @endif
                                        >Администратор</option>
                                    </select>
                                </div>
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </form>
                            <hr>
                                <form action="{{ route('user.updatepassword') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label>Новый пароль</label>
                                        <input type="password"
                                               name="password"
                                               class="form-control"
                                               required>
                                    </div>
                                    <button type="submit"
                                            class="btn btn-primary">Обновить пароль</button>
                                    <input type="hidden" name="id" value="{{$data->id}}">
                                </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>



    </div> <!-- .content -->
@endsection