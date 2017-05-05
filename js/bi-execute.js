Pace.options = {
    restartOnRequestAfter: false
};

var $ = jQuery.noConflict();

jQuery(document).ready(function () {
    
    jQuery(document).ready(function () {

    var siteurl = WPURLS.siteurl;
$( ".js_active .post-body" ).wrap( "<div class='nav-container'></div>" );
        
    });


    // -------- Ajax --------   
    var BaianatAjaxify = (function ($) {
        var obj = {};
        var ajax = {
            detectUrl: function () {
                var url = this.attr('href');
                var patt = new RegExp("^#");
                var res = patt.test(url);
                if (url && url.length && !res) {
                    return url;
                }
                return undefined;
            },
            dispatch: function (props) {
                var request = $.get(props.url, props.data, props.callback);
            },
            parseRequest: function (data) {
                $('.site').html('').removeClass('full_opacity');
                $('.site').replaceWith(data);
                $('.site').addClass('full_opacity');
                $('.bi-main-overlay').removeClass('full_opacity').css('visibility', 'hidden');
            },
            ajaxify: function () {
                var getUrl = $.proxy(ajax.detectUrl, $(this));
                var url = getUrl();
                var isAjaxify = $(this).attr('data-ajaxify-url');
                if (typeof isAjaxify == "undefined") {
                    isAjaxify = "true";
                }
                if (isAjaxify == "true" && typeof url !== "undefined") {
                    if ($(this).attr('target') && $(this).attr('target') == '_blank') {
                        return true;
                    }
                    window.location.href = (url);
                    return false;
                }
            },
            attach: function () {
                //$('a').on('click', this.ajaxify);
                window.onpopstate = function (event) {
                    //window.location.assign(location.pathname);
                };
            }
        };

        ajax.attach();
        return obj;
    }(jQuery));


    Pace.on('done', function () {
        jQuery('body > :not(.pace)').css('opacity', 1);
    });
    jQuery('body > :not(.pace)');


//  

    jQuery("a:not([href^=#]):not([href^=mailto])[target!='_blank']:not([download])").click(function (event) {

        if (!jQuery(this).attr('data-ajaxify-url'))
        {
            if (jQuery(this).attr('href')) {

                if (!event.ctrlKey && !event.metaKey && !event.button) {
                    jQuery('body').css('opacity', 0);
                    BaianatAjaxify.ajaxify();
                    setTimeout(function () {
                        jQuery('body').css('opacity', 1);
                    }, 2000);
                } else
                {
                    return true;
                }
            } else {
                return false;
            }
        }


    });

    var whileAjax = false;
    

    var keyboardMap = [
        "", // [0]
        "", // [1]
        "", // [2]
        "CANCEL", // [3]
        "", // [4]
        "", // [5]
        "HELP", // [6]
        "", // [7]
        "BACK_SPACE", // [8]
        "TAB", // [9]
        "", // [10]
        "", // [11]
        "CLEAR", // [12]
        "ENTER", // [13]
        "ENTER_SPECIAL", // [14]
        "", // [15]
        "SHIFT", // [16]
        "CONTROL", // [17]
        "ALT", // [18]
        "PAUSE", // [19]
        "CAPS_LOCK", // [20]
        "KANA", // [21]
        "EISU", // [22]
        "JUNJA", // [23]
        "FINAL", // [24]
        "HANJA", // [25]
        "", // [26]
        "ESCAPE", // [27]
        "CONVERT", // [28]
        "NONCONVERT", // [29]
        "ACCEPT", // [30]
        "MODECHANGE", // [31]
        "SPACE", // [32]
        "PAGE_UP", // [33]
        "PAGE_DOWN", // [34]
        "END", // [35]
        "HOME", // [36]
        "LEFT", // [37]
        "UP", // [38]
        "RIGHT", // [39]
        "DOWN", // [40]
        "SELECT", // [41]
        "PRINT", // [42]
        "EXECUTE", // [43]
        "PRINTSCREEN", // [44]
        "INSERT", // [45]
        "DELETE", // [46]
        "", // [47]
        "COLON", // [58]
        "SEMICOLON", // [59]
        "LESS_THAN", // [60]
        "EQUALS", // [61]
        "GREATER_THAN", // [62]
        "QUESTION_MARK", // [63]
        "AT", // [64]
        "WIN", // [91]
        "", // [92]
        "CONTEXT_MENU", // [93]
        "", // [94]
        "SLEEP", // [95]
        "NUMPAD0", // [96]
        "NUMPAD1", // [97]
        "NUMPAD2", // [98]
        "NUMPAD3", // [99]
        "NUMPAD4", // [100]
        "NUMPAD5", // [101]
        "NUMPAD6", // [102]
        "NUMPAD7", // [103]
        "NUMPAD8", // [104]
        "NUMPAD9", // [105]
        "MULTIPLY", // [106]
        "ADD", // [107]
        "SEPARATOR", // [108]
        "SUBTRACT", // [109]
        "DECIMAL", // [110]
        "DIVIDE", // [111]
        "F1", // [112]
        "F2", // [113]
        "F3", // [114]
        "F4", // [115]
        "F5", // [116]
        "F6", // [117]
        "F7", // [118]
        "F8", // [119]
        "F9", // [120]
        "F10", // [121]
        "F11", // [122]
        "F12", // [123]
        "F13", // [124]
        "F14", // [125]
        "F15", // [126]
        "F16", // [127]
        "F17", // [128]
        "F18", // [129]
        "F19", // [130]
        "F20", // [131]
        "F21", // [132]
        "F22", // [133]
        "F23", // [134]
        "F24", // [135]
        "", // [136]
        "", // [137]
        "", // [138]
        "", // [139]
        "", // [140]
        "", // [141]
        "", // [142]
        "", // [143]
        "NUM_LOCK", // [144]
        "SCROLL_LOCK", // [145]
        "WIN_OEM_FJ_JISHO", // [146]
        "WIN_OEM_FJ_MASSHOU", // [147]
        "WIN_OEM_FJ_TOUROKU", // [148]
        "WIN_OEM_FJ_LOYA", // [149]
        "WIN_OEM_FJ_ROYA", // [150]
        "", // [151]
        "", // [152]
        "", // [153]
        "", // [154]
        "", // [155]
        "", // [156]
        "", // [157]
        "", // [158]
        "", // [159]
        "CIRCUMFLEX", // [160]
        "EXCLAMATION", // [161]
        "DOUBLE_QUOTE", // [162]
        "HASH", // [163]
        "DOLLAR", // [164]
        "PERCENT", // [165]
        "AMPERSAND", // [166]
        "UNDERSCORE", // [167]
        "OPEN_PAREN", // [168]
        "CLOSE_PAREN", // [169]
        "ASTERISK", // [170]
        "PLUS", // [171]
        "PIPE", // [172]
        "HYPHEN_MINUS", // [173]
        "OPEN_CURLY_BRACKET", // [174]
        "CLOSE_CURLY_BRACKET", // [175]
        "TILDE", // [176]
        "", // [177]
        "", // [178]
        "", // [179]
        "", // [180]
        "VOLUME_MUTE", // [181]
        "VOLUME_DOWN", // [182]
        "VOLUME_UP", // [183]
        "", // [184]
        "", // [185]
        "SEMICOLON", // [186]
        "EQUALS", // [187]
        "COMMA", // [188]
        "MINUS", // [189]
        "PERIOD", // [190]
        "SLASH", // [191]
        "BACK_QUOTE", // [192]
        "", // [193]
        "", // [194]
        "", // [195]
        "", // [196]
        "", // [197]
        "", // [198]
        "", // [199]
        "", // [200]
        "", // [201]
        "", // [202]
        "", // [203]
        "", // [204]
        "", // [205]
        "", // [206]
        "", // [207]
        "", // [208]
        "", // [209]
        "", // [210]
        "", // [211]
        "", // [212]
        "", // [213]
        "", // [214]
        "", // [215]
        "", // [216]
        "", // [217]
        "", // [218]
        "OPEN_BRACKET", // [219]
        "BACK_SLASH", // [220]
        "CLOSE_BRACKET", // [221]
        "QUOTE", // [222]
        "", // [223]
        "META", // [224]
        "ALTGR", // [225]
        "", // [226]
        "WIN_ICO_HELP", // [227]
        "WIN_ICO_00", // [228]
        "", // [229]
        "WIN_ICO_CLEAR", // [230]
        "", // [231]
        "", // [232]
        "WIN_OEM_RESET", // [233]
        "WIN_OEM_JUMP", // [234]
        "WIN_OEM_PA1", // [235]
        "WIN_OEM_PA2", // [236]
        "WIN_OEM_PA3", // [237]
        "WIN_OEM_WSCTRL", // [238]
        "WIN_OEM_CUSEL", // [239]
        "WIN_OEM_ATTN", // [240]
        "WIN_OEM_FINISH", // [241]
        "WIN_OEM_COPY", // [242]
        "WIN_OEM_AUTO", // [243]
        "WIN_OEM_ENLW", // [244]
        "WIN_OEM_BACKTAB", // [245]
        "ATTN", // [246]
        "CRSEL", // [247]
        "EXSEL", // [248]
        "EREOF", // [249]
        "PLAY", // [250]
        "ZOOM", // [251]
        "", // [252]
        "PA1", // [253]
        "WIN_OEM_CLEAR", // [254]
        "", // [255]
        "ArrowUp",
        "ArrowDown",
        "ArrowRight",
        "ArrowLeft",
        "Delete",
        "End",
        "PageDown",
        "PageUp",
        "Home",
        "Insert"
    ];


});
   
