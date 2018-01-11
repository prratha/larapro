<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>registered people</h1>
<table border="1">
    <thead>
        <th>First Name</th>
        <th>Last name</th>
        <th>Email Address</th>
        <th>Phone Number</th>
    </thead>
@foreach($records as $key => $data)
    <tr>
        <td>{{$data->fname}}</td>
        <td>{{$data->lname}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->number}}</td>
    </tr>
@endforeach
</table>
</body>
</html>