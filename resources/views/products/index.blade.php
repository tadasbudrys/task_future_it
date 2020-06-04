@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Contacts</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Job Title</td>
                    <td>City</td>
                    <td>Country</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product )
                <tr>
                    <tr>
                    <td>   {{$product->title}}</td>
                    <td>   {{$product->coment}}</td>
                    <td>   {{$product->category_name}}</td>
                    <td>   {{$product->category_name}}</td>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection