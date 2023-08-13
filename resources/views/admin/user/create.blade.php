@extends("layouts.adminPanel")

@section("content")



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Добавление пользователя</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route("admin.user.store")}}" method="POST" class="form-horizontal">

                            @csrf

                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Имя пользователя</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" value="{{old('name')}}">
                                        @error('name')
                                            <div class="alert alert-danger mt-3">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Почта пользователя</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Введите email" value="{{old('email')}}">
                                        @error('email')
                                        <div class="alert alert-danger mt-3">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Пароль</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль" value="{{old('password')}}">
                                        @error('password')
                                        <div class="alert alert-danger mt-3">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <div class="form-check">
                                            <input value="1" type="checkbox" class="form-check-input" name="isPublished" id="isPublished">
                                            <label class="form-check-label" for="isPublished">Активировать</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Создать</button>
                                <a href="{{route("admin.user.index")}}" type="" class="btn btn-default float-right">Назад</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
