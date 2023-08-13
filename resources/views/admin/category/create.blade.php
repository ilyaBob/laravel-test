@extends("layouts.adminPanel")

@section("content")



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Horizontal Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route("admin.category.store")}}" method="POST" class="form-horizontal">

                            @csrf

                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Наименование категории</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Наименование категории" value="{{old('title')}}">
                                        @error('title')
                                            <div class="alert alert-danger mt-3">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>


                                <div class="form-group row">
                                    <label for="sort" class="col-sm-2 col-form-label">Сортировка</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="sort" id="sort" placeholder="введите число" value="500">
                                        @error('sort')
                                        <div class="alert alert-danger mt-3">Необходимо заполнить поле</div>
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
                                <a href="{{route("admin.category.index")}}" type="" class="btn btn-default float-right">Назад</a>
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
