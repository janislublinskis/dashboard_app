<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer-loop.css') }}"/>

</head>

<body>
<div class="section-container">
    <!-- ABSENCES SECTION -->
    @include('partials.absences')

    <!-- NEWS FEED SECTION -->
    @include('partials.news-feed')

    <!-- PLANNED ACTIVITIES SECTION -->
    @include('partials.planned-activities')

    <!-- FINANCE REPORT SECTION -->
    @include('partials.finance-report')
</div>

<!-- FOOTER -->
@include('partials.footer')

<script type="text/javascript" src="https://npmcdn.com/chart.js@latest/dist/Chart.bundle.min.js"></script>
<script src="{{ asset('js/welcome.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>

</body>

</html>
