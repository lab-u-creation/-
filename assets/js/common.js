$(function() {

    const pageAppendArea = '#page-append';
    const chatbotWrap = '#chatbot-wrap';
    const chatbotArea = '#chatbot-contents';
    const chatbotLoading = '#chatbot-loading';

    //AJAXデータ呼び出し
    const ajaxDataLoad = function(url, params = "") {
        return $.ajax({
            type: "GET",
            url: url + params,
            dataType: "html",
            cache: false
        });
    }

    //MAP呼び出し
    const mapdataLoad = function() {
        let ajaxUrl = '/assets/img/saijo/map-min.svg';
        let ajaxParm = '';
        if ($('#map').hasClass('is-active')) {
            return;
        } else {
            ajaxDataLoad(ajaxUrl, ajaxParm).done(function(data) {
                $('#map').empty().append(data).addClass('is-active');
            }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
                alert('エラーが発生しました');
            });
        }
    }

    //Chatbot呼び出し
    const chatbotLoad = function(ajaxUrl, ajaxParm) {
        let h = $(chatbotArea).height();
        return ajaxDataLoad(ajaxUrl, ajaxParm).done(function(data) {
            $(chatbotArea).append(data).addClass('is-active');
            $(chatbotLoading).removeClass('is-active');
            $(chatbotWrap).delay(100).animate({
                scrollTop: h
            }, {
                duration: 250,
                easing: 'swing',
                complete: function() {
                    $(chatbotArea).find('[data-animation]').each(function() {
                        $(this).addClass('is-trans-active');
                    });
                }
            });
        }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
            $(chatbotArea).append('<p>エラーが発生しました</p>');
        });
    }

    //Chatbot・・・'[data-chatbotStart]クリック時の挙動
    $('[data-chatbot-start]').click(function() {
        let modalId = '#modal-chatbot';
        let ajaxUrl = $(this).data('chatbot-start');
        let ajaxParm = '?id=p';
        ajaxDataLoad(ajaxUrl, ajaxParm).done(function(data) {
            $(pageAppendArea).empty().append(data);
            $(chatbotLoading).addClass('is-active');
            return chatbotLoad('/chatbot/', '?id=p');
        }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
            alert('エラーが発生しました');
        });
    });

    //Chatbot・・・[data-select]クリック時の挙動
    $(pageAppendArea).on('click', '[data-select]', function() {
        let dispId = $(this).data('select');
        let ajaxUrl = '/chatbot/';
        let ajaxParm = '?id=' + dispId;
        let h = $(chatbotArea).height() + $(chatbotLoading).height();
        $(chatbotArea).removeClass('is-active');
        $(chatbotLoading).addClass('is-active');
        setTimeout(function() {
            $(chatbotWrap).animate({ scrollTop: h }, function() {
                return chatbotLoad(ajaxUrl, ajaxParm);
            });
        }, 250);
    });

    //ファーストビュー時に特殊な挙動
    const firstView = function(scrolltop) {
        let windowHeight = 200;
        $('[data-disp="firstview"]').each(function() {
            if (scrolltop < windowHeight) {
                return $(this).addClass("is-firstview");
            } else {
                return $(this).removeClass("is-firstview");
            }
        });
    }

    //メガメニュー
    const megaMenu = function(targetId) {
        const megamenu = '[data-megamenu]';
        const megamenuOpen = '[data-megamenu-open]';
        const isDisp = 'is-disp';
        $(targetId).find(megamenuOpen).on('mouseover', function() {
            $(targetId).find(megamenu).addClass(isDisp);
        });
        $(targetId).on('mouseleave', function() {
            $(targetId).find(megamenu).removeClass(isDisp);
        });
    }

    //アニメーション
    const animation = function(scrolltop) {
        $('[data-animation]').each(function() {
            let $this = $(this);
            let elemPos = $this.offset().top;
            let windowHeight = $(window).height();
            if (scrolltop > elemPos - windowHeight + 200 && scrolltop < elemPos + windowHeight + 200) {
                if ($this.data("animation") == "parent") {
                    $this.find('[data-animation="child"]').each(function() {
                        $(this).addClass('is-trans-active');
                    });
                } else {
                    $(this).addClass('is-trans-active');
                }
            }
        });
    }

    //スムーススクロール
    const smoothscroll = function() {
        let header_height = 100;
        if ($('#page-header').length) {
            header_height = $('#page-header').height();
        }
        $('a[href^="#"]').not('a[role="tab"]').not('a[data-toggle]').click(function() {
            let href = $(this).attr("href");
            let target = $(href == "#" || href == "" ? 'html' : href);
            let target_top = target.offset().top;
            let position = target_top - header_height;
            let speed = 400;
            $("html, body").animate({
                scrollTop: position
            }, speed, "swing");
            return;
        });
        $(window).resize(function() {
            if ($('#page-header').length) {
                header_height = $('#page-header').height();
            }
        });
    }

    //地図データ読み込み
    const saijoMapLoad = function() {
        const errMsg = 'データの取得に失敗しました';
        const target = '[data-saijomap]';
        const ajaxUrl = '/assets/img/saijo/map.svg';
        const addClassName = 'bg-white';
        const loadTime = 250;
        const loadStartWidth = 992;
        const loadCompleteFlag = $(target).data('saijomap');
        let windowWidth = $(window).width();
        if (loadCompleteFlag == false) {
            if (windowWidth >= loadStartWidth) {
                ajaxDataLoad(ajaxUrl).done(function(data) {
                    setTimeout(function() {
                        $(target).addClass(addClassName).empty().append(data);
                        $(target).data('saijomap', 'true');
                        console.log($(target).data('saijomap'));
                    }, loadTime);
                }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
                    $(target).empty().append(errMsg);
                });
            }
        }
    }

    //imagesLoaded
    $('[data-keyvisual]').imagesLoaded(function() {
        $('.keyvisual-cover').addClass('is-active');
    });

    $('[data-imagesloaded]').imagesLoaded({
        background: true
    }, function() {
        $('.trans').addClass('is-trans-active');
    });

    //appendArea
    $(pageAppendArea).on('click', '[data-empty]', function() {
        let target = $(this).data('empty');
        $(target).empty();
    });

    //gnav
    $('#gnav').find('a').click(function() {
        $('#gnav').removeClass('show');
    });

    //Accordion(data-echo)
    $('[data-toggle="collapse"],[data-toggle="tab"]').click(function() {
        scrollBy(0, 1);
        scrollBy(0, -1);
    });

    //Default
    let timer = false;
    let scrolltop = $(window).scrollTop();
    firstView(scrolltop);
    animation(scrolltop);
    saijoMapLoad();
    megaMenu('#gnav-plan');
    smoothscroll();
    $(window).scroll(function() {
        scrolltop = $(window).scrollTop();
        if (timer !== false) {
            clearTimeout(timer);
        }
        timer = setTimeout(function() {
            animation(scrolltop);
            firstView(scrolltop);
        }, 200);
    });
    $(window).resize(function() {
        saijoMapLoad();
    });
});

echo.init({
    offsetVertical: 250,
    offsetHorizontal: 2000,
    callback: function(element, op) {
        element.classList.add('is-trans-active')
    }
});

function map(city) {
    window.location.href = '/saijo/area/東京都' + city;
}

$(function() {
    $('tr[data-href]').on('click', function() {
        location.href = $(this).data('href');
    });
});