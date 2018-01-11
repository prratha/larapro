<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    {{--<script>--}}
    {{--onsubmit()--}}
    {{--{--}}

    {{--DB::insert('insert into users values()')--}}
    {{--}--}}
    {{--</script>--}}

</head>
<body>
<div id="header">

    <div class="container">

        <h1><a href="index.html">Prathamesh</a></h1>

        <div id="main_menu">

            <ul>
                <li class="first_list"><a href="/lara1/public/" class="main_menu_first">home</a></li>
                <li class="first_list"><a href="/lara1/public/listing" class="main_menu_first">Listing</a></li>
                <li class="first_list"><a href="/lara1/public/contact" class="main_menu_first main_current">contact us</a></li>
            </ul>
        </div> <!-- END #main_menu -->

    </div> <!-- END .container -->

</div>
<div id="main_content">

    <div id="contact_area">

        <div class="container">

            <h2 id="contact">CONTACT US</h2>

            <div id="contact_info">

                <div id="contact_info_left">

                    <p>Thank you for stopping by. Please use the form below to contact us and will get back to you at the earliest possible
                        <br />
                        <br />
                        For feedback or questions, please email us at: <a href="mailto:prrrathamesh@gmail.com" class="bold_text blue_text">prrrathamesh@gmail.com</a></p>

                    <form action="#" method="post" id="contact_form">
                        <fieldset>
                            <ol>
                                <li>
                                    <label for="fname">First Name</label><input type="text" name="fname" value="" size="77" maxlength="" id="fname" />
                                </li>
                                <li>
                                    <label for="lname">Last Name</label><input type="text" name="lname" value="" size="77" maxlength="" id="lname" />
                                </li>
                                <li>
                                    <label for="email">Email Address</label><input type="text" name="email" value="" size="77" maxlength="" id="email" />
                                </li>
                                <li>
                                    <label for="no">Mobile number</label><input type="text" name="no" value="" size="77" maxlength="10" id="no" />
                                </li>
                                <li>
                                    <input type="submit" value="SUBMIT" size="" maxlength="" />
                                </li>
                            </ol>
                        </fieldset>
                    </form>
</body>
</html>