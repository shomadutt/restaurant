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

        <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Name</label>
                <input style="color:blue;" type="text" name="name" placeholder="Enter a name" required>
            </div>
            <div>
                <label for="">Speciality</label>
                <input style="color:blue;" type="text" name="speciality" placeholder="Enter the speciality" required>
            </div>
            <div>

                <input type="file" name="image" required>
            </div>
            <div>

                <input type="submit" value="Save">
            </div>
        </form>

    </div>

    @include("admin.adminscript")
</body>

</html>