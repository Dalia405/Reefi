@extends('admin.navbar.nav')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <style>
        body {
            background-color: #CCD4DD;
        }
        
        input {
            margin-right: 8px;
            box-shadow: inset 1px 1px 2px #BABECC, inset -2px -2px 10px #FFF;
            width: 100%;
            box-sizing: border-box;
            transition: all 0.2s ease-in-out;
            appearance: none;
            -webkit-appearance: none;
            border: 0;
            outline: 0;
            font-size: 16px;
            border-radius: 350px;
            padding: 16px;
            background-color: #EBECF0;
            text-shadow: 1px 1px 0 #FFF;
        }
        
        input:focus {
            box-shadow: inset 1px 1px 2px #BABECC, inset -1px -1px 2px #FFF;
        }
        
        form {
            padding: 16px;
            width: 400px;
            margin: 0 auto;
        }
        
        button {
            font-weight: bold;
            box-shadow: -5px -5px 20px #FFF, 5px 5px 20px #BABECC;
            cursor: pointer;
            font-weight: 600;
            border: 0;
            outline: 0;
            font-size: 16px;
            padding: 16px;
            margin: 10px;
            text-shadow: 1px 1px 0 #FFF;
            text-align: center;
        }
        
        .center {
            text-align: center;
        }
    </style>
    </head>

@section('body')
    <div class="container">
        
        <form action="/admin/meat/{{$data->id}}"  method="post">
            @csrf  
            @method("put")
            
            <div class="mb-3">
            <label for="exampleInputtext" class="form-label">name</label>
            <input type="text" value="{{old('productname',$data->productname)}}" class="form-control" name="productname" >
            <label for="name" class="text-danger">{{$errors->first('productname')}}</label>
            
            </div>
            <div class="mb-3">
            <label for="exampleInputtext" class="form-label">Description</label>
            <input type="text" value="{{old('description',$data->description)}}" class="form-control" name="description" >
            <label for="name" class="text-danger">{{$errors->first('description')}}</label>
            </div>
            <div class="mb-3">
                <label for="exampleInputtext" class="form-label">price</label>
                <input type="number" value="{{old('price',$data->price)}}" class="form-control" name="price" >
                <label for="name" class="text-danger">{{$errors->first('price')}}</label>
            </div>
            <div class="mb-3">
                <label for="exampleInputtext" class="form-label">image</label>
                <input type="text" value="{{old('img_path',$data->img_path)}}" class="form-control" name="img_path" >
                <label for="name" class="text-danger">{{$errors->first('img_path')}}</label>
            </div>
            <div class="center">
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>

    </div>
    
@endsection