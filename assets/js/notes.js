$(document).ready(function () {
    $('.note-del-btn').click(function () {
        const id = $(this).siblings('span').attr('id'); // Utilisez siblings() au lieu de parent().find() pour trouver le span id

        $.post("./components/notesremove.php",
            {
                id: id
            },
            (data) => {
                if (data == 1) {
                    $(this).closest('.note-card-page').hide(600); // Utilisez closest() pour accéder au parent '.note-card-page'
                } else {
                    alert('La suppression a échoué.');
                }
            }
        )
    });
});
