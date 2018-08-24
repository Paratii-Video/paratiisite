(function () {

    'use strict';

    //

    function init () {
        var $medias, $teasers, index, videos, videosplayer, videosplayer_config, videosplayer_timeout, video_time;

        $teasers = $('section.teasers');
        $medias = $teasers.find('div.teasers-medias');

        index = $teasers.find('div.teasers-medias-item.active').index();
        videos = [];
        video_time = 0;


        //

        $teasers.find('div.teasers-medias-item').each(function (e) {
            var index, interval;

            index = e;

            videos.push({
                $element: $(this),
                $video: $(this).find('video')[0],
                canplay: false
            });

            videos[index].$video.load();
            videos[index].$video.addEventListener('ended', function () {
                videos[index].$video.currentTime = 0;
            });

             if (!GLOBALS.state.ismobile) {
                $(videos[index].$video).on('click', resume);
            }


            // Android can't play without controls=true(but can video.play)

            if (GLOBALS.state.isandroid) {
                $(videos[index].$video).on('click', function() {
                    if (!videos[index].$video.controls && videos[index].canplay) {
                        videos[index].$video.controls = true;
                        videos[index].$video.play();
                    }
                });
            }


            //
            
            interval = setInterval(function () {
                if ((!GLOBALS.state.ismobile && videos[index].$video.readyState == 4) || (GLOBALS.state.ismobile  && videos[index].$video.readyState != 0)) {
                    clearInterval(interval);

                    videos[index].$element.addClass('ready');
                    videos[index].canplay = true;
                }
            }, 1000);
        });

        //

        function next () {
            if (!videos[index].$video.paused) videos[index].$video.pause();
            $(videos[index].$element).removeClass('active');
            index++;
            if (index >= videos.length) index = 0;
            $(videos[index].$element).addClass('active');

            if(videosplayer) videosplayer.set(videos[index].$video);
            video_time = 0;
        }

        function resume () {
            if (videos[index].$video.readyState == 4 && !GLOBALS.state.ismobile) {
                if (videos[index].$video.paused || videos[index].$video.currentTime == video_time) {
                    videos[index].$video.play();
                } else {
                    videos[index].$video.pause();
                }

                video_time = videos[index].$video.currentTime;
            }
        }

        function pause () {
            if (videos[index].canplay) videos[index].$video.pause();
        }


        // Player

        if (!GLOBALS.state.ismobile) {        
            videosplayer_config = {
                element: document.getElementsByClassName('medias-controls')[0]
            }
            videosplayer = new VideosPlayer(videosplayer_config);
            videosplayer.set(videos[index].$video);
        }



        //

        $teasers.on('click', 'button.teasers-button-next', next);
        
        if (!GLOBALS.state.ismobile) {
            GLOBALS.methods.pauseVideo = pause;
        }

        $teasers.on('click', 'button.teasers-button-scroll', function () {
            if (!GLOBALS.state.ismobile) pause();
            GLOBALS.methods.scrollTo($(".about"))
        });

        $medias.on('mouseover mousemove', function () {
            if (videos[index].canplay) {
                if (videosplayer_timeout) clearTimeout(videosplayer_timeout);
                $medias.addClass('show-controls');

                videosplayer_timeout = setTimeout(function () {
                    $medias.removeClass('show-controls');
                }, 2000);
            }
        });

        $medias.on('mouseout', function () {
            if (videosplayer_timeout) clearTimeout(videosplayer_timeout);
            $medias.removeClass('show-controls');
        });
    }

    if ($('section.teasers').length) {
        init();
    }
}());
