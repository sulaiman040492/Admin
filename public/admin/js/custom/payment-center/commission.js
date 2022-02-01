"use strict";
var KTCommissionFee = (function () {
    var t,
        e,
        o = () => {
            const r = e.querySelectorAll('[type="checkbox"]'),
                c = document.querySelector('[data-kt-view-roles-table-select="delete_selected1"]');
            r.forEach((t) => {
                t.addEventListener("click", function () {
                    setTimeout(function () {
                        n();
                    }, 50);
                });
            }),
                c.addEventListener("click", function () {
                    Swal.fire({
                        text: "Are you sure you want to delete selected customers?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: { confirmButton: "btn fw-bold btn-danger", cancelButton: "btn fw-bold btn-active-light-primary" },
                    }).then(function (c) {
                        c.value
                            ? Swal.fire({ text: "You have deleted all selected customers!.", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn fw-bold btn-primary" } })
                                  .then(function () {
                                      r.forEach((e) => {
                                          e.checked &&
                                              t
                                                  .row($(e.closest("tbody tr")))
                                                  .remove()
                                                  .draw();
                                      });
                                      e.querySelectorAll('[type="checkbox"]')[0].checked = !1;
                                  })
                                  .then(function () {
                                      n(), o();
                                  })
                            : "cancel" === c.dismiss &&
                              Swal.fire({ text: "Selected customers was not deleted.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn fw-bold btn-primary" } });
                    });
                });
        };
    const n = () => {
        const t = document.querySelector('[data-kt-view-roles-table-toolbar="base1"]'),
            o = document.querySelector('[data-kt-view-roles-table-toolbar="selected1"]'),
            n = document.querySelector('[data-kt-view-roles-table-select="selected_count1"]'),
            r = e.querySelectorAll('tbody [type="checkbox"]');
        let c = !1,
            l = 0;
        r.forEach((t) => {
            t.checked && ((c = !0), l++);
        }),
            c ? ((n.innerHTML = l), t.classList.add("d-none"), o.classList.remove("d-none")) : (t.classList.remove("d-none"), o.classList.add("d-none"));
    };
    return {
        init: function () {
            (e = document.querySelector("#kt_roles_view_table1")) &&
                (e.querySelectorAll("tbody tr").forEach((t) => {
                    const e = t.querySelectorAll("td"),
                        o = moment(e[3].innerHTML, "DD MMM YYYY, LT").format();
                    e[3].setAttribute("data-order", o);
                }),
                (t = $(e).DataTable({
                    info: !1,
                    order: [],
                    pageLength: 5,
                    lengthChange: !1,
                    columnDefs: [
                        { orderable: !1, targets: 0 },
                        { orderable: !1, targets: 4 },
                    ],
                })),
                document.querySelector('[data-kt-roles-table-filter="search1"]').addEventListener("keyup", function (e) {
                    t.search(e.target.value).draw();
                }),
                e.querySelectorAll('[data-kt-roles-table-filter="delete_row1"]').forEach((e) => {
                    e.addEventListener("click", function (e) {
                        e.preventDefault();
                        const o = e.target.closest("tr"),
                            n = o.querySelectorAll("td")[1].innerText;
                        Swal.fire({
                            text: "Are you sure you want to delete " + n + "?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, delete!",
                            cancelButtonText: "No, cancel",
                            customClass: { confirmButton: "btn fw-bold btn-danger", cancelButton: "btn fw-bold btn-active-light-primary" },
                        }).then(function (e) {
                            e.value
                                ? Swal.fire({ text: "You have deleted " + n + "!.", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn fw-bold btn-primary" } }).then(function () {
                                      t.row($(o)).remove().draw();
                                  })
                                : "cancel" === e.dismiss &&
                                  Swal.fire({ text: customerName + " was not deleted.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn fw-bold btn-primary" } });
                        });
                    });
                }),
                o());
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTCommissionFee.init();
});
