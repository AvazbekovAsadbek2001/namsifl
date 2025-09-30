/*******************
 Nestable
 *******************/

(function ($) {
    "use strict"

    var e = function (e) {
        var t = e.length ? e : $(e.target),
            a = t.data("output");
        window.JSON ? a.val(window.JSON.stringify(t.nestable("serialize"))) : a.val("JSON browser support required for this demo.")
        console.log(a.val(window.JSON.stringify(t.nestable("serialize"))))  
    };

    $("#nestable").nestable({
            group: 1
        }).on("change", e),
        $("#nestable2").nestable({
            group: 1
        }).on("change", e),
            e($("#nestable").data("output", $("#nestable-output"))),
            e($("#nestable2").data("output", $("#nestable2-output"))),
            $("#nestable-menu").on("click", function (e) {
                var t = $(e.target).data("action");
                "expand-all" === t && $(".dd").nestable("expandAll"), "collapse-all" === t && $(".dd").nestable("collapseAll")
            }),
            $("#nestable3").nestable();
})(jQuery);
