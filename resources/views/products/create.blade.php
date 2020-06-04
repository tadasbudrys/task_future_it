@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a contact</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('products.store') }}">
                    @csrf


                    <div class="form-group">
                        <label for="Title">First Name:</label>
                        <input type="text" class="form-control" name="title"/>
                    </div>
                    <div class="form-group">
                        <label for="Title">Category:</label>
                    <select  name="category" >

                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="Title">Sub Category:</label>
                        <select  name="subcategory" >

                            @foreach($subcategories as $subcategorie)
                                <option value="{{ $subcategorie->id }}">{{ $subcategorie->name }}</option>
                            @endforeach
                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary-outline">Add contact</button>
                </form>
            </div>
        </div>
    </div>
@endsection