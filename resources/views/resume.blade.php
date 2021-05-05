<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
    <style>
        body{
            font-size: 17px;
        }
        h2{
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }
        .container{
            width: 70%;
            margin: 0 auto;
        }
        .text-primary{
            color: blue;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div class="container">
        <section>
            <h2>{{$user->details->firstname}} {{$user->details->lastname}}</h2>
            <p>Email : {{$user->details->email}}</p>
            <p>Phone : {{$user->details->phone}}</p>
            <p>Address : {{$user->details->address}}</p>
        </section>

        <section>
            <h2 class="text-primary">About me</h2>
            <p>{{$user->details->summary}}</p>
        </section>

        <section>
            <h2 class="text-primary">Education: </h2>
            @foreach ($user->education as $e)
                <td><h4>Degree: {{$e->matric_degree}} {{$e->from_year_matric}}-{{$e->to_year_matric}}</h4> </td>
            @endforeach
        </section>

        <section class="page-break">
            <h2 class="text-primary">Experience: </h2>
            @foreach ($user->experience as $e)
                <td><h4>Job title: {{$e->job_title}}, {{$e->employer}}({{$e->start_date}}-{{$e->end_date}})</h4> </td>
            @endforeach
        </section>
        <section>
            <h2 class="text-primary">Skills: </h2>
            @foreach ($user->skill as $e)
                <td><h4>Skill: {{$e->name}} {{$e->rating}}</h4></td>
            @endforeach
        </section>
    </div>
</body>
</html>
