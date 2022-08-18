<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="create" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="sexe" placeholder="Sexe">
        <input type="number" name="age" placeholder="Age">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" value="submit">
    </form>
    <section>
        <h1>world</h1>
        @foreach ($dataStudentAll as $eleve )
        @if ($eleve->age > 24)
        <p style="color:purple">{{$eleve->name}}, {{$eleve->age}}</p>
        @elseif($eleve->age == 22 || $eleve->age == 23)
        <p style="color:blue">{{$eleve->name}}, {{$eleve->age}}</p>
        @else
        <p>{{$eleve->name}}, {{$eleve->age}}</p>
        @endif

    @endforeach
    </section>
    <section>
        <h1>men</h1>
        @foreach ($males as $male )
        @if ($male->age > 24)
        <p style="color:purple">{{$male->name}}, {{$male->age}}</p>
        @elseif($male->age == 22 || $male->age == 23)
        <p style="color:blue">{{$male->name}}, {{$male->age}}</p>
        @else
        <p>{{$male->name}}, {{$male->age}}</p>
        @endif
        @endforeach
    </section>
    <section>
        <h1>women</h1>
        @foreach ($females as $female )
        @if ($female->age > 24)
        <p style="color:purple">{{$female->name}}, {{$female->age}}</p>
        @elseif($female->age == 22 || $female->age == 23)
        <p style="color:blue">{{$female->name}}, {{$female->age}}</p>
        @else
        <p>{{$female->name}}, {{$female->age}}</p>
        @endif

        @endforeach
    </section>
</body>

</html>
