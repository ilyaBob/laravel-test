@extends("layouts.adminPanel")

@section("content")



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <a href="{{route('admin.post.create')}}" type="button" class="col-2 btn btn-block btn-success">Добавить статью</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover" data-order='[[ 3, "asc" ]]' data-page-length='5' >
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Наименование</th>
                                    <th>Категория</th>
                                    <th>Сортировка</th>
                                    <th>Активность</th>
                                    <th>Дата создания</th>
                                    <th>Дата изменения</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td><a href="{{route("admin.post.edit", $post->id)}}">{{$post->title}}</a> </td>
                                        @foreach($categories as $category)
                                            @if( $post->category_id == $category->id)
                                                <td>{{$category->title}}</td>
                                            @endif
                                        @endforeach
                                        <td>{{$post->sort}}</td>
                                        <td>{{$post->isPublished}}</td>
                                        <td>{{$post->created_at}}</td>
                                        <td>{{$post->updated_at}}</td>

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
