<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

</head>

<body>
    <div class="section-container">

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

        <div class="news-feed">
            <div class="news-feed-header">
                <div class="news-feed-header-forecast">
                    <div class="forecast-icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Emoji_u2600.svg/1200px-Emoji_u2600.png" alt="Generic placeholder image" class="img-weather" />
                    </div>
                    <div class="forecast-details">19°C, 6 m/s</div>
                </div>
                <div class="news-feed-header-date">Ceturtdiena, 07.01.2021</div>
            </div>
            <div class="news-feed-main">
                <div class="twitter">
                    <div class="twitter-account">
                        <div class="twitter-account-date">
                            <div>Twitter account 1, 30.07.2020</div>
                        </div>
                        <div class="twitter-account-post">
                            <div class="twitter-icon">
                                <img src="https://abs.twimg.com/errors/logo46x38.png" alt="Generic placeholder image" class="img-responsive" />
                            </div>
                            <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                        </div>
                    </div>
                    <div class="twitter-account">
                        <div class="twitter-account-date">
                            <div>Twitter account 1, 30.07.2020</div>
                        </div>
                        <div class="twitter-account-post">
                            <div class="twitter-icon">
                                <img src="https://abs.twimg.com/errors/logo46x38.png" alt="Generic placeholder image" class="img-responsive" />
                            </div>
                            <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                        </div>
                    </div>
                    <div class="twitter-account">
                        <div class="twitter-account-date">
                            <div>Twitter account 1, 30.07.2020</div>
                        </div>
                        <div class="twitter-account-post">
                            <div class="twitter-icon">
                                <img src="https://abs.twimg.com/errors/logo46x38.png" alt="Generic placeholder image" class="img-responsive" />
                            </div>
                            <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</div>
                        </div>
                    </div>
                </div>
                <div class="twitter">
                    <div class="twitter-account">
                        <div class="twitter-account-date">
                            <div>Twitter account 1, 30.07.2020</div>
                        </div>
                        <div class="twitter-account-post">
                            <div class="twitter-icon">
                                <img src="https://abs.twimg.com/errors/logo46x38.png" alt="Generic placeholder image" style="width: 23px; height: 19px;" class="img-responsive" />
                            </div>
                            <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                <div class="names-day">Vārda dienas svin: Digmārs, Juliāns, Rota, Zigmārs</div>
                <div class="birthday-day">Dzimšanas dienas svin: Jānis Bērziņš</div>
            </div>
        </div>

        <div class="finance-report">
            <div class="finance-report-header">Apgrozījuma plāna izpilde</div>
            <div class="finance-report-data">
                <canvas id="ctx" height="325" width="700px"></canvas>
            </div>
        </div>
    </div>

    <div id="outer">
        <!-- This div is important! It lets us specify margin-left as percentage later on. -->
        <div>
            <div id="loop">
                <div id="content">&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur.&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;Sed do eiusmod tempor incididunt ut labore.&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;Ut enim ad minim veniam, quis nostrud.&nbsp;&nbsp;&nbsp;&nbsp;*</div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script>
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    ['Finanšu', 'prakses grupa', '1'],
                    ['Finanšu', 'prakses grupa', '2'],
                    ['Finanšu', 'prakses grupa', '3'],
                    ['Finanšu', 'prakses grupa', '4'],
                    ['Finanšu', 'prakses grupa', '5'],
                    ['Finanšu', 'prakses grupa', '6'],
                    ['Finanšu', 'prakses grupa', '7'],
                    ['Finanšu', 'prakses grupa', '8']
                ],
                datasets: [{
                    label: 'Depreciation of the vehicle',
                    data: [1, 2, 4, 6, 7, 4, 8, 3, 5],
                    backgroundColor: '#2196f3'
                }, {
                    label: 'Fuel',
                    data: [5, 1, 3, 4, 6, 9, 2, 5, 2],
                    backgroundColor: '#90caf9'
                }, {
                    label: 'Insurance and Breakdown cover',
                    data: [4, 7, 2, 7, 1, 3, 7, 2, 4],
                    backgroundColor: '#f2c9fb'
                }]
            },
            options: {
                plugins: {
                    stacked100: { enable: true}
                },
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        stacked: true,
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxRotation: 0,
                            minRotation: 0,
                            autoSkip: false
                        },
                    }],
                    yAxes: [{
                        stacked: true,
                        display: false,
                        gridLines: {
                            display: false,
                            scaleLineColor: 'transparent',
                        }
                    }]
                },
            }
        });
    </script>
    <script src="{{ asset('js/welcome.js') }}"></script>
    <!-- <script src="{{ asset('js/chart.js') }}"></script> -->

</body>

</html>