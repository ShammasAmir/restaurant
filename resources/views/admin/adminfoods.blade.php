<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Foods</title>

    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">

        @include('admin.navbar')
    
        <div style="position:relative; top:60px; right:-150px">
            <h2>Create New Food</h2>
            <form action="{{url('/createfood')}}" method="POST">
                @csrf

                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" style="color: black; margin-bottom: 10px" required>
                </div>

                <div>
                    <label>price</label>
                    <input type="number" name="price" style="color: black; margin-bottom: 10px" required>
                </div>

                <div>
                    <label>Description</label>
                    <input type="text" name="description" style="color: black; margin-bottom: 10px" required>
                </div>

                <div>
                    <input type="submit" value="Create Food" style="background-color: green">  
                </div>

            </form>
        
        </div>

        <div style="position:relative; top:350px; right:200px">
            <table bgcolor="grey" border="3px">
                <tr>
                    <th style="padding:30px">Title</th>
                    <th style="padding:30px">Price</th>
                    <th style="padding:30px">Description</th>
                    <th style="padding:30px">Image</th>
                    <th style="padding:30px">Action1</th>
                    <th style="padding:30px">Action2</th>
                </tr>

                @foreach ($data as $data)
                    <tr align="center">
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->image }}</td>
                        <td><a style="background-color: yellow" href="">Edit</a></td>
                        <td><a style="background-color: pink" href="{{url('/deletefood', $data->id)}}">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    @include('admin.adminscript')

</body>

</html>
