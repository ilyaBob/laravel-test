@extends("layouts.adminPanel")

@section("content")

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Изменение статьи</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route("admin.post.update", $post->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("patch")
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label for="title">Наименование</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                   placeholder="Введете наименование" value="{{old('title', $post->title)}}">
                                            @error('title')
                                            <div class="alert alert-danger mt-3">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="slug">Символьный код</label>
                                            <input type="text" class="form-control" id="slug" name="slug"
                                                   value="{{old('slug', $post->slug)}}"
                                                   placeholder="Введете наименование">
                                            @error('slug')
                                            <div class="alert alert-danger mt-3">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="sort">Сортировка</label>
                                            <input type="number" class="form-control" id="sort" name="sort"
                                                   value="{{old('sort' , $post->sort)}}"
                                                   placeholder="Введете число">
                                            @error('sort')
                                            <div class="alert alert-danger mt-3">{{$message}}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group">

                                            <label for="exampleInputFile">Загрузить картинку</label>

                                    <div class="mb-2">
                                        <img class="w-50" src="{{url("storage", $post->prev_image)}}" alt="">
                                    </div>


                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="prev_image">
                                                    <label class="custom-file-label">Выберите файл</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Загрузка</span>
                                                </div>
                                            </div>

                                            @error('prev_image')
                                            <div class="alert alert-danger mt-3">{{$message}}</div>
                                            @enderror
                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="content">Текст статьи</label>
                                    <textarea id="summernote" name="content">{{old('content', $post->content)}}</textarea>

                                    @error('content')
                                    <div class="alert alert-danger mt-3">{{$message}}</div>
                                    @enderror
                                </div>


                                <!-- input states -->


                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input {{$post->isPublished > 0? "checked":false}} class="form-check-input" type="checkbox" id="isPublished"
                                                       name="isPublished" value="1">
                                                <label for="isPublished" class="form-check-label">Активна</label>
                                            </div>

                                            @error('isPublished')
                                            <div class="alert alert-danger mt-3">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Категории</label>
                                            <select class="form-control" name="category_id">
                                                @foreach($categories as $category)
                                                    <option
                                                        {{$category->id == old('category_id', $post->category_id)? "selected":false}} value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>

                                            @error('category_id')
                                            <div class="alert alert-danger mt-3">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-info">Создать</button>
                                    <a href="{{route("admin.post.index")}}"
                                       class="btn btn-default float-right">Отменить</a>
                                </div>
                            </form>
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
