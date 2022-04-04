<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>

    <div class="container-scroller">
        @include("admin.navbar")

        <div style="position:relative; top:70px; right:-150">
            <table style="border:1px">
                <tr>
                    <th style="padding:30px">Name</th>
                    <th style="padding:30px">Email</th>
                    <th style="padding:30px">Phone</th>
                    <th style="padding:30px">Date</th>
                    <th style="padding:30px">Time</th>
                    <th style="padding:30px">Message</th>
                </tr>

                @foreach($data as $data)
                <tr>
                    <td style="text-align: center;">{{$data->name}}</td>
                    <td style="text-align: center;">{{$data->email}}</td>
                    <td style="text-align: center;">{{$data->phone}}</td>
                    <td style="text-align: center;">{{$data->date}}</td>
                    <td style="text-align: center;">{{$data->time}}</td>
                    <td style="text-align: center;">{{$data->message}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    @include("admin.adminscript")
</body>

</html>