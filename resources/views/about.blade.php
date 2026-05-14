<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>


    <h1> Hello my dear {{$name}}</h1>

    <form action="about" method="post">

    @csrf
<input type="text" name="name">
<select name="department" id=" department">

    @foreach($departments as $key => $department)
    <option value="{{$department}}"> {{$department}} </option>
    @endforeach
  
</select>

<input type="submit">
    </form>
</body>
</html>