<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Chefs</title>

    <base href="/public">

    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">

        @include('admin.navbar')
    
        <div style="position:relative; top:60px; right:-150px">
            <h2>Edit Chef</h2>
            <form action="{{url('/updatechef', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$data->name}}" style="color: black; margin-bottom: 10px" required>
                </div>

                <div>
                    <label>Speciality</label>
                    <input type="text" name="speciality" value="{{$data->speciality}}" style="color: black; margin-bottom: 10px" required>
                </div>

                <div>
                    <label>Old Image</label>
                    <img width="100" height="100" src="/chefimage/{{ $data->image }}" style="color: black; margin-bottom: 10px">
                </div>

                <div>
                    <label>New Image</label>
                    <input type="file" name="image" style="color: white; margin-bottom: 10px">
                </div>

                <div>
                    <input type="submit" value="Edit Chef" style="background-color: yellow; color: black">  
                </div>

            </form>
        
        </div>

    </div>

    @include('admin.adminscript')

</body>

</html>
