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

        <div style="position:relative; top:60px; right:-150px">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="">Title</label>
                    <input style="color:black" type="text" name="title" placeholder="Enter a title" required>
                </div>
                <div>
                    <label for="">Price</label>
                    <input style="color:black" type="number" name="price" placeholder="Enter a price" required>
                </div>
                <div>
                    <label for="">Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <label for="">Description</label>
                    <input style="color:black" type="text" name="description" placeholder="Enter a description" required>
                </div>

                <div>

                    <input type="submit" value="Save">
                </div>

            </form>

            <table>
                <tr>
                    <th style="padding:30px">Food Name</th>
                    <th style="padding:30px">Price</th>
                    <th style="padding:30px">Description</th>
                    <th style="padding:30px">Image</th>
                    <th style="padding:30px">Action</th>
                    <th style="padding:30px">Action2</th>
                </tr>

                @foreach($data as $data)
                <tr>
                    <td style="text-align:center">{{$data->title}}</td>
                    <td style="text-align:center">{{$data->price}}</td>
                    <td style="text-align:center">{{$data->description}}</td>
                    <td style="text-align:center"><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                    <td style="text-align:center"><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
                    <td style="text-align:center"><a href="{{url('/updateview', $data->id)}}">Update</a></td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>

    @include("admin.adminscript")


</body>

</html>