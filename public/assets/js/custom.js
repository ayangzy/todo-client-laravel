function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}

function LoadContentToDiv(url, div) {
    $('#' + div).load(url, function() {});
}

function LoadContentToDivWithCallBack(url, div, callBackFunc) {
    $('#' + div).load(url, function() {});

    callBackFunc();
}

function init_select2(){
    $('.select2').select2({
        theme: 'bootstrap',
        placeholder: 'select a value',
    });
}

var placeholderElement = $('#modal-placeholder');

$(document).on('click', '.raise-modal', function(event) {
    on();

    var url = $(this).data('url');
    var targetUrl = $(this).data('targeturl');
    var targetDiv = $(this).data('targetdiv');
    $.get(url).done(function(data) {
        off();
        if (data.responseMessage == null) {
            placeholderElement.html(data);
            placeholderElement.find('.modal').modal('show');
        }else if(data.status == false) {
            toastr.error(data.msg);
        }else {
            toastr.error(data.responseMessage);
        }

    });

    $.validator.setDefaults({
        submitHandler: function(form) {
                $('#submit-btn').prop("disabled",true);
                $('#btn-icon').removeClass('fas fa-save');
                $('#btn-icon').addClass('fa fa-spinner fa-spin');
            var actionUrl = $(form).attr('action');
            var dataToSend = new FormData($(form)[0]); // $(form).serialize();// new FormData($(form)[0]);
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                },
                url: actionUrl,
                data: dataToSend,
                processData: false,
                contentType: false,
                success: function(data) {
                    off();
                    if (data.status) {
                        placeholderElement.find('.modal').modal('hide');
                        toastr.success(data.msg);
                        $('#submit-btn').prop("disabled",false);
                        $('#btn-icon').removeClass('fa fa-spinner fa-spin');
                        $('#btn-icon').addClass('fas fa-save');
                        if (targetUrl != null && targetDiv != null) {
                            LoadContentToDiv(targetUrl, targetDiv);
                        }
                    } else {
                        off();
                        $('#submit-btn').prop("disabled",false);
                        $('#btn-icon').removeClass('fa fa-spinner fa-spin');
                        $('#btn-icon').addClass('fas fa-save');
                        toastr.error(data.msg);
                    }
                }
            });
            off();

            return false;
        }
    });
    // custom validation for blob (images and select)

    $.validator.addMethod("mprequired", function(value, element) {
        if ((value > 0 && value !== null) || value.length > 0) {
            return value;
        }
    }, $.validator.messages.required)
});

$(document).on('click', '.delete', function(event) {

    let item = $(this).data('item');
    var url = $(this).data('url');
    var targetUrl = $(this).data('targeturl');
    var targetDiv = $(this).data('targetdiv');

    swal({
        title: "",
        text: "Are you sure you want to deactivate " + item + " ?",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: "delete",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                success: function(data) {
                    if (targetUrl != null && targetDiv != null) {
                        LoadContentToDiv(targetUrl, targetDiv);
                    }
                    toastr.success(data.msg);
                }
            });
        }
    });
});

function ButtonLoading(button) {
    btndic[$(button).attr("id")] = $(button).html();
    var data_loading = $(button).attr("data-loading");
    if (data_loading == null || data_loading == "" || data_loading == "undefined") {
        data_loading = "";
    }

    data_loading = "<fa class='fa fa-spinner fa-pulse fa-fw'></fa> " + data_loading;
    $(button).attr("disabled", "disabled"); $(button).addClass("not-allowed");
    $(button).html(data_loading);

    $(button).closest("form").submit();
}

function ButtonRemoveLoading(button) {
    $(button).removeAttr("disabled").removeClass("not-allowed");
    $(button).html(btndic[$(button).attr("id")]);
}


$(document).on('click', '.raise-modal-ce', function(event) {

    on();
    var url = $(this).data('url');
    $.get(url).done(function(data) {
        off();
        if (data.responseMessage == null) {
            placeholderElement.html(data);
            placeholderElement.find('.modal').modal('show');
        } else {
            toastr.error(data.responseMessage);
        }

    });
});


$(document).on('click', '.filter-record', function(){
    on();
    var s_date = $('#s_date').val();
    var e_date = $('#e_date').val();
    var account_type = $('#account_type'). val();
    if(s_date != '' && e_date != '' && account_type != '') {
        let url = '/transactions/filter/' + s_date + '/' + e_date + '/' + account_type;
        //     LoadContentToDivWithCallBack(url, "load-partial", off);
        // }
        $.get(url).done(function (data) {
            off();
            if (data.responseMessage == null) {
                $('#load-partial').html(data);
            } else if (data.status == false) {
                toastr.error(data.msg);
            } else {
                toastr.error(data.responseMessage);
            }

        });
    }else{
        off();
            alert('Select all filter criteria');
        }

    });

$(document).on('click', '.filter-record-loan', function(){
    on();
    var s_date = $('#s_date').val();
    var e_date = $('#e_date').val();
    var status = $('#status'). val();
    if(s_date != '' && e_date != '' && status != '') {
        let url = '/loans/filter/' + s_date + '/' + e_date + '/' + status;
        //     LoadContentToDivWithCallBack(url, "load-partial", off);
        // }
        $.get(url).done(function (data) {
            off();
            if (data.responseMessage == null) {
                $('#load-partial').html(data);
            } else if (data.status == false) {
                toastr.error(data.msg);
            } else {
                toastr.error(data.responseMessage);
            }

        });
    }else{
        off();
        alert('Select all filter criteria');
    }

});
