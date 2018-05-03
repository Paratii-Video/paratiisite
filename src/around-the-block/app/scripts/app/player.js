// Videos Player
// Utils

function addClass (el, cl) {
    var c0 = (" " + el.className + " ").replace(/\s+/g, " "),
            c1 = (" " + cl + " ").replace(/\s+/g, " ");
    if (c0.indexOf(c1) < 0) {
            el.className = (c0 + c1).replace(/\s+/g, " ").replace(/^ | $/g, "");
    }
}

function removeClass (el, cl) {
  if (!el) return;

    var c0 = (" " + el.className + " ").replace(/\s+/g, " "),
            c1 = (" " + cl + " ").replace(/\s+/g, " ");
    if (c0.indexOf(c1) >= 0) {
            el.className = c0.replace(c1, " ").replace(/\s+/g, " ").replace(/^ | $/g, "");
    }
}

function getElement (elem, klass, txt) {
    var tag, text;
    tag = document.createElement(elem);
    
    if (klass) tag.className = klass;
    
    if (txt) {
        text = document.createTextNode(txt);  
        tag.appendChild(text);
    }
    
    return tag;
}


// Class

function VideosPlayer (config) {
    if (config.element) {
        var self, timeout, $button, $loadedline, $mute, $thumb, $timeline, $track, $volume, $vthumb, $vtimeline;

        self = this;
        this.$element = config.element;
        this.$video = config.video;
        this.was_paused = true;
        this.enable_drag = false;
        this.enable_volume = false;

        //

        render();
        this.setBoundings();

        window.onresize = function (e) {
            self.setBoundings();
        }


        // Private methods

        function render () {
            var $svg_pause, $svg_play,$svg_mute;

            $svg_pause = '<svg class="svg svg-pause" viewBox="0 0 68 63.8"><path class="path" d="M37.5 16.4h9v31h-9zM21.5 16.4h9v31h-9z"/></svg>';
            $svg_play = '<svg class="svg svg-play" viewBox="0 0 68 63.8"><path class="path" d="M20.4 14.6v34.6l27.2-17.3z"/></svg>';
            $svg_mute = '<svg class="svg svg-mute" viewBox="0 0 68 63.8"><path class="path" d="M37.6 16.2v3.7c5.2 1.5 8.9 6.3 8.9 12s-3.8 10.5-8.9 12v3.7c7.2-1.6 12.5-8 12.5-15.7s-5.3-14.1-12.5-15.7zm4.5 15.7c0-3.2-1.8-5.9-4.5-7.2v14.4c2.6-1.3 4.5-4 4.5-7.2zm-24.2-5.4v10.7h7.2l8.9 8.9V17.6l-8.9 8.9h-7.2z"/></svg>';

            self.$track = getElement('div', 'medias-controls-track');
            self.$thumb = getElement('button', 'medias-controls-thumb medias-controls-track-thumb');
            self.$timeline = getElement('div', 'medias-controls-track-timeline');
            self.$loadedline = getElement('div', 'medias-controls-track-loadedline');
            self.$button = getElement('button', 'medias-controls-button medias-controls-play-button');
            self.$mute = getElement('button', 'medias-controls-button medias-controls-mute-button');
            self.$volume = getElement('div', 'medias-controls-volume');
            self.$vthumb = getElement('button', 'medias-controls-thumb medias-controls-volume-thumb');
            self.$vtimeline = getElement('div', 'medias-controls-volume-timeline');

            self.$track.appendChild(self.$loadedline);
            self.$track.appendChild(self.$timeline);
            self.$track.appendChild(self.$thumb);
            self.$element.appendChild(self.$track);

            self.$button.innerHTML = $svg_pause + $svg_play;
            self.$element.appendChild(self.$button);
            self.$mute.innerHTML = $svg_mute;
            self.$element.appendChild(self.$mute);

            self.$volume.appendChild(self.$vtimeline);
            self.$volume.appendChild(self.$vthumb);
            self.$element.appendChild(self.$volume);
        }

        function Track (e) {
            if (timeout) clearTimeout(timeout);

            var perc, time;

            time = 200;
            
            if (e.type == 'mousedown') {
                self.enable_drag = true;
                time = 0;
                self.was_paused = self.$video.paused;
                
                if (!self.was_paused) {
                    self.$video.pause();
                }
            }

            perc = self.PercentualThumb(e.clientX, self.$track.left, self.$track.width);

            self.PositionThumb(perc, self.$thumb);
            self.PositionVideo(perc);
            
            timeout = setTimeout(function () {
                self.PositionVideo(perc);
            }, time);
        }

        function Volume (e) {
            var perc;

            if (e.type == 'mousedown') {
                self.enable_volume = true;
            }

            perc = self.PercentualThumb(e.clientX, self.$volume.left, self.$volume.width);
            perc = perc / 100;
            if (perc > 1) perc = 1;
            if (perc < 0) perc = 0;

            self.$video.volume = perc;
        }


        // Actions

        this.$button.onclick = this.playpause.bind(this);

        this.$mute.onclick = function () {
            if (self.$video.duration !=  NaN) {
                self.$video.volume = !self.$video.volume;
            }
        }

        this.$volume.onmousedown = function (e) {
            if (self.$video.duration !=  NaN) {
                Volume(e);
            }
        }

        this.$volume.onmousemove = function (e) {
            if (self.enable_volume && self.$video.duration != NaN) {
                Volume(e);
            }
        }

        this.$volume.onmouseout = function () {
            self.enable_volume = false;
        }

        this.$volume.onmouseup = function () {
            self.enable_volume = false;
        }

        this.$track.onmousedown = function (e) {
            if (self.$video.duration !=  NaN) {
                Track(e);
            }
        }

        this.$timeline.onmousemove = function (e) {
            if (self.enable_drag && self.$video.duration !=  NaN) {
                Track(e);
            }
        }

        this.$track.onmouseout = function () {
            self.enable_drag = false;
        }

        this.$track.onmouseup = function () {
            self.enable_drag = false;
        }

    } else {
        console.error('need an element');
    }
}

VideosPlayer.prototype.percentual = function (current, total) {
    return ((current / total) * 100);
}

VideosPlayer.prototype.setBoundings = function () {        
    this.$track.width = this.$track.offsetWidth;
    this.$track.left = this.$track.getBoundingClientRect().left;
    this.$volume.width = this.$volume.offsetWidth;
    this.$volume.left = this.$volume.getBoundingClientRect().left;
}

VideosPlayer.prototype.playpause = function () {
    if (this.$video.paused) {
        this.$video.play();
    } else {
        this.$video.pause();
    }
}

VideosPlayer.prototype.PercentualThumb = function (current, left, width) {
    var a, b, c;
    a = (current - left);
    b = width;

    return this.percentual(a, b);
}

VideosPlayer.prototype.PercentualVideo = function () {
    return this.percentual(this.$video.currentTime, this.$video.duration);
}

VideosPlayer.prototype.PositionThumb = function (perc, $thumb) {
    if (this.$video.duration) {
        $thumb.style.left = perc + '%';
    }
};

VideosPlayer.prototype.PositionVideo = function (perc) {
    if (this.$video.duration) {
        var current = (this.$video.duration / 100) * perc;
        if (current < 0) current = 0;
        if (current > this.$video.duration) current = this.$video.duration;
        this.$video.currentTime = current;

        this.$video.play();
    }
}

// Video Events

VideosPlayer.prototype.durationchange = function (e) {
    if (!this.enable_drag) this.PositionThumb(this.PercentualVideo(), this.$thumb);
}

VideosPlayer.prototype.timeupdate = function (e) {
    if (!this.enable_drag) this.PositionThumb(this.PercentualVideo(), this.$thumb);
}

VideosPlayer.prototype.volumechange = function (e) {
    this.PositionThumb(this.$video.volume * 100, this.$vthumb);
}

VideosPlayer.prototype.playing = function (e, f, g) {
    addClass(this.$element, 'playing');
}

VideosPlayer.prototype.ended = function (e, f, g) {
    removeClass(this.$element, 'playing');
}

VideosPlayer.prototype.pause = function (e, f, g) {
    removeClass(this.$element, 'playing');
}


// 

VideosPlayer.prototype.RemoveEvents = function (e) {
    this.$video.removeEventListener('timeupdate', this.timeupdate.bind(this));
    this.$video.removeEventListener('durationchange', this.durationchange.bind(this));
    this.$video.removeEventListener('volumechange', this.volumechange.bind(this));
    this.$video.removeEventListener('playing', this.playing.bind(this));
    this.$video.removeEventListener('ended', this.ended.bind(this));
    this.$video.removeEventListener('pause', this.pause.bind(this));
}

VideosPlayer.prototype.AddEvents = function (e) {
    this.$video.addEventListener('timeupdate', this.timeupdate.bind(this));
    this.$video.addEventListener('durationchange', this.durationchange.bind(this));
    this.$video.addEventListener('volumechange', this.volumechange.bind(this));
    this.$video.addEventListener('playing', this.playing.bind(this));
    this.$video.addEventListener('ended', this.ended.bind(this));
    this.$video.addEventListener('pause', this.pause.bind(this));
}

VideosPlayer.prototype.update = function (video) {
    this.$video = video;

    this.RemoveEvents();
    this.AddEvents();

    this.PositionThumb(this.$video.volume * 100, this.$vthumb);
    if (this.$video.duration !=  NaN) {
        this.PositionThumb(this.PercentualVideo(), this.$thumb);
    }

    // this.$video.addEventListener('canplay', this.canplay);
    // this.$video.addEventListener('canplaythrough', this.canplaythrough);
    // this.$video.addEventListener('durationchange', this.durationchange);
    // this.$video.addEventListener('ended', this.ended);
    // this.$video.addEventListener('loadeddata', this.loadeddata);
    // this.$video.addEventListener('loadedmetadata', this.loadedmetadata);
    // this.$video.addEventListener('loadstart', this.loadstart);
    // this.$video.addEventListener('pause', this.pause);
    // this.$video.addEventListener('play', this.play);
    // this.$video.addEventListener('playing', this.playing);
    // this.$video.addEventListener('progress', this.progress);
    // this.$video.addEventListener('seeked', this.seeked);
    // this.$video.addEventListener('seeking', this.seeking);
    // this.$video.addEventListener('timeupdate', this.timeupdate.bind(this));
    // this.$video.addEventListener('volumechange', this.volumechange);
    // this.$video.addEventListener('waiting', this.waiting);
}

VideosPlayer.prototype.set = function(video) {
  if(video) {
    this.update(video);
  }
};

