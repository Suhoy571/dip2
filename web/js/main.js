// language=JQuery-CSS
function showCart(cart) {
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
}


$('#cart .modal-body').on('click', '.del-item', function () {
    var id = $(this).data('id');
    console.log(id);
    $.ajax({ // Формирования Ajax запроса
        url: '/cart/del-item', //Куда ведет URL
        data: {id: id}, //
        type: 'GET',
        success: function (res) {
            if (!res) alert('Ошибка!');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});

function getCart() {
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function (res) {
            if (!res) alert('Ошибка!');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
}

function clearCart() {
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function (res) {
            if (!res) alert('Ошибка!');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
}

$('.now-get').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id'),
        qty = $('#qty').val();
    $.ajax({ // Формирования Ajax запроса
        url: '/cart/add', //Куда ведет URL
        data: {id: id, qty: qty}, //Данные, которые передаем
        type: 'GET', //Метод передачи данных на сервер
        success: function (res) { // В случае успеха
            if (!res)  //Если пустая строка
                alert('Ошибка!');
            showCart(res);
        },
        error: function () { //В случаее ошибки
            alert('Error!');
        }
    });
});