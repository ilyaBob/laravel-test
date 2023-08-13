@extends("layouts.adminPanel")

@section("content")



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <a href="{{route('admin.user.create')}}" type="button" class="col-2 btn btn-block btn-success">Добавить пользователя</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover" data-order='[[ 0, "asc" ]]' data-page-length='10'>
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Имя пользователья</th>
                                    <th>Активность</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td><a href="{{route("admin.user.edit", $user->id)}}">{{$user->name}}</a> </td>
                                        <td>{{$user->isPublished}} </td>
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
