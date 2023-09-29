$().ready(function() {
    $("#validateForm").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "phone":{ required: true},
        },
        messages: {
            "phone": {
                required: "Nhập Số điện thoại",
            },
        }
    });
});