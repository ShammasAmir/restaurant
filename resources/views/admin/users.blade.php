<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Users</title>

    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">

        @include('admin.navbar')

        <div class="container">

            <div style="position:relative; top:60px; right:-150px">
                <table bgcolor="grey" border="3px">
                    <tr>
                        <th style="padding:30px">Name</th>
                        <th style="padding:30px">Email</th>
                        <th style="padding:30px">Action</th>
                    </tr>

                    {{-- <tr align="center">
                    <td>amir</td>
                    <td>amir@gmail.com</td>
                    <td><a href="">Delete</a></td>
                </tr> --}}

                    @foreach ($data as $data)
                        <tr align="center">
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            {{-- <td><a href="">Delete</a></td> --}}

                            @if ($data->usertype == '0')
                                <td><a style="background-color: pink"
                                        href="{{ url('/deleteuser', $data->id) }}">Delete</a></td>
                            @else
                                <td><a>Not Allowed</a></td>
                            @endif

                        </tr>
                    @endforeach

                </table>
            </div>
        </div>

    </div>

    @include('admin.adminscript')

</body>


</html>
