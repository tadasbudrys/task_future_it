@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update product</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('products.update', $product->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="first_name">Title:</label>
                    <input type="text" class="form-control" name="title" value={{ $product->title }} />
                </div>

                <div class="form-group">
                    <label for="Title">Category:</label>
                    <select class="form-control"   name="category" class = "dynamic" id = "myselect">
                        <option value="" > Select category  </option>
                        @foreach($categorys ?? '' as $category)
                            <option  value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Title">Sub category:</label>
                    <select class="form-control"   name="subcategory"  data-dependent="category" id="subcategory">
                            <option  value=""> Choose sub class</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="city">comment:</label>
                    <input type="text" class="form-control" name="comment" value={{ $product->comment }} />
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

@endsection