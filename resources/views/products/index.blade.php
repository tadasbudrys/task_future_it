@extends('base')

@section('main')


{{--    {{print_r($b)}}--}}
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Product Page</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Comment</td>
                    <td>Category name</td>
                    <td>Sub category name</td>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product )
                <tr>
                    <tr>
                    <td>   {{$product->title}}</td>
                    <td>   {{$product->comment}}</td>
                    <td>   {{$product->category_name}}</td>
                    <td>   {{$product->subcategory_name}}</td>

                    <td>  <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection