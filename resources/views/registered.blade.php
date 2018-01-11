<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Registered Listing</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

</head>
<body>

<div id="header">

    <div class="container">

        <h1><a href="/lara1/public/">Prathamesh</a></h1>

        <div id="main_menu">

            <ul>
                <li class="first_list"><a href="/lara1/public/" class="main_menu_first">home</a></li>
                <li class="first_list"><a href="/lara1/public/listing" class="main_menu_first main_current">Listing</a></li>
                <li class="first_list"><a href="/lara1/public/contact" class="main_menu_first">contact us</a></li>
            </ul>
        </div> <!-- END #main_menu -->

    </div> <!-- END .container -->

</div>
<div id="main_content">

    <div id="contact_area">

        <div class="container">

            <h2 id="contact">Registered People</h2>

            <div id="contact_info">

<table border="1" class="blueTable">
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
            </div> <!-- END #contact_info -->

        </div> <!-- END .container -->

    </div> <!-- END #contact_area -->

</div>
</body>
</html>