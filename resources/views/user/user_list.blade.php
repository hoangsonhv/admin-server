@extends("admin/layout")
@section("main")
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="page-header">Category List</h1>
                    </div>
                    <div class="col-lg-3">
                        <a href="{{url("register")}}" style="float: right;padding-top: 12px;"><button type="button">Add User</button></a>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="odd gradeX" align="center">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->password}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{url("admin/users/edit",["id"=>$user->id])}}">Edit</a></td>
                                <td class="center">
                                    <a href="{{url("admin/users/delete",["id"=>$user->id])}}" style="text-decoration: none">
                                        <form method="post" action="{{url("admin/users/delete",["id"=>$user->id])}}">
                                            @method('DELETE')
                                            @csrf
                                            <i class="fa fa-trash-o  fa-fw"></i>
                                            Delete
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
