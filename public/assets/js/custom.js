function modalShow(title, message) {
    $('.infoModal').modal('show');
    if (title === 'hide') {
        $('.modal-header').css('display', 'none');
    } else {
        $('.modal-header').css('display', 'block');
        $('.modal-title').html(title);
    }
    $('.modal-message').text(message);
}


