<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Orders</title>

    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">

        @include('admin.navbar')

        <div class="container">

            <form class="mt-4" action="{{url('/search')}}" method="get">
                @csrf
                <input type="text" name="search" placeholder="Enter customer name or food name !" style="color: black; width:40%">
                <input type="submit" value="Search" class="btn btn-success">
                <a href="{{ url('/orders') }}" class="btn btn-primary">Show All Orders</a>
            </form>

            <div></div>

            <div style="position:relative; top:60px; right:-150px">
                <table bgcolor="grey" border="3px">
                    <tr>
                        <th style="padding:30px">Customer Name</th>
                        <th style="padding:70px">Phone</th>
                        <th style="padding:30px">Address</th>
                        <th style="padding:30px">Food Name</th>
                        <th style="padding:30px">Price</th>
                        <th style="padding:30px">Count</th>
                        <th style="padding:30px">Total Price</th>
                        <th style="padding:30px">Action</th>
                    </tr>

                    @foreach ($data as $data)
                        <tr align="center">
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->foodname }}</td>
                            <td>$ {{ $data->price }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>$ {{ $data->price * $data->quantity }}</td>
                            <td><a style="background-color: pink" href="{{ url('/deleteorder', $data->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>

    </div>

    @include('admin.adminscript')

</body>


</html>
