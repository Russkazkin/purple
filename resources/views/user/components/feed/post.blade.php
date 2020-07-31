<div class="ui-block revealator-fade revealator-delay2 revealator-once">
    <!-- Пост -->

    <article class="hentry post">

            <div class="post__author author vcard inline-items">
                <img src="{{ asset('img/ii.jpg') }}" alt="author">
                {{-- @dump($feed) --}}
                <div class="author-date">
                    <a class="h6 post__author-name fn" href="">{{ $feed->postable['full_name'] }}</a>
                    <div class="post__date">
                        <time class="published" datetime="{{ $feed['created_at'] }}">
                            {{ $feed['created_at'] }}
                        </time>
                    </div>
                </div>
                @can('update', User::class)
                <div class="more">
                    <svg class="olymp-three-dots-icon">
                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon') }}"></use>
                    </svg>
                    <ul class="more-dropdown">
                        <li>
                            <a href="#">Редактировать пост</a>
                        </li>
                        <li>
                            <a href="#">Удалить пост</a>
                        </li>
                    </ul>
                </div>
                @endcan
            </div>

            <p>{!! $feed['text'] !!}
            </p>

            <div class="post-additional-info inline-items">

                <a href="#" class="post-add-icon inline-items">
                    <svg class="olymp-heart-icon">
                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-heart-icon') }}"></use>
                    </svg>
                    <span>8</span>
                </a>

                <ul class="friends-harmonic">
                    <li>
                        <a href="#">
                            <img src="{{ asset('img/spiegel.jpg') }}" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('img/spiegel.jpg') }}" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('img/spiegel.jpg') }}" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('img/spiegel.jpg') }}" alt="friend">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('img/spiegel.jpg') }}" alt="friend">
                        </a>
                    </li>
                </ul>

                <div class="names-people-likes">
                    <a href="#">spiegel</a>, <a href="#">spiegel</a> and
                    <br>6 лайков
                </div>


                <div class="comments-shared">
                    <a href="#" class="post-add-icon inline-items">
                        <svg class="olymp-speech-balloon-icon">
                            <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-speech-balloon-icon') }}"></use>
                        </svg>
                        <span>17</span>
                    </a>

                    <a href="#" class="post-add-icon inline-items">
                        <svg class="olymp-share-icon">
                            <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-share-icon') }}"></use>
                        </svg>
                        <span>24</span>
                    </a>
                </div>


            </div>

            <div class="control-block-button post-control-button">

                <a href="#" class="btn btn-control featured-post">
                    <svg class="olymp-trophy-icon">
                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-trophy-icon') }}"></use>
                    </svg>
                </a>

                <a href="#" class="btn btn-control">
                    <svg class="olymp-like-post-icon">
                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-like-post-icon') }}"></use>
                    </svg>
                </a>

                <a href="#" class="btn btn-control">
                    <svg class="olymp-comments-post-icon">
                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-comments-post-icon') }}"></use>
                    </svg>
                </a>

                <a href="#" class="btn btn-control">
                    <svg class="olymp-share-icon">
                        <use xlink:href="{{ asset('svg-icons/sprites/icons.svg#olymp-share-icon') }}"></use>
                    </svg>
                </a>

            </div>

    </article>

</div><!-- .. окончание Поста -->
