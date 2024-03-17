var enviarForm = false;

    (function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            enviarForm = false;
            } else {
            enviarForm = true;
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()

    $('#imagem').change(e => {
    if(e.target.files[0]['size'] >= 5242880) {
        $('#liveToast .toast-body').text('Arquivo excede o tamanho máximo (5MB)');
        $('#liveToast').addClass('bg-danger').toast('show');
        $(e.target).val('');
    };
    })

    $('form').on('submit', e => {
    e.preventDefault();
    if(enviarForm) {
        formData = new FormData($('form')[0]);
        $('form input, form textarea, form button').prop('readonly', true);
        $.ajax({
            url: 'salvarCadastroNoticias.php',
            type: "POST",
            data: formData,
            mimeType: "multipart/form-data",
            contentType: false,
            processData: false,
            success: data => {
                json = JSON.parse(data)
                $('#liveToast .toast-body').text(json['mensagem']);
                if(json['status'] == 'sucesso') {
                $('#liveToast').addClass('bg-success').toast('show');
                setTimeout(()=> {
                    window.location = 'index.php';
                }, 2000);
                } else {
                $('#liveToast').addClass('bg-danger').toast('show');
                $('form input, form textarea, form button').prop('readonly', false);
                }
            },
            error: () => {
            $('#liveToast .toast-body').text('Não foi possível cadastrar a notícia.');
            $('#liveToast').addClass('bg-danger').toast('show');
            $('form input, form textarea, form button').prop('readonly', false);
            }            
        });
    }
})