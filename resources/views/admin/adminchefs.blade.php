<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Chefs</title>

    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">

        @include('admin.navbar')
    
        <div>
            <h2>Create New Chef</h2>
            <form action="{{url('/createchef')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="title">Name</label>
                    <input type="text" name="name" style="color: black; margin-bottom: 10px" required>
                </div>

                <div>
                    <label>Speciality</label>
                    <input type="text" name="speciality" style="color: black; margin-bottom: 10px" required>
                </div>

                <div>
                    <label>Image</label>
                    <input type="file" name="image" style="color: white; margin-bottom: 10px" required>
                </div>

                <div>
                    <input type="submit" value="Create Chef" style="background-color: green">  
                </div>

            </form>
        
        </div>

        <div>
            <table bgcolor="grey" border="3px">
                <tr>
                    <th style="padding:30px">Name</th>
                    <th style="padding:30px">speciality</th>
                    <th style="padding:30px">Image</th>
                    <th style="padding:30px">Action1</th>
                    <th style="padding:30px">Action2</th>
                </tr>

                @foreach ($data as $data)
                    <tr align="center">
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->speciality }}</td>
                        <td><img width="100" height="100" src="/chefimage/{{ $data->image }}"></td>
                        <td><a style="background-color: yellow" href="{{url('/editchef', $data->id)}}">Edit</a></td>
                        <td><a style="background-color: pink" href="{{url('/deletechef', $data->id)}}">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    @include('admin.adminscript')

</body>

</html>
