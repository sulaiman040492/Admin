$(document).ready(function() {
    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    $('[href="#"]').attr("href", "javascript:;");
    $('.swal2-confirm').attr('type', 'submit');
});

// Navigation Menu 
$(window).on('load', function() {
    var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $('.menu-item a.menu-link').each(function() {
        var hrefVal = $(this).attr('href');

        if (hrefVal == currentUrl) {
            $(".menu-item a.menu-link").removeClass('active');
            $(this).addClass('active');
        }
    });
});

// Tabbing JS
$('[data-targetit]').on('click', function(e) {
  $(this).addClass('current');
  $(this).siblings().removeClass('current');
  var target = $(this).data('targetit');
  $('.' + target).siblings('[class^="box-"]').hide();
  $('.' + target).fadeIn();
  $(".tab-slider").slick("setPosition");
});


$(".kt_data_delete_table_ok").on('click', function(){
    swal.fire({
          text: "Are you sure you would like to deleted this row?",
          icon: "warning",
          buttonsStyling: !1,
          showDenyButton: !0,
          confirmButtonText: "Yes",
          denyButtonText: "No",
          customClass: { confirmButton: "btn btn-light-primary", denyButton: "btn btn-danger" },
    })
    
    .then((t) => {
        t.isConfirmed
            ? Swal.fire({ text: "This data has been deleted.", icon: "success", confirmButtonText: "Ok", buttonsStyling: !1, customClass: { confirmButton: "btn btn-light-primary" } })
            : t.isDenied && Swal.fire({ text: "Data not delete?", icon: "info", confirmButtonText: "Ok", buttonsStyling: !1, customClass: { confirmButton: "btn btn-light-primary" } });
    })
});



$(".kt_data_delete_table_ok_category").on('click', function(){
    var id = $(this).attr('id');
    swal.fire({
          text: "Are you sure you would like to deleted this row?",
          icon: "warning",
          buttonsStyling: !1,
          showDenyButton: !0,
          confirmButtonText: "Yes",
          denyButtonText: "No",
          customClass: { confirmButton: "btn btn-light-primary", denyButton: "btn btn-danger" },
    })
    
    .then((t) => {
        t.isConfirmed
            ? document.getElementById('delete-form-'+id).submit()
            : t.isDenied && Swal.fire({ text: "Data not delete?", icon: "info", confirmButtonText: "Ok", buttonsStyling: !1, customClass: { confirmButton: "btn btn-light-primary" } });
    })
});




$(".kt_subscription_cancel").on('click', function(){
    swal.fire({
          text: "Are you sure you would like to Cancel Subscription?",
          icon: "warning",
          buttonsStyling: !1,
          showDenyButton: !0,
          confirmButtonText: "Yes",
          denyButtonText: "No",
          customClass: { confirmButton: "btn btn-light-primary", denyButton: "btn btn-danger" },
    })
    
    .then((t) => {
        t.isConfirmed
            ? Swal.fire({ text: "This subscription has been cancelled.", icon: "success", confirmButtonText: "Ok", buttonsStyling: !1, customClass: { confirmButton: "btn btn-light-primary" } })
            : t.isDenied && Swal.fire({ text: "This subscription not cancelled?", icon: "info", confirmButtonText: "Ok", buttonsStyling: !1, customClass: { confirmButton: "btn btn-light-primary" } });
    })
});

$(".kt_subscription_pause").on('click', function(){
    swal.fire({
          text: "Are you sure you would like to pause Subscription?",
          icon: "warning",
          buttonsStyling: !1,
          showDenyButton: !0,
          confirmButtonText: "Yes",
          denyButtonText: "No",
          customClass: { confirmButton: "btn btn-light-primary", denyButton: "btn btn-danger" },
    })
    
    .then((t) => {
        t.isConfirmed
            ? Swal.fire({ text: "This subscription has been paused.", icon: "success", confirmButtonText: "Ok", buttonsStyling: !1, customClass: { confirmButton: "btn btn-light-primary" } })
            : t.isDenied && Swal.fire({ text: "This subscription not paused?", icon: "info", confirmButtonText: "Ok", buttonsStyling: !1, customClass: { confirmButton: "btn btn-light-primary" } });
    })
});

$(".kt_approv_btn").on('click', function(){
    $(this).attr("data-kt-indicator", "on");
    $(".kt_approv_btn").find(".svg-icon").addClass("d-none");

    if ($(".kt_approv_btn").hasClass('btn-success')) {
        setTimeout(function () {
            $(".kt_approv_btn").attr("data-kt-indicator", "off");
            $(".kt_approv_btn").removeClass("btn-success");
            $(".kt_approv_btn").addClass("btn-light");
            $(".kt_approv_btn").find(".svg-icon").addClass("d-none");
            $(".kt_approv_btn").find(".indicator-label").text("Approve");
            $(".kt_approv_btn").attr('disabled','disabled');
            console.log('Done1');
        }, 1500);
    } else{
        setTimeout(function () {
              $(".kt_approv_btn").attr("data-kt-indicator", "off");
              $(".kt_approv_btn").addClass("btn-success");
              $(".kt_approv_btn").removeClass("btn-light");
              $(".kt_approv_btn").find(".svg-icon").removeClass("d-none");
              $(".kt_approv_btn").find(".indicator-label").text("Approed");
              $(".kt_approv_btn").removeAttr('disabled');
              console.log('Done2');
          }, 1000);
    }

        console.log('Done');
});


$(".kt_reject_btn").on('click', function(){
    $(this).attr("data-kt-indicator", "on");
    $(".kt_reject_btn").find(".svg-icon").addClass("d-none");

    if ($(".kt_reject_btn").hasClass('btn-danger')) {
        setTimeout(function () {
            $(".kt_reject_btn").attr("data-kt-indicator", "off");
            $(".kt_reject_btn").removeClass("btn-danger");
            $(".kt_reject_btn").addClass("btn-light");
            $(".kt_reject_btn").find(".svg-icon").addClass("d-none");
            $(".kt_reject_btn").find(".indicator-label").text("Reject");
            $(".kt_reject_btn").attr('disabled','disabled');
            console.log('Done1');
        }, 1500);
    } else{
        setTimeout(function () {
              $(".kt_reject_btn").attr("data-kt-indicator", "off");
              $(".kt_reject_btn").addClass("btn-danger");
              $(".kt_reject_btn").removeClass("btn-light");
              $(".kt_reject_btn").find(".svg-icon").removeClass("d-none");
              $(".kt_reject_btn").find(".indicator-label").text("Rejected");
              $(".kt_reject_btn").removeAttr('disabled');
              console.log('Done2');
          }, 1000);
    }

        console.log('Done');
});

$(".kt_block_btn").on('click', function(){
    $(this).attr("data-kt-indicator", "on");
    $(".kt_block_btn").find(".svg-icon").addClass("d-none");

    if ($(".kt_block_btn").hasClass('btn-dark')) {
        setTimeout(function () {
            $(".kt_block_btn").attr("data-kt-indicator", "off");
            $(".kt_block_btn").removeClass("btn-dark");
            $(".kt_block_btn").addClass("btn-light");
            $(".kt_block_btn").find(".svg-icon").addClass("d-none");
            $(".kt_block_btn").find(".indicator-label").text("Block");
            // $(".kt_block_btn").attr('disabled','disabled');
            console.log('Done1');
        }, 1500);
    } else{
        setTimeout(function () {
              $(".kt_block_btn").attr("data-kt-indicator", "off");
              $(".kt_block_btn").addClass("btn-dark");
              $(".kt_block_btn").removeClass("btn-light");
              $(".kt_block_btn").find(".svg-icon").removeClass("d-none");
              $(".kt_block_btn").find(".indicator-label").text("Blocked");
              // $(".kt_block_btn").removeAttr('disabled');
              console.log('Done2');
          }, 1000);
    }

        console.log('Done');
});



$('.swal2-confirm').click(function(){
    window.location = 'new-password.php';
    $('.swal2-confirm').attr('type', 'submit');
    console.log('Doen BOss');
});



















