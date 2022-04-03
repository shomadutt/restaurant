<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>
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
            <tr>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"></td>
            </tr>
        </table>
    </div>

    @include("admin.adminscript")
</body>

</html>