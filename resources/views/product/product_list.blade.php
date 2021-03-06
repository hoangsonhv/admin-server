@extends("admin/layout")
@section("main")
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <h1 class="page-header">Product List</h1>
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" id="myInput" type="text" placeholder="Search.." style="margin-top: 9px">
                    </div>
                    <div class="col-lg-3">
                        <a href="{{url("admin/products/add")}}" style="float: right;padding-top: 12px;"><button type="button">Add Product</button></a>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach ($product as $item)
                        <tr align="center" style="padding-top:50px;" class="odd gradeC">
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td><img style="width: 70px;height: 70px" src="{{$item->getImage()}}"/></td>
                            <td>{{$item->description}}</td>
                            <td>{{number_format($item->price)}}</td>
                            <td>{{$item->qty}}</td>
                            <td>{{$item->sale}}</td>
                            <td>{{$item->new}}</td>
                            <td>{{$item->category_id}}</td>
                            <td>{{formatDate($item->created_at)}}</td>
                            <td>{{formatDate($item->updated_at)}}</td>
                            <td class="center"><a href="{{url("admin/products/edit",["id"=>$item->id])}}"><i class="fa fa-pencil fa-fw"></i>S???a</a></td>
                            <td class="center">
                                <a href="{{url('admin/products/delete',["id"=>$item->id])}}" style="text-decoration: none">
                                        <i class="fa fa-trash-o  fa-fw"></i>
                                        Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    <div class="card-footer">
                        {!! $product->links("vendor.pagination.default") !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
