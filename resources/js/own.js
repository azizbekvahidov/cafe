var table;
window.sendAjax = function (method, url, title) {
    $.ajax({
        type: method,
        url: url,
        success: function (data) {
            $('#large_modal_body').html(data);
            $('#large_modal_header').text(title);
        }
    });
};
window.sendData = function (routes,obj,method) {
    $.ajax({
        type: method,
        data: obj,
        url: routes,
        success: function (data) {
            $('.newStuffModal').modal("hide");
            table.ajax.reload();
        }
    });
};

