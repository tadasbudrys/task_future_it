@extends('base')

@section('main')


    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add product</h1>
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
                    <select class="form-control"   name="category" id = "myselect">

                    @foreach($categories as $categorie)
                        <option  value="{{ $categorie->id }}">{{ $categorie->category_name }}</option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="Title">Sub category:</label>
                        <select class="form-control"   name="subcategory"  data-dependent="category" id="subcategory">
                            <option  value=""> Choose sub class</option>
                        </select>
                    </div>


{{--                    <div class="form-group">--}}
{{--                        <label for="Title">Sub Category:</label>--}}
{{--                        <select class="form-control"  name="subcategory" >--}}

{{--                            @foreach($subcategories as $subcategorie)--}}
{{--                                <option value="{{ $subcategorie->id }}">{{ $subcategorie->subcategory_name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label for="Title" >Comment</label>
                        <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Add contact</button>
                </form>
            </div>
        </div>
    </div>
{{--    <script type="text/javascript">--}}

{{--    $('#myselect').change(function(){--}}

{{--    var select=   $( "#myselect option:selected" ).val();--}}
{{--    console.log(select);--}}
{{--    $.ajax({--}}
{{--    url:"{{route('products.fetch')}}",--}}
{{--    method:"GET",--}}
{{--    data: {select:select},--}}
{{--    dataType: 'JSON ',--}}
{{--    success:function(response)--}}
{{--    {--}}
{{--    $("#subcategory option").remove();--}}
{{--    console.log('response', response)--}}
{{--    $.each(response, function (index, value) {--}}
{{--    $("<option></option>", {value: value.id, text:value.subcategory_name}).appendTo('#subcategory');--}}
{{--    });--}}

{{--    }--}}
{{--    })--}}
{{--    });--}}
{{--    </script>--}}
@endsection