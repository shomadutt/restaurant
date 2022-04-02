<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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

            <div style="position:relative; top:60px; right:-150px;">
                <table>
                    <tr style="text-align:center">
                        <th style="padding:30px">Name</th>
                        <th style="padding:30px">Email</th>
                        <th style="padding:30px">Action</th>
                    </tr>

                    @foreach($data as $data)
                    <tr style="text-align:center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>

                        @if($data->usertype=='0')
                        <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
                        @else
                        <td>Not Allowed</td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>

        @include("admin.adminscript")
    </body>

    </html>

</body>

</html>