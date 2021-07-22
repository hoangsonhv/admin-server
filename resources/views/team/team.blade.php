@extends("admin/layout")
@section("main")
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <h1 class="page-header">Team Admin List</h1>
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" id="myInput" type="text" placeholder="Search.." style="margin-top: 9px">
                    </div>
                    <div class="col-lg-3">
                        <a href="{{url("admin/teams/add")}}" style="float: right;padding-top: 12px;"><button type="button">Add Team Admin</button></a>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Position</th>
                            <th>Phone</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($teams as $team)
                            <tr class="odd gradeX" align="center">
                                <td>{{$team->id}}</td>
                                <td>{{$team->name}}</td>
                                <td><img style="width: 70px;height: 70px" src="{{$team->teamImage()}}"/></td>
                                <td>{{$team->position}}</td>
                                <td>{{$team->phone}}</td>
                                <td>{{formatDate($team->created_at)}}</td>
                                <td>{{formatDate($team->updated_at)}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{url("admin/teams/edit",["id"=>$team->id])}}">Edit</a></td>
                                <td class="center">
                                    <a href="{{url("admin/teams/delete",["id"=>$team->id])}}" style="text-decoration: none">
                                        <form method="post" action="{{url("admin/teams/delete",["id"=>$team->id])}}">
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
