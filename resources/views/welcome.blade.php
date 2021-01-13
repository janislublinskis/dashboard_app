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
</head>

<body>
<div class="section-container">

    <!-- ABSENCES SECTION -->

    <div class="absences">
        <div class="absences-header">Šodienas prombūtnes</div>
        <div class="absences-events">
            <div class="absences-events-full">
                <div class="absences-event-full">
                    <div class="absences-event-time">
                        <div>9:15 AM</div>
                        <div class="absence-smaller-font">2 hrs</div>
                    </div>
                    <div class="absences-event-details">
                        <div>Jānis Bērziņš</div>
                        <div class="absence-smaller-font">Lorem ipsum</div>
                    </div>
                </div>
                <div class="absences-event-full">
                    <div class="absences-event-time">
                        <div>9:15 AM</div>
                        <div class="absence-smaller-font">2 hrs</div>
                    </div>
                    <div class="absences-event-details">
                        <div>Jānis Bērziņš</div>
                        <div class="absence-smaller-font">Lorem ipsum</div>
                    </div>
                </div>
                <div class="absences-event-full">
                    <div class="absences-event-time">
                        <div>9:15 AM</div>
                        <div class="absence-smaller-font">2 hrs</div>
                    </div>
                    <div class="absences-event-details">
                        <div>Jānis Bērziņš</div>
                        <div class="absence-smaller-font">Lorem ipsum</div>
                    </div>
                </div>
                <div class="absences-event-full">
                    <div class="absences-event-time">
                        <div>9:15 AM</div>
                        <div class="absence-smaller-font">2 hrs</div>
                    </div>
                    <div class="absences-event-details">
                        <div>Jānis Bērziņš</div>
                        <div class="absence-smaller-font">Lorem ipsum</div>
                    </div>
                </div>

            </div>

            <div class="absences-events-short">
                <div class="absences-event-short">
                    <div>Jānis Bērziņš</div>
                </div>
                <div class="absences-event-short">
                    <div>Jānis Bērziņš</div>
                </div>
                <div class="absences-event-short">
                    <div>Jānis Bērziņš</div>
                </div>
            </div>
        </div>
    </div>

    <!-- NEWS FEED SECTION -->

    <div class="news-feed">
        <div class="news-feed-header">
            <div class="news-feed-header-forecast">
                <div class="forecast-details">
                    <img src="{{ $weatherIcon }}">
                    {{ $weatherForecast }}
                </div>
            </div>
            <div class="news-feed-header-date">{{ $date }}</div>
        </div>
        <div class="news-feed-main">
            <div class="news-feed-main-twitter">
                <div class="twitter-account">
                    <div class="twitter-account-date">
                        <div>Twitter account 1, 30.07.2020</div>
                    </div>
                    <div class="twitter-account-post">
                        <div class="twitter-icon">
                            <img src="https://abs.twimg.com/errors/logo46x38.png" alt="Twitter logo"
                                 class="img-responsive"/>
                        </div>
                        <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.
                        </div>
                    </div>
                </div>
                <div class="twitter-account">
                    <div class="twitter-account-date">
                        <div>Twitter account 1, 30.07.2020</div>
                    </div>
                    <div class="twitter-account-post">
                        <div class="twitter-icon">
                            <img src="https://abs.twimg.com/errors/logo46x38.png" alt="Twitter logo"
                                 class="img-responsive"/>
                        </div>
                        <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>
                <div class="twitter-account">
                    <div class="twitter-account-date">
                        <div>Twitter account 1, 30.07.2020</div>
                    </div>
                    <div class="twitter-account-post">
                        <div class="twitter-icon">
                            <img src="https://abs.twimg.com/errors/logo46x38.png" alt="Twitter logo"
                                 class="img-responsive"/>
                        </div>
                        <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-feed-main-news">
                @foreach($posts as $key => $post)
                    <div class="news-post-container news-post-{{ $classTags[$key] }}">
                        <div class="news-cover">
                            <img src="{{ $posts[$key]['imageUrl'] }}" alt="News cover image" class="img-news-cover"/>
                        </div>
                        <div class="news-post">
                            <div class="news-post-header">
                                <div class="news-post-title">{{ $posts[$key]['title'] }}</div>
                                <div class="news-post-date">{{ $posts[$key]['date'] }}</div>
                            </div>
                            <div class="news-post-content news-post-container-{{ $classTags[$key] }}">
                                {{ $posts[$key]['content'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- PLANNED ACTIVITIES SECTION -->

    <div class="planned-activities">
        <div class="planned-activities-header">Plānotās aktivitātes</div>
        <div class="planned-activities-list">
            <div class="planned-activity">
                <div class="planned-activity-date">26.07.2020</div>
                <div class="planned-activity-details">Lorem ipsum dolor sit amet</div>
            </div>
            <div class="planned-activity">
                <div class="planned-activity-date">29.07.2020</div>
                <div class="planned-activity-details">Lorem ipsum dolor sit amet</div>
            </div>
            <div class="planned-activity">
                <div class="planned-activity-date">31.07.2020</div>
                <div class="planned-activity-details">Lorem ipsum dolor sit amet</div>
            </div>
            <div class="planned-activity">
                <div class="planned-activity-date">02.08.2020</div>
                <div class="planned-activity-details">Lorem ipsum dolor sit amet</div>
            </div>
            <div class="planned-activity">
                <div class="planned-activity-date">03.08.2020</div>
                <div class="planned-activity-details">Lorem ipsum dolor sit amet, quis consectetur adipiscing elit</div>
            </div>
        </div>
        <div class="occasions">
            <div class="names-day">{{ $namesDay }}</div>
            <div class="birthday-day">Dzimšanas dienas svin: Jānis Bērziņš</div>
        </div>
    </div>

    <!-- FINANCE REPORT SECTION -->

    <div class="finance-report">
        <div class="finance-report-header">Apgrozījuma plāna izpilde</div>
        <div class="finance-report-data">
            <div class="chart-groups">
                <img src="{{ asset('images/Left-Arrow-PNG-Download-Image.png') }}" alt="Arrow Left" class="img-arrow"/>
                <div>
                    <canvas id="chart-groups" width="664" height="325"></canvas>
                </div>
                <img src="{{ asset('images/Left-Arrow-PNG-Download-Image.png') }}" alt="Arrow Right"
                     class="img-arrow img-arrow-flipped"/>
            </div>
            <div class="chart-total">
                <canvas id="chart-total" width="80" height="295"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->

<div id="outer">
    <!-- This div is important! It lets us specify margin-left as percentage later on. -->
    <div>
        <div id="loop">
            <div id="content">&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur.&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;Sed
                do eiusmod tempor incididunt ut labore.&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;Ut enim ad minim
                veniam, quis nostrud.&nbsp;&nbsp;&nbsp;&nbsp;*
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://npmcdn.com/chart.js@latest/dist/Chart.bundle.min.js"></script>
<script src="{{ asset('js/welcome.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>

</body>

</html>
