<div class="news-feed">
    <div class="sections-header news-feed-header">
        <div class="news-feed-header-forecast">
            <div class="forecast-details">
                <div>
                    <img src="{{ $weatherIcon }}">
                </div>
                <div>{{ $weatherForecast }}</div>
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
                        <img src="https://abs.twimg.com/errors/logo46x38.png" alt="Twitter logo" class="img-responsive" />
                    </div>
                    <div class="">Helping your future take off<br>Global lawyers powered by excellence
                    </div>
                </div>
            </div>
            <div class="twitter-account">
                <div class="twitter-account-date">
                    <div>Twitter account 2, 30.07.2020</div>
                </div>
                <div class="twitter-account-post">
                    <div class="twitter-icon">
                        <img src="https://abs.twimg.com/errors/logo46x38.png" alt="Twitter logo" class="img-responsive" />
                    </div>
                    <div class="">Helping your future take off<br>Global lawyers powered by excellence<br>http://bright.lv
                    </div>
                </div>
            </div>
            <div class="twitter-account">
                <div class="twitter-account-date">
                    <div>Twitter account 2, 30.07.2020</div>
                </div>
                <div class="twitter-account-post">
                    <div class="twitter-icon">
                        <img src="https://abs.twimg.com/errors/logo46x38.png" alt="Twitter logo" class="img-responsive" />
                    </div>
                    <div class="">12.08.2020. publicēti trīs @Brivibas36 rīkojumi, divi<br>@SPRK_LV lēmumi, kā arī
                        @Talsu_novads saistošie noteikumi.<br>Ieskaties!
                        https://likumi.lv/ta/jaunakie/publiceti/2020/8/12
                    </div>
                </div>
            </div>
        </div>
        <div class="news-feed-main-news">
            @foreach($posts as $key => $post)
            <div class="news-post-container news-post-{{ $classTags[$key] }}">
                <div class="news-cover">
                    <a href="{{ $posts[$key]['imageUrl'] }}">
                        <img src="{{ $posts[$key]['imageUrl'] }}" alt="News cover image" class="img-news-cover" />
                    </a>
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