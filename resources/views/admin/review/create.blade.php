@extends('layouts.admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Form</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container{
            width: 500px;
            background: white;
            margin: 50px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align: center;
            margin-bottom: 20px;
        }

        label{
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input,
        textarea{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea{
            height: 120px;
            resize: none;
        }

        button{
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover{
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Blog Form</h2>

         <form method="POST" action="{{ route('review.store') }}">
 @csrf

            <label>CustomerName</label>
            <input type="text" name="CustomerName" placeholder="Enter Customer Name">

            <label>Rating</label>
            <input type="text" name="Rating" placeholder="Enter the rating">


            <label> Description</label>
            <textarea name="Description" placeholder="Enter the  description"></textarea>

            <button type="submit">Submit Blog</button>

        </form>
    </div>

</body>
</html>

@endsection