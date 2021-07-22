@extends("admin/layout")
@section("main")
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">All</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <input class="form-control" id="myInput" type="text" placeholder="Search.." style="width: 40%">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr align="center">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>description</th>
                                        <th>price</th>
                                        <th>qty</th>
                                        <th>sale</th>
                                        <th>new</th>
                                        <th>category_id</th>
                                        <th>Updated At</th>
                                        <th>Created At</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @foreach ($product as $item)
                                        <tr class="odd gradeX" align="center">
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td><img style="width: 70px;height: 70px" src="{{$item->getImage()}}"/></td>
                                            <td>{{$item->description}}</td>
                                            <td>{{number_format($item->price)}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>{{$item->sale}}</td>
                                            <td>{{$item->new}}</td>
                                            <td>{{$item->category_id}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>{{$item->updated_at}}</td>
                                            <td class="center"><a href="{{url("admin/products/edit",["id"=>$item->id])}}"><i class="fa fa-pencil fa-fw"></i>Sửa</a></td>
                                            <td class="center">
                                                <a href="{{url("admin/products/delete",["id"=>$item->id])}}" style="text-decoration: none">
                                                    <form method="post" action="{{url("admin/products/delete",["id"=>$item->id])}}">
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
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Category</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr align="center">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Updated At</th>
                                        <th>Created At</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @foreach($category as $cat)
                                        <tr class="odd gradeX" align="center">
                                            <td>{{$cat->id}}</td>
                                            <td>{{$cat->name}}</td>
                                            <td>{{$cat->created_at}}</td>
                                            <td>{{$cat->updated_at}}</td>
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
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
