"use strict";
var a;
var KTProjectSettings = {
    init: function () {
        !(function () {
            var t;
            $("#kt_datepicker_1").flatpickr();
            var e = document.getElementById("kt_project_settings_form"),
            i = e.querySelector("#kt_project_settings_submit");

            new Tagify(
            	e.querySelector('[name="point"]'), { whitelist: ["Item One", "Item Two", "Item Three", "Item Four", "Item Five"], maxTags: 5, dropdown: { maxItems: 10, enabled: 0, closeOnSelect: !1 } }).on("change", function () {
                n.revalidateField("point");
            });

            new Tagify(
            	e.querySelector('[name="graduation"]'), { whitelist: ["from X", "from Y", "from Z", "from XZ", "from XY"], maxTags: 5, dropdown: { maxItems: 10, enabled: 0, closeOnSelect: !1 } }).on("change", function () {
                n.revalidateField("graduation");
            });

            new Tagify(
            	e.querySelector('[name="school"]'), { whitelist: ["from X", "from Y", "from Z", "from XZ", "from XY"], maxTags: 5, dropdown: { maxItems: 10, enabled: 0, closeOnSelect: !1 } }).on("change", function () {
                n.revalidateField("school");
            });

            new Tagify(
            	e.querySelector('[name="courses"]'), { whitelist: ["Item One", "Item Two", "Item Three", "Item Four", "Item Five"], maxTags: 5, dropdown: { maxItems: 10, enabled: 0, closeOnSelect: !1 } }).on("change", function () {
                n.revalidateField("courses");
            });

            new Tagify(
            	e.querySelector('[name="service"]'), { whitelist: ["Item One", "Item Two", "Item Three", "Item Four", "Item Five"], maxTags: 5, dropdown: { maxItems: 10, enabled: 0, closeOnSelect: !1 } }).on("change", function () {
                n.revalidateField("service");
            });

               
            (t = FormValidation.formValidation(e, {
                fields: {
                    name: { validators: { notEmpty: { message: "Project name is required" } } },
                    type: { validators: { notEmpty: { message: "Project type is required" } } },
                    description: { validators: { notEmpty: { message: "Project Description is required" } } },
                    date: { validators: { notEmpty: { message: "Due Date is required" } } },
                },
                plugins: { trigger: new FormValidation.plugins.Trigger(), submitButton: new FormValidation.plugins.SubmitButton(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row" }) },
            })),
                i.addEventListener("click", function (e) {
                    e.preventDefault(),
                        t.validate().then(function (t) {
                            "Valid" == t
                                ? swal.fire({ text: "Thank you! You've updated your project settings", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn fw-bold btn-light-primary" } })
                                : swal.fire({
                                      text: "Sorry, looks like there are some errors detected, please try again.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, got it!",
                                      customClass: { confirmButton: "btn fw-bold btn-light-primary" },
                                  });
                        });
                });
        })();
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTProjectSettings.init();
});
