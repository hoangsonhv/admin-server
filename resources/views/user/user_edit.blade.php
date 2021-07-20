@extends("admin/layout")
@section("main")
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{url("admin/users/update",["id"=>$user->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name..">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{$user->email}}" placeholder="Email..">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" value="{{$user->password}}" class="form-control" placeholder="Password..">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
