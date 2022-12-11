<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Foods</title>

    <base href="/public">

    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">

        @include('admin.navbar')
    
        <div style="position:relative; top:60px; right:-150px">
            <h2>Edit Food</h2>
            <form action="{{url('/updatefood', $data->id)}}" method="POST">
                @csrf

                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{$data->title}}" style="color: black; margin-bottom: 10px" required>
                </div>

                <div>
                    <label>price</label>
                    <input type="number" name="price" value="{{$data->price}}" style="color: black; margin-bottom: 10px" required>
                </div>

                <div>
                    <label>Description</label>
                    <input type="text" name="description" value="{{$data->description}}" style="color: black; margin-bottom: 10px" required>
                </div>

                <div>
                    <input type="submit" value="Edit Food" style="background-color: yellow; color: black">  
                </div>

            </form>
        
        </div>

    </div>

    @include('admin.adminscript')

</body>

</html>
