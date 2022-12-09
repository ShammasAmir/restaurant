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

<div class="container-scroller">

    <body>

        @include('admin.navbar')

        <div style="position:relative; top:60px; right:-150px">
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
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td>{{$data->image}}</td>
                        <td><a href="">Edit</a></td>
                        <td><a href="">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>

        @include('admin.adminscript')

    </body>
</div>

</html>
