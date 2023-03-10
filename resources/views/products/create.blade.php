<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Styles -->
     @vite('resources/js/app.js')
</head>
<body>
    <div class="container text-center">
        <h1>Insert informations to add a new comic book!</h1>
    </div>

    <div class="container pt-3">
        <form method="POST" action="{{route('products.store')}}">
            @csrf

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                        
                    @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    
                    @endforeach
                    
                    
                </ul>
                
            </div>
            @endif
            <div class="mb-3">
                <input type="text" placeholder="Add a comic title" class="form-control" id="" name="title" value="{{old('title')}}">
            </div>

            <div class="mb-3">
                <input type="text" placeholder="Add a comic description" class="form-control" id="" name="description" value="{{old('description')}}">
            </div>

            <div class="mb-3">
                <input type="text" placeholder="copy a comic image (URL)" class="form-control" id="" name="image" value="{{old('image')}}">
            </div>

            <div class="mb-3">
                <input type="number" placeholder="Add a comic price" class="form-control" id="" name="price" value="{{old('price')}}">
            </div>

            <div class="mb-3">
                <input type="text" placeholder="Add a comic series" class="form-control" id="" name="series" value="{{old('series')}}">
            </div>

            <div class="mb-3">
                <input type="text" placeholder="Add a release date (YY/MM/DD)" class="form-control" id=""  name="release_date" value="{{old('release_date')}}">
            </div>

            <div class="mb-3">
                <input type="type" placeholder="Add a comic type" class="form-control"  id="" name="type" value="{{old('type')}}">
            </div>
              
              
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
       

              


    
</body>
</html>
