@extends("admin/layout")
@section("main")
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <h1 class="page-header">Category List</h1>
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" id="myInput" type="text" placeholder="Search.." style="margin-top: 9px">
                    </div>
                    <div class="col-lg-3">
                        <a href="{{url("admin/categories/add")}}" style="float: right;padding-top: 12px;"><button type="button">Add Category</button></a>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($category as $cat)
                        <tr class="odd gradeX" align="center">
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->name}}</td>
                            <td>{{formatDate($cat->created_at)}}</td>
                            <td>{{formatDate($cat->updated_at)}}</td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{url("admin/categories/edit",["id"=>$cat->id])}}">Edit</a></td>
                            <td class="center">
                                <a href="{{url("admin/categories/delete",["id"=>$cat->id])}}" style="text-decoration: none">
                                    <form method="post" action="{{url("admin/categories/delete",["id"=>$cat->id])}}">
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
