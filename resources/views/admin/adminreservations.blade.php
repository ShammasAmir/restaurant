<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Reservations</title>

    @include('admin.admincss')

</head>

<body>

    <div class="container-scroller">

        @include('admin.navbar')

        <div style="position:relative; top:60px; right:-150px">
            <table bgcolor="grey" border="3px">
                <tr>
                    <th style="padding:30px">Name</th>
                    <th style="padding:70px">Email</th>
                    <th style="padding:30px">Phone</th>
                    <th style="padding:30px">Guests</th>
                    <th style="padding:30px">Date</th>
                    <th style="padding:30px">Time</th>
                    <th style="padding:30px">Message</th>
                    <th style="padding:30px">Action</th>
                </tr>

                @foreach ($data as $data)
                    <tr align="center">
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->guests }}</td>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->time }}</td>
                        <td>{{ $data->message }}</td>
                        <td><a style="background-color: pink" href="{{ url('/deletereservation', $data->id) }}">Delete</a></td>
                    </tr>
                @endforeach

            </table>
        </div>

    </div>

    @include('admin.adminscript')
    
</body>


</html>
