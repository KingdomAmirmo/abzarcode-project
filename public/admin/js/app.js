"use strict";

// Sidebar
$(".js-show-sidebar, .js-close-sidebar").on("click", function () {
  return $("aside.sidebar, .overlay").toggleClass("active");
}); // Overlay

$(".overlay").on("click", function () {
  return $("aside.sidebar, .overlay").removeClass("active");
}); // Help sidebar

$(".js-help-sidebar").on("click", function () {
  return $(".help-sidebar").toggleClass("active");
}); // Search

(function () {
  var search = $(".search-header"),
      input = search.find("input.form-control"),
      remove = search.find(".btn-remove"),
      search_show = $("header .search-item");
  search_show.on("click", function () {
    return search.addClass("visible");
  });
  input.on("keyup", function () {
    return search.addClass("active");
  });
  input.on("focus blur", function () {
    return search.toggleClass("focus");
  });
  remove.on("click", function () {
    input.val("");
    search.removeClass("active visible");
  });
})(); // Theme


(function () {
  $("#switch-theme-input").on("change", function () {
    if ($(this).prop("checked")) {
      $("body").addClass("dark");
      localStorage.setItem("darkMode", true);
    } else {
      $("body").removeClass("dark");
      localStorage.setItem("darkMode", false);
    }
  });
})(); // Dropdown


(function () {
  $(document).on("click", function (e) {
    var toggle_item = $(e.target).closest(".toggle-item"),
        toggle_head = $(e.target).closest(".toggle-head"),
        action_item = $(e.target).closest(".action-item"),
        action_head = $(e.target).closest(".action-head");

    if (action_item.length) {
      if (action_head.length && action_item.hasClass("active")) return action_item.removeClass("active");
      $(".action-item").removeClass("active");
      return action_item.toggleClass("active");
    }

    if (toggle_head.length && toggle_item.hasClass("active")) return toggle_item.removeClass("active");
    $(".toggle-item, .action-item").removeClass("active");
    toggle_item.toggleClass("active");
  });
})(); // nice-select


$(document).on("DOMContentLoaded", function () {
  $(".select").niceSelect();
  $(".nice-select.tabs .option").on("click", function () {
    var attr = $(this).attr("data-value");
    var tab = new bootstrap.Tab($("[data-bs-target='" + attr + "']"));
    tab.show();
  });
}); // Animate tabs
(function () {
  var overview = $(".js-animate-tabs"),
      tab = overview.find(".tab"),
      bg_tab = overview.find(".bg-tab-active");
  tab.on("click", function () {
    bg_tab.css("right", 100 / tab.length * $(this).index() + "%");
  });
})();

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
}); // Group checkbox

$("[data-group-checkbox]").on("click", function () {
  var state = $(this).prop("checked"),
      group = $(this).attr("data-group-checkbox");
  $("[data-item-checkbox=" + group + "]").prop("checked", state);
}); // Editor

$(document).on("DOMContentLoaded", function () {
  $(".editor").each(function (i) {
    var quill = new Quill($(".editor-container").get(i), {
      modules: {
        toolbar: {
          container: $(".editor-toolbar").get(i)
        }
      }
    });
  });
}); // Tags

$("[name=tags]").tagify(); // Datepicker

(function () {
  var dateRange = $(".js-date-range"),
      datepicker = $(".datepicker .action-item"),
      timeVal = datepicker.find(".datepicker-time"),
      timeTitle = datepicker.find(".datepicker-title"),
      timeItem = datepicker.find(".datepicker-time-list li"),
      closeDatepicker = datepicker.find(".datepicker-close");
  timeItem.on("click", function () {
    timeItem.removeClass("selected");
    $(this).addClass("selected");
    timeVal.val($(this)[0].textContent);
    timeTitle.text($(this)[0].textContent);
  });
  closeDatepicker.on("click", function (e) {
    e.stopPropagation();
    $(".datepicker .action-item").removeClass("active");
  });

  if (dateRange.length) {
    dateRange.each(function () {
      var _this = $(this),
          single = _this.data("single-month"),
          container = _this.data("container"),
          clear = $(".js-date-clear");

      _this.dateRangePicker({
        inline: true,
        autoClose: true,
        format: "DD MMMM, YYYY",
        separator: " - ",
        showShortcuts: false,
        container: container,
        singleDate: true,
        singleMonth: single,
        showTopbar: false,
        stickyMonths: true,
        hoveringTooltip: false,
        alwaysOpen: true,
        customArrowPrevSymbol: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M14.207 7.793a1 1 0 0 1 0 1.414L11.414 12l2.793 2.793a1 1 0 0 1-1.414 1.414l-3.5-3.5a1 1 0 0 1 0-1.414l3.5-3.5a1 1 0 0 1 1.414 0z" fill="#777e91"/></svg>',
        customArrowNextSymbol: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M9.793 7.793a1 1 0 0 0 0 1.414L12.586 12l-2.793 2.793a1 1 0 0 0 1.414 1.414l3.5-3.5a1 1 0 0 0 0-1.414l-3.5-3.5a1 1 0 0 0-1.414 0z" fill="#777e91"/></svg>',
        setValue: function setValue(s) {
          if ($(this).attr("readonly")) {
            $(this).val(s);
          } else {
            $(this).val(s);
          }
        }
      });

      _this.data("dateRangePicker").setStart("2022-01-20");

      clear.on("click", function () {
        _this.data("dateRangePicker").setStart(new Date());
      });
    });
  }
})(); // Modal product slider


$("#modal-product").on("shown.bs.modal", function () {
  var slider = $(".product-modal-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: false,
    speed: 500,
    responsive: [{
      breakpoint: 1023,
      settings: {
        slidesToShow: 2
      }
    }]
  });
  $(".slider-prev").on("click", function () {
    return slider.slick("slickPrev");
  });
  $(".slider-next").on("click", function () {
    return slider.slick("slickNext");
  });
});
$("#modal-product").on("hidden.bs.modal", function () {
  return $(".product-modal-slider").slick("unslick");
}); // Favorite

$(".btn-favorite").on("click", function () {
  $(this).toggleClass("active");
}); // Modal comments

$('[data-bs-target="#modal-tab-comments"]').on("shown.bs.tab hidden.bs.tab", function () {
  $("#modal-product .modal-dialog").toggleClass("comments-show");
});
$("#modal-tab-comments .modal-close").on("click", function () {
  return $('[data-bs-target="#modal-tab-product"]').trigger("click");
}); // Modal previous

$("[data-bs-toggle='modal']").on("click", function (e) {
  var prevModal = $(this).attr("data-bs-prev-modal");
  var nextModal = $(this).attr("data-bs-target");

  if (prevModal) {
    $(nextModal).find("button.close").removeAttr("data-bs-dismiss").attr({
      "data-bs-toggle": "modal",
      "data-bs-target": prevModal
    });
  } else {
    $(nextModal).find("button.close").attr("data-bs-dismiss", "modal");
  }
}); // Smilyes

(function () {
  var actions = $(".smileys-actions");
  actions.each(function (i, e) {
    var head = $(e).find(".smileys-head"),
        wrapper = $(e).closest(".smileys-wrapper");
    head.on("click", function () {
      return $(e).toggleClass("active");
    });
    wrapper.on("mouseleave", function () {
      return $(e).removeClass("active");
    });
  });
})(); // Range


(function () {
  var slider = $(".js-slider");

  if (slider.length) {
    slider.each(function () {
      var _this = $(this),
          min = _this.data("min"),
          max = _this.data("max"),
          start = _this.data("start"),
          end = _this.data("end"),
          step = _this.data("step"),
          tooltips = _this.data("tooltips"),
          prefix = _this.data("prefix");

      var optionStart = [start],
          optionConnect = [true, false],
          optionTooltips = false;

      if (end) {
        optionStart = [start, end];
        optionConnect = true;
      }

      if (tooltips) {
        optionTooltips = [true];

        if (end) {
          optionTooltips = [true, true];
        }
      }

      noUiSlider.create(_this[0], {
        start: optionStart,
        connect: optionConnect,
        step: step,
        tooltips: optionTooltips,
        range: {
          min: min,
          max: max
        },
        format: wNumb({
          decimals: 0,
          prefix: prefix
        })
      });
    });
  }
})(); // Customers list


(function () {
  var tabs = $(".customers-tabs"),
      item = tabs.find(".js-customer-show"),
      items = tabs.find(".sheet-row"),
      close = tabs.find("button.close");
  close.on("click", function () {
    return tabs.removeClass("customer-details-show");
  });
  item.on("click", function () {
    var wrapper_item = $(this).closest(".sheet-row");
    items.removeClass("active");
    wrapper_item.addClass("active");
    tabs.addClass("customer-details-show");
  });
})(); // Settings navigate


(function () {
  $(document).on("DOMContentLoaded", function () {
    var group = $(".settings-nav a");
    group.on("click", function (e) {
      group.removeClass("active");
      $(this).addClass("active");
    });
    $(".select-anchor .option").on("click", function () {
      var id = $(this).attr("data-value"),
          offset = $(id).offset().top;
      $("html, body").animate({
        scrollTop: offset
      }, 600);
    });
  });
})(); // Body transition


$(document).on("DOMContentLoaded", function () {
  $("body").addClass("transition");
}); // Message

(function () {
  var message_container = $(".message-block"),
      message_list = message_container.find(".message-list .item"),
      message_close = message_container.find(".message-close");
  message_list.on("click", function () {
    message_list.removeClass("active");
    $(this).addClass("active");
    message_container.addClass("active");
  });
  message_close.on("click", function () {
    return message_container.removeClass("active");
  });
})(); // Code


$(".input-code input").on("input", function () {
  $(this).next("input").focus();
}); // Sign up

$(".sign-up-entry .btn-entry").on("click", function () {
  $(".sign-up-entry").fadeOut(200, function () {
    return $(".sign-up-code").fadeIn(200);
  });
}); // Sidebar collapse

$("aside.sidebar .submenu").on("show.bs.collapse hide.bs.collapse", function () {
  var width = $(window).width(),
      sidebar = $("aside.sidebar");

  if (width < 1320 && !sidebar.hasClass("active")) {
    $("aside.sidebar, .overlay").toggleClass("active");
    $(this).collapse("show");
    return false;
  }
});