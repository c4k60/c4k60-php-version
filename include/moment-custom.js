! function(t, e) {
    "object" == typeof exports && "undefined" != typeof module && "function" == typeof require ? e(require("../moment")) : "function" == typeof define && define.amd ? define(["../moment"], e) : e(t.moment)
}(this, function(t) {
    "use strict";
    return t.defineLocale("vi", {
        months: "tháng 1_tháng 2_tháng 3_tháng 4_tháng 5_tháng 6_tháng 7_tháng 8_tháng 9_tháng 10_tháng 11_tháng 12".split("_"),
        monthsShort: "Thg 01_Thg 02_Thg 03_Thg 04_Thg 05_Thg 06_Thg 07_Thg 08_Thg 09_Thg 10_Thg 11_Thg 12".split("_"),
        monthsParseExact: !0,
        weekdays: "Chủ Nhật_Thứ Hai_Thứ Ba_Thứ Tư_Thứ Năm_Thứ Sáu_Thứ Bảy".split("_"),
        weekdaysShort: "CN_T2_T3_T4_T5_T6_T7".split("_"),
        weekdaysMin: "CN_T2_T3_T4_T5_T6_T7".split("_"),
        weekdaysParseExact: !0,
        meridiemParse: /sa|ch/i,
        isPM: function(t) {
            return /^ch$/i.test(t)
        },
        meridiem: function(t, e, n) {
            return t < 12 ? n ? "sa" : "SA" : n ? "ch" : "CH"
        },
        longDateFormat: {
            LT: "HH:mm",
            LTS: "HH:mm:ss",
            L: "DD/MM/YYYY",
            LL: "D MMMM [năm] YYYY",
            LLL: "D MMMM [năm] YYYY HH:mm",
            LLLL: "dddd, D MMMM [năm] YYYY HH:mm",
            l: "DD/M/YYYY",
            ll: "D MMM YYYY",
            lll: "D MMM YYYY HH:mm",
            llll: "ddd, D MMM YYYY HH:mm"
        },
        calendar: {
            sameDay: "[Hôm nay lúc] LT",
            nextDay: "[Ngày mai lúc] LT",
            nextWeek: "L",
            lastDay: "[Hôm qua lúc] LT",
            lastWeek: "L",
            sameElse: "L"
        },
        relativeTime: {
            future: "%s nữa",
            past: "%s trước",
            s: "Vài giây",
            ss: "%d giây",
            m: "Một phút",
            mm: "%d phút",
            h: "Một giờ",
            hh: "%d giờ",
            d: "Một ngày",
            dd: "%d ngày",
            M: "Một tháng",
            MM: "%d tháng",
            y: "Một năm",
            yy: "%d năm"
        },
        dayOfMonthOrdinalParse: /\d{1,2}/,
        ordinal: function(t) {
            return t
        },
        week: {
            dow: 1,
            doy: 4
        }
    })
});