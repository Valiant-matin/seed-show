$(document).ready(function () {

    $(document).on('click', '.gallery-block__btn', function () {
        console.log('test');
        let container = $('.gallery-block__images'),    
            containerButton = $('[data-container-button]')      //  Контейнер, в котором хранятся элементы
            url = $('.gallery-block__btn').attr('data-url');    //  URL, из которого будем брать элементы

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function (data) {

                    //  Удаляем старую навигацию
                    $('.gallery-block__btn').remove();

                    let elements = $(data).find('.gallery-block__img'),  //  Ищем элементы
                        pagination = $(data).find('.gallery-block__btn');//  Ищем навигацию

                    container.append(elements);
                    containerButton.append(pagination);

                }
            })
        }

    });

});