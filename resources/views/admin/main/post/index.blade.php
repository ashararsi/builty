@extends('admin.layouts.main')
{{--@extends('layouts.app')--}}
@section('title')
    Post
@endsection
@section('css')
    <style>
        .dataTables_wrapper {
            width: 100% !important;
        }
    </style>
@endsection

@section('breadcrumb_page')
    Post
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#"><i
                class="zmdi zmdi-home"></i> {{ config('app.name', 'Laravel') }}</a></li>
    <li class="breadcrumb-item ">Post</li>
@endsection

@section('content')

    <div class="container-fluid">
        <a href="{{ route('admin.post.create') }}" class="btn btn-primary float-right">Create</a>
        <div class="row w-100" style="width: 100%">
            <table id="datatable" style="width: 100%" class="w-100 table table-bordered ">
                <thead class="thead-dark">
                <th style="width: 10%;">id</th>
                <th style="width: 50%;">Post</th>
                <th style="width: 10%;">Category</th>
                <th style="width: 20%;">Image</th>
                <th style="width: 10%;">Link</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->post !!}</td>
                        <td>{!! $item->cat_get->name !!}</td>
                        <td><img src="{{ asset($item->image_get->path.$item->image_get->url) }}"/></td>
                        <td>@if(isset($item->link)) {!! $item->link !!} @else NA @endif</td>
                        <td>
                            <a href="{{ route('admin.post.edit', $item->id) }}" class="ml-2 mr-2">
                                <i class="zmdi zmdi-edit"></i></a>
                            {!! Form::open(array( 'style' => 'display: inline-block;','id'=>'delete_form_'.$item->id,    'method' => 'DELETE','onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');", 'route' => ['admin.post.destroy', $item->id])) !!}
                            <a class="ml-2 mr-2 text-danger" href="javascript:formsubmit({!! $item->id !!});"
                               type="submit"
                               id="submit_btn"><i class="zmdi zmdi-delete"></i></a>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function formsubmit(id) {
            $("#delete_form_" + id).submit();
        }

        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>
@endsection

