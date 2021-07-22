@extends("admin/layout")
@section("main")
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Team Admin Add
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{url("admin/teamsAdd")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" value="{{old("name")}}" class="form-control" name="name" >
                                @error("name")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" value="{{old("image")}}" name="image" required>
                                @error("image")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Position:</label>
                                <input type="text" value="{{old("position")}}" class="form-control" name="position">
                                @error("position")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Phone:</label>
                                <input type="number" min="0" value="{{old("phone")}}" class="form-control" name="phone">
                                @error("phone")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                            </div>
                            <button type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
