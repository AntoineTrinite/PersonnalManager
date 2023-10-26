$(document).ready(function () {
    // Gestionnaire d'événement pour les boutons de suppression
    $('.todo-del-btn').click(function () {
        const id = $(this).data('todo-id');

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
    $(document).on('change', '.check-box', function (e) {
        const id = $(this).data('todo-id');
        const isChecked = this.checked;

        $.post("./components/todoupdate.php",
            {
                id: id,
                checked: isChecked ? 1 : 0
            },
            (data) => {
                // Cette fonction est exécutée après la réponse du serveur, mais nous n'attendons pas la réponse pour mettre à jour l'interface.
                if (isChecked) {
                    // La case est cochée, appliquez un style ou effectuez d'autres actions nécessaires.
                    $(this).parent().find('.todo-name').addClass('checked');
                } else {
                    // La case est décochée, rétablissez le style ou effectuez d'autres actions nécessaires.
                    $(this).parent().find('.todo-name').removeClass('checked');
                }
            }
        );
    });


});
