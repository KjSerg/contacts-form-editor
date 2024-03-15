var $doc = $(document);


$doc.ready(function () {
    $doc.on('click', '.fancybox', function (e) {
        e.preventDefault();
        var $t = $(this);
        var $el = $($t.attr('href'));
        if ($el.length === 0) return;
        $.fancybox.open($el);
    });
});

document.addEventListener('wpcf7mailsent', function (event) {
    $('#thanks .modal-title__main').html(event.detail.apiResponse.message);
    $.fancybox.open({
        src: '#thanks',
        touch: false,
        baseClass: 'thanks_msg'
    });
    setTimeout(function () {
        $.fancybox.close();
    }, 3000);
}, false);

document.addEventListener('wpcf7invalid', function (event) {
    var invalid_fields = event.detail.apiResponse.invalid_fields;
    for (var a = 0; a < invalid_fields.length; a++) {
        var id = invalid_fields[a].error_id;
        $doc.find('input[aria-describedby="' + id + '"]').addClass('error');
    }
}, false);