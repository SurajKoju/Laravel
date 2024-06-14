<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>        
    @vite('resources/css/app.css')

    <style>
        body{
            padding: 0;
            margin: 0;
        }

        .header_section{
            background-color: red;
            padding: 40px 0px;
        }

        .font-bold{
            font-weight: bolder;
            text-transform: uppercase;
        }

        .contact_header h4{
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
            column-gap: 10px;
            padding: 50px 0px;
        }

        .footer_section{
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: red;
        }
    </style>

</head>
<body>

<div class = "header_section">
    <h1 style="text-align: center;">Header Section</h1>
</div>
    


<div class = "row">
    <a href = "/contact">
        Contact
    </a>

    <a href = "/about">
        About
    </a>
</div>


<div class = "row">
<p>This is {{ $slot }} page.</p>
</div>

<div class = "row" style = "justify-content: end;">
<p> I am <b>{{ $message }}</b> of <b>{{ $slot }}</b> Page.</p>
</div>

<!-- <?php //echo $slot ?> -->




