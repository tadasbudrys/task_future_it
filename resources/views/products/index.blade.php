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
{{--                {{$products}}--}}
                {{print_r($products)}}
                {{var_dump($products)}}
                @foreach($products as $product )
                <tr>
                    <tr>
                    <td>   {{$product->title}}</td>
                    <td>   {{$product->category_name}}</td>
                    <td>   {{$product->category_name}}</td>
{{--                        <td>{{$key->title}}</td>--}}
{{--                        <td>{{$key->category_id['name']}}</td>--}}
{{--                        {{ var_dump($product->available) }}--}}

{{--                        <td>--}}
{{--                            <a href="{{ route('products.edit',$contact->id)}}" class="btn btn-primary">Edit</a>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                            </form>--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection