// --- 共通関数 -----------------------------------------------

// load判定関数（PC,SP共通処理）
function loadedPageFunc() {
  $("body").addClass("loaded");
}

//cookieによる分岐
function addCookieFunc() {
  // 1時間cookie残す
  date = new Date();
  date.setTime(date.getTime() + 60 * 60 * 1000);
  if ($.cookie("watch")) {
    //cookieある場合
  } else {
    //cookieない場合
    $.cookie("watch", "1 hours", { expires: date });
  }
}

//SP、タブレット時.telにclass付与
function AddNoLink() {
  if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)) {
    $(".tel").removeClass("no_link");
  } else {
    $(".tel").addClass("no_link");
  }
}

//ua判定
function uajudge() {
  var ua = navigator.userAgent.toLowerCase();
  var ver = navigator.appVersion.toLowerCase();
  // IE(11以外)
  var isMSIE = ua.indexOf("msie") > -1 && ua.indexOf("opera") == -1;
  // IE6
  var isIE6 = isMSIE && ver.indexOf("msie 6.") > -1;
  // IE7
  var isIE7 = isMSIE && ver.indexOf("msie 7.") > -1;
  // IE8
  var isIE8 = isMSIE && ver.indexOf("msie 8.") > -1;
  // IE9
  var isIE9 = isMSIE && ver.indexOf("msie 9.") > -1;
  // IE10
  var isIE10 = isMSIE && ver.indexOf("msie 10.") > -1;
  // IE11
  var isIE11 = ua.indexOf("trident/7") > -1;
  // IE
  var isIE = isMSIE || isIE11;
  // Edge
  var isEdge = ua.indexOf("edge") > -1;
  // Google Chrome
  var isChrome = ua.indexOf("chrome") > -1 && ua.indexOf("edge") == -1;
  // Firefox
  var isFirefox = ua.indexOf("firefox") > -1;
  // Safari
  var isSafari = ua.indexOf("safari") > -1 && ua.indexOf("chrome") == -1;
  // Opera
  var isOpera = ua.indexOf("opera") > -1;
  $(function () {
    if (isOpera) {
      //オペラならつけるクラス
      $("body").addClass("js_isOpera");
    } else if (isIE) {
      //IEならつけるクラス
      $("body").addClass("js_isIe");
    } else if (isChrome) {
      //Chromeならつけるクラス
      $("body").addClass("js_isChrome");
    } else if (isSafari) {
      //Safariならつけるクラス
      $("body").addClass("js_isSafari");
    } else if (isEdge) {
      //Edgeならつけるクラス
      $("body").addClass("js_isEdge");
    } else if (isFirefox) {
      //Firefoxならつけるクラス
      $("body").addClass("js_isFirefox");
    } else {
      return false;
    }
    if (!isIE) {
      //オペラならつけるクラス
      $("body").addClass("js_isnotIE");
    }
  });
  //デバイス判定
  var _ua = (function (u) {
    return {
      Tablet:
        (u.indexOf("windows") != -1 &&
          u.indexOf("touch") != -1 &&
          u.indexOf("tablet pc") == -1) ||
        u.indexOf("ipad") != -1 ||
        (u.indexOf("android") != -1 && u.indexOf("mobile") == -1) ||
        (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1) ||
        u.indexOf("kindle") != -1 ||
        u.indexOf("silk") != -1 ||
        u.indexOf("playbook") != -1,
      Mobile:
        (u.indexOf("windows") != -1 && u.indexOf("phone") != -1) ||
        u.indexOf("iphone") != -1 ||
        u.indexOf("ipod") != -1 ||
        (u.indexOf("android") != -1 && u.indexOf("mobile") != -1) ||
        (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1) ||
        u.indexOf("blackberry") != -1,
    };
  })(window.navigator.userAgent.toLowerCase());
  $(function () {
    if (_ua.Mobile) {
      //スマホならつけるクラス
      $("body").addClass("js_isMobile");
    } else if (_ua.Tablet) {
      //タブレットならつけるクラス
      $("body").addClass("js_isTablet");
    } else {
      //スマホ・タブレット以外ならつけるクラス
      $("body").addClass("js_isPc");
    }
  });
  if (navigator.platform.indexOf("Win") != -1) {
    //Windowsならつけるクラス
    $("body").addClass("js_isWin");
  } else {
    //Windows以外ならつけるクラス
    $("body").addClass("js_isNotWin");
  }
  $(function () {
    if (ua.indexOf("iphone") > 0) {
      //iPhoneならつけるクラス
      $("body").addClass("iphone");
    } else if (ua.indexOf("android") > 0 && ua.indexOf("mobile") > 0) {
      //Andoroidのスマホならつけるクラス
      $("body").addClass("android");
    } else if (ua.indexOf("ipad") > 0) {
      //iPadならつけるクラス
      $("body").addClass("ipad");
    }
  });
}

//page top関数（PC,SP共通処理）
function goToPageTopFunc() {
  $("#pageTop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 900, "swing");
    return false;
  });
}

//タブ処理
function tabContentFunc() {
  $(".tab li").on("click", function () {
    index = $(".tab li").index(this);
    $(".tab li").removeClass("active");
    $(".tab li").eq(index).addClass("active");
    $(".tab_block").removeClass("active");
    $(".tab_block").eq(index).addClass("active");
  });
}

// アコーディオン処理
// （dl > dt dd dt dd...を想定　<dt class="ac_trigger">をクリックした時にddをアコーディオン処理）
function showAccordionFunc() {
  var acTrigger = $(".ac_trigger");
  // 常に一つだけの処理
  // acTrigger.click(function () {
  // 	if ($(this).hasClass('show')) {
  // 		$(this).removeClass('show').next('dd').slideUp();
  // 	} else {
  // 		$(".ac_trigger").removeClass('show');
  // 		$('dd').slideUp();
  // 		$(this).addClass('show').next('dd').slideDown();
  // 	}
  // });

  // 全部開く
  acTrigger.click(function () {
    if ($(this).hasClass("show")) {
      $(this).removeClass("show").next("dd").slideUp();
    } else {
      $(this).addClass("show").next("dd").slideDown();
    }
  });
}

//表示アニメーション
function scrollAnimFunc() {
  $(window).on("scroll", function () {
    $(".anim, .fade_y, .svg_anim, .scr_cvr").each(function () {
      scr = $(window).scrollTop();
      winHeight = $(window).height();
      action = $(this).offset().top;
      if (scr > action - winHeight + winHeight / 4) {
        $(this).addClass("on");
      }
    });
  });
}

//SP triggerクリックでメニュー展開
function spMenuOpenFunc() {
  $(".trigger").click(function () {
    if ($(this).hasClass("close")) {
      $(".menu").removeClass("on");
      $(this).removeClass("close");
    } else {
      $(".menu").addClass("on");
      $(this).addClass("close");
    }
  });
}

//SP menu展開時に背景固定
function spBodyFixedFunc() {
  var w = $(window).width();
  if (w < 896) {
    var state = false;
    var scrollpos = "";
    $(".trigger").on("click", function () {
      if (state == false) {
        scrollpos = $(window).scrollTop();
        $("body").addClass("sp_fix").css({
          top: -scrollpos,
        });
        state = true;
      } else {
        $("body").removeClass("sp_fix").css({ top: 0 });
        window.scrollTo(0, scrollpos);
        state = false;
      }
    });
    $(".close").on("click", function () {
      $("body").removeClass("sp_fix").css({ top: 0 });
      window.scrollTo(0, scrollpos);
      state = false;
    });
  }
}

//ヘッダーにfv以降までスクロールで何らかの処理
function headerAddEventFunc() {
  if ($(".firstview").length) {
    $(window).on("scroll", function () {
      scr = $(window).scrollTop();
      firstview = $(".firstview").offset().top;
      winHeight = $(window).height();
      if (scr > firstview + winHeight) {
        $(".header").addClass("on");
      } else {
        $(".header").removeClass("on");
      }
    });
  }
}

function factoryPopup(){
  $('.js-popup-movie').on('click',function(){
    $(this).next().addClass('open');
    $('.virtual__overlay').fadeIn();
  });
}

function factoryPopupClose(){
  $('.js-popup-color').on('click',function(){
    $(this).parent().removeClass('open');
    $('.virtual__overlay').fadeOut();
  });
}

function scrollBusiness(){
  if($('.business__mvchild').length){
    $(window).on("scroll", function () {
      scr = $(window).scrollTop();
      triggerWin = $(window).height()/2;
      if (scr > triggerWin) {
        $(".business__mvchild").addClass("bulr");
      } else {
        $(".business__mvchild").removeClass("bulr");
      }
    });
  }
}

//header ホバーでメガドロップ
function menuShowDelay(element, delayTime) {
  var sethover;
  var setleave;
  var setnexthover;
  var targetOn;
  var targetOff;
  var nowActive = -1;
  var hoverClass = "hover";
  var manuElement = element;
  var hoverTime = delayTime;

  manuElement.on({
    mouseover: function () {
      $(".header").addClass("no_mix");
      targetOn = $(this);
      if (nowActive === -1) {
        sethover = setTimeout(function () {
          targetOn.addClass(hoverClass);
          targetOn.find(".nav--area--under").fadeIn();
          $(".overlay").fadeIn();
          nowActive = manuElement.index(targetOn);
        }, hoverTime);
      } else {
        if (targetOn.hasClass(hoverClass)) {
          clearTimeout(setleave);
        } else {
          setnexthover = setTimeout(function () {
            manuElement.removeClass(hoverClass);
            manuElement.find(".nav--area--under").fadeOut();
            $(".overlay").fadeOut();
            targetOn.addClass(hoverClass);
            targetOn.find(".nav--area--under").fadeIn();
            $(".overlay").fadeIn();
            nowActive = manuElement.index(targetOn);
          }, hoverTime);
        }
      }
    },
    mouseout: function () {
      $(".header").removeClass("no_mix");
      targetOff = $(this);
      clearTimeout(sethover);
      function mouseIsOverWorkaround(what) {
        var temp = $(what).parent().find(":hover");
        return temp.length == 1 && temp[0] == what;
      }
      var parent = targetOff;
      if (mouseIsOverWorkaround(parent[0])) {
        if (targetOff.hasClass(hoverClass)) {
          clearTimeout(setnexthover);
        }
      } else {
        setleave = setTimeout(function () {
          targetOff.removeClass(hoverClass);
          targetOff.find(".nav--area--under").fadeOut();
          $(".overlay").fadeOut();
          nowActive = -1;
        }, hoverTime);
      }
    },
  });
}

// クリックするとトップへスクロール
$(function () {
  $('a[href^="#"]').click(function () {
    let speed = 1;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = $(".quality_items").offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

$(function () {
  $('a[href^="#1"]').click(function () {
    let speed = 1;
    let href = $(this).attr("href");
    let target = $(href == "#1" || href == "" ? "html" : href);
    let position = $(".factory_quality_retort").offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

// --- 関数実行 -----------------------------------------------

//ページの全データを読み込み後
$(window).on("load", function () {
  loadedPageFunc();
  AddNoLink();
  //   var w = $(window).width();
  //   var x = 896;
  //   if (w > x) {
  //     $(function () {
  //       menuShowDelay($(".modal"), 0);
  //     });
  //   } else {
  //     $(".modal").off("mouseenter mouseleave");
  //   }
});

//リサイズが走った場合
$(window).on("resize", function () {});

//DOM生成後
$(function () {
  //******************
  // 共通処理
  //******************

  goToPageTopFunc();
  tabContentFunc();
  scrollAnimFunc();
  spMenuOpenFunc();
  spBodyFixedFunc();
  headerAddEventFunc();
  showAccordionFunc();
  factoryPopup();
  factoryPopupClose();
  scrollBusiness();

  //****************************
  // その他は要素の有無で個別で実装
  //****************************
  if ($(".top").length) {
    $(window).on("scroll", function () {
      scr = $(window).scrollTop();
      firstview = $(".firstview").offset().top;
      winHeight = $(window).height();
      if (scr > firstview + winHeight / 3) {
        $(".rice_bg, .rice").addClass("blur");
      } else {
        $(".rice_bg, .rice").removeClass("blur");
      }
    });
    $(".blog_tab li").on("click", function () {
      index = $(".blog_tab li").index(this);
      $(".blog_tab li").removeClass("active");
      $(".blog_tab li").eq(index).addClass("active");
      $(".blog_tab_block").removeClass("active");
      $(".blog_tab_block").eq(index).addClass("active");
    });
    if ($(".ticker").length) {
      var $setElm = $(".ticker");
      var effectSpeed = 1000;
      var switchDelay = 6000;
      var easing = "swing";

      $setElm.each(function () {
        var effectFilter = $(this).attr("rel"); // 'fade' or 'roll' or 'slide'

        var $targetObj = $(this);
        var $targetUl = $targetObj.children("ul");
        var $targetLi = $targetObj.find("li");
        var $setList = $targetObj.find("li:first");

        var ulWidth = $targetUl.width();
        var listHeight = $targetLi.height();
        $targetObj.css({ height: listHeight });
        $targetLi.css({ top: "0", left: "0", position: "absolute" });

        var liCont = $targetLi.length;

        if (effectFilter == "fade") {
          $setList
            .css({ display: "block", opacity: "0", zIndex: "98" })
            .stop()
            .animate({ opacity: "1" }, effectSpeed, easing)
            .addClass("showlist");
          if (liCont > 1) {
            setInterval(function () {
              var $activeShow = $targetObj.find(".showlist");
              $activeShow.animate(
                { opacity: "0" },
                effectSpeed,
                easing,
                function () {
                  $(this)
                    .next()
                    .css({ display: "block", opacity: "0", zIndex: "99" })
                    .animate({ opacity: "1" }, effectSpeed, easing)
                    .addClass("showlist")
                    .end()
                    .appendTo($targetUl)
                    .css({ display: "none", zIndex: "98" })
                    .removeClass("showlist");
                }
              );
            }, switchDelay);
          }
        } else if (effectFilter == "roll") {
          $setList
            .css({ top: "3em", display: "block", opacity: "0", zIndex: "98" })
            .stop()
            .animate({ top: "0", opacity: "1" }, effectSpeed, easing)
            .addClass("showlist");
          if (liCont > 1) {
            setInterval(function () {
              var $activeShow = $targetObj.find(".showlist");
              $activeShow
                .animate({ top: "-3em", opacity: "0" }, effectSpeed, easing)
                .next()
                .css({
                  top: "3em",
                  display: "block",
                  opacity: "0",
                  zIndex: "99",
                })
                .animate({ top: "0", opacity: "1" }, effectSpeed, easing)
                .addClass("showlist")
                .end()
                .appendTo($targetUl)
                .css({ zIndex: "98" })
                .removeClass("showlist");
            }, switchDelay);
          }
        } else if (effectFilter == "slide") {
          $setList
            .css({
              left: ulWidth,
              display: "block",
              opacity: "0",
              zIndex: "98",
            })
            .stop()
            .animate({ left: "0", opacity: "1" }, effectSpeed, easing)
            .addClass("showlist");
          if (liCont > 1) {
            setInterval(function () {
              var $activeShow = $targetObj.find(".showlist");
              $activeShow
                .animate({ left: -ulWidth, opacity: "0" }, effectSpeed, easing)
                .next()
                .css({
                  left: ulWidth,
                  display: "block",
                  opacity: "0",
                  zIndex: "99",
                })
                .animate({ left: "0", opacity: "1" }, effectSpeed, easing)
                .addClass("showlist")
                .end()
                .appendTo($targetUl)
                .css({ zIndex: "98" })
                .removeClass("showlist");
            }, switchDelay);
          }
        }
      });
    }
  }
});

// --- tips -----------------------------------------------

//****************************
//背景が白のエリアでなんかする
//****************************

// if ($('.wht_area').length) {
// 	$(window).on('scroll', function () {
// 		whtArea = $('.wht_area').offset().top;
// 		whtHeight = $('.wht_area').outerHeight();
// 		whtBottom = whtArea + whtHeight;
// 		scr = $(window).scrollTop();
// 		if (scr < whtArea) {
// 			$(".header").removeClass("wht");
// 		} else if (scr > whtArea && scr < whtBottom) {
// 			$(".header").addClass("wht");
// 			$(".header").addClass("wht");
// 		} else if (scr > whtBottom) {
// 			$(".header").removeClass("wht");
// 		}
// 	});
// }

//****************************
//スクロール途中で全画面の背景固定
//****************************

// $(window).on('scroll', function () {
// 	scr = $(window).scrollTop();
// 	wrap = $('.fix_bg_wrap').offset().top;
// 	wrapHeight = $('.fix_bg_wrap').outerHeight();
// 	winHeight = $(window).outerHeight();

// 	if (scr > wrap + wrapHeight - winHeight) {
// 		$('.fix_bg').removeClass('fixed');
// 		$('.fix_bg').addClass('bottom');
// 	} else if (scr > wrap) {
// 		$('.fix_bg').addClass('fixed');
// 		$('.fix_bg').removeClass('bottom');
// 	} else if (scr < wrap) {
// 		$('.fix_bg').removeClass('fixed');
// 	}
// });

//****************************
//slickの基本処理（レスポンシブ）
//****************************

if($('.facility_slider').length){
    $('.facility_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 3000,
    arrows: true,
    //個別でarrowを追加
    prevArrow: '<div class="slick-prev slick-arrow ablt"><img src="../asset/img/....." alt=""></div>',
    nextArrow: '<div class="slick-next slick-arrow ablt"><img src="../asset/img/....." alt=""></div>',
    // responsive: [
    //   {
    //     breakpoint: 896,
    //     settings: {
    //       slidesToShow: 1,
    //       centerMode: true
    //     }
    //   }
    // ]
  });
}



//****************************
//自動で流れるカルーセルスライダー
//****************************

// $('#carousel_slider').slick({
// 	arrows: false,
// 	autoplay: true,
// 	autoplaySpeed: 0,
// 	cssEase: 'linear',
// 	speed: 15000,
// 	slidesToShow: 3,
// 	slidesToScroll: 1,
// 	responsive: [
// 		{
// 			breakpoint: 896,
// 			settings: {
// 				slidesToShow: 2
// 			}
// 		}
// 	]
// });

//****************************
//スライドが動くのに連携して処理する
//****************************

// var slider = "#slider"; // スライダー
// var thumb = "#thumb_item"; // サムネイル画像アイテム

// // サムネイル画像アイテムに data-index でindex番号を付与
// $(thumb).each(function () {
// 	var index = $(thumb).index(this);
// 	$(this).attr("data-index", index);
// });

// // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
// // 「slickスライダー作成」の前にこの記述は書いてください。
// $(slider).on('init', function (slick) {
// 	var index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
// 	$(thumb + '[data-index="' + index + '"]').addClass("thumb_current");
// });
// //slickスライダー初期化
// $(slider).slick({
// 	autoplay: true,
// 	arrows: false,
// 	fade: true,
// 	infinite: true
// });
// //サムネイル画像のカレントを切り替え
// $(slider).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
// 	$(thumb).each(function () {
// 		$(this).removeClass("thumb_current");
// 	});
// 	$(thumb + '[data-index="' + nextSlide + '"]').addClass("thumb_current");
// });

//****************************
//modal_openクリックでYouTubeポップアップ
//****************************

// $(".modal_open").on("click", function () {
//   $("#videoframe").attr("src", "youtubeURL");
//   $(".modal-overlay").fadeIn("slow");
//   posCenter();
//   $(window).on("resize", function () {
//     posCenter();
//   });
//   function posCenter() {
//     var w = $(window).width();
//     var h = $(window).height();
//     var ow = $(".modal-panel").outerWidth();
//     var oh = $(".modal-panel").outerHeight();
//     $(".modal-panel").css({
//       left: (w - ow) / 2 + "px",
//       top: (h - oh) / 2 + "px",
//     });
//   }
//   $(".modal-close, .modal-overlay").on("click", function () {
//     $(".modal-overlay").fadeOut("slow");
//     $("#videoframe").attr("src", "");
//   });
// });

//****************************
//$count要素のカウントアップを開始する
//****************************

// function CountUp($count) {
// 	var countMax = $count.attr('data-num');
// 	var countNext = 0;
// 	var countTimer;
// 	function timer() {
// 		countTimer = setInterval(function () {
// 			if (countNext < countMax) {
// 				countNext = countNext + Math.round((countMax - countNext) / 2);
// 				$count.text(countNext);
// 			} else if (countNext == countMax) {
// 				clearInterval(countTimer);
// 			}
// 		}, 40);
// 	}
// 	timer();
// }
// function detectCountElement($counts) {
// 	$.each($counts, function (i, countElement) {
// 		var $count = $(countElement);
// 		if ($count.attr("data-isLaunched")) {
// 			return;
// 		}
// 		var $window = $(window);
// 		var scr = $window.scrollTop();
// 		var winHeight = $window.innerHeight();
// 		var offset = $count.offset().top;
// 		if (scr > offset - winHeight + winHeight / 4) {
// 			CountUp($count);
// 			$count.attr("data-isLaunched", true);
// 		}
// 	});
// }
// $(function () {
// 	var $counts = $(".count");
// 	detectCountElement($counts);
// 	$(window).scroll(detectCountElement.bind(window, $counts));
// });

//****************************
//マウス追従
//****************************

//ie以外
// var userAgent = window.navigator.userAgent.toLowerCase();
// if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || userAgent.indexOf('msie') != -1 || userAgent.indexOf('edge') != -1 || userAgent.indexOf('trident/7') != -1) {
// 	$('#pointer').remove();
// } else {
// 	//特定の要素にマウスオーバーで何らかの処理
// 	$('').mouseenter(function () {
// 		$('#pointer').addClass("hvr");
// 	}).mouseleave(function () {
// 		$('#pointer').removeClass("hvr");
// 	});
// 	//追従処理
// 	var xMousePos = 0;
// 	var yMousePos = 0;
// 	$(window).on('mousemove', function (event) {
// 		xMousePos = event.clientX;
// 		yMousePos = event.clientY;
// 	});
// 	window.requestAnimationFrame(function PointerMove() {
// 		$("#pointer").css('transform', 'matrix(1, 0, 0, 1, ' + xMousePos + ',  ' + yMousePos + ')');
// 		window.requestAnimationFrame(PointerMove);
// 	});
// }
// window.onpageshow = function (event) {
// 	if (event.persisted) {
// 		window.location.reload();
// 	}
// };

// #pointer{
// 	//カーソル位置を合わす
// 	margin-top:-10px;
// 	margin-left:-10px;
// 	position:fixed;
// 	top:0;
// 	left:0;
// 	z-index: 9998;
// 	pointer-events:none;
// 	transform-origin: center center;
// 	transition: all 0.15s ease-out;
// }

//****************************
//スクロールで画像パララックス
//****************************

// $(window).on('scroll', function () {
// 	scr = $(window).scrollTop();
// 	winhig = $(window).outerHeight();
// 	var bgPosition = scr / 250;
// 	//画像自体
// 	if (bgPosition) {
// 		$('').css('transform', 'translateX(' + bgPosition + '%)');
// 		$('').css('transform', 'translateX(-' + bgPosition + '%)');
// 		$('').css('transform', 'translateY(' + bgPosition + '%)');
// 		$('').css('transform', 'translateY(-' + bgPosition + '%)');
// 	}
// 	//背景画像
// 	if (bgPosition) {
// 		$('').css('background-position', + bgPosition + 'px');
// 		$('').css('background-position', '-' + bgPosition + 'px');
// 	}
// });

// .para_wrap {
//   overflow: hidden;
//   height: 100%;
//   .para_box {
//     width: 130%;
//     transition: ease;
//     transform: translateX(0%);
//     transform: translateY(0%);
//   }
// }
