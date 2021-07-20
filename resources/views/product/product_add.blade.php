@extends("admin/layout")
@section("main")
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product Add
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{url("admin/productSave")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" value="{{old("name")}}" class="form-control" name="name" >
                                @error("name")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" value="{{old("image")}}" name="image" >
                                @error("name")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <input type="text" value="{{old("description")}}" class="form-control" name="description">
                                @error("name")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Price:</label>
                                <input type="number" min="0" value="{{old("price")}}" class="form-control" name="price">
                                @error("name")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Qty:</label>
                                <input type="number" min="0" class="form-control" name="qty" >
                                @error("name")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Sale:</label>
                                <input type="number" min="0" class="form-control" name="sale">
                                @error("name")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>New:</label>
                                <input type="number" min="0" class="form-control" name="new_product">
                                @error("name")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Category_id</label>
                                <select name="category_id" class="form-control" >
                                    <option value="0">Select a category</option>
                                    @foreach($category as $cat)
                                        <option  @if(old("category_id")==$cat->id)selected @endif value="{{$cat->id}}">
                                            {{$cat->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
