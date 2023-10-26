$(document).ready(function () {
    // Gestionnaire d'événement pour les boutons de suppression
    $('.todo-del-btn').click(function () {
        const id = $(this).parent().find('span').attr('id');

        $.post("./components/todoremove.php",
            {
                id: id
            },
            (data) => {
                if (data) {
                    $(this).parent().parent().hide(600);
                }
            }
        );
    });

    // Gestionnaire d'événement pour les cases à cocher (utilisation d'événements délégués)
    $('.check-box').click(function (e) {
        const id = $(this).attr('data-todo-id');
        alert(id);
    });
});
