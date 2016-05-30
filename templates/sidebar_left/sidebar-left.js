
function _init() {
    $.AdminLTE.layout = $.AdminLTE.tree = function (a) {
        var b = this, c = $.AdminLTE.options.animationSpeed;
        $(document).on("click", a + " li a", function (a) {
            var d = $(this), e = d.next();
            if (e.is(".treeview-menu") && e.is(":visible"))
                e.slideUp(c)
            else {
                e.slideDown(c)
            }
            a.preventDefault()
        })
    }
}
if ("undefined" == typeof jQuery)
    throw new Error("AdminLTE requires jQuery");
$.AdminLTE = {}, $.AdminLTE.options = { navbarMenuHeight: "200px", animationSpeed: 500, sidebarToggleSelector: "[data-toggle='offcanvas']", controlSidebarOptions: {}}, $(function () { 
    _init(), $.AdminLTE.tree(".sidebar");
});

