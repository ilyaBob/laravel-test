@extends("layouts.adminPanel")

@section("content")



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <a href="{{route('admin.category.create')}}" type="button" class="col-2 btn btn-block btn-success">Добавить категорию</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover" data-order='[[ 3, "asc" ]]' data-page-length='5'>
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Наименование категории</th>
                                    <th>Активность</th>
                                    <th>сортировка</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td><a href="{{route("admin.category.edit", $category->id)}}">{{$category->title}}</a> </td>
                                        <td>{{$category->isPublished}} </td>
                                        <td>{{$category->sort}} </td>
                                    </tr>
                                @endforeach


                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
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
