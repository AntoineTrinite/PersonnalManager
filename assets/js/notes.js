$(document).ready(function () {
    $('.note-del-btn').click(function () {
        const id = $(this).data('note-id');
        console.log('ID:', id); // Vérifiez l'ID dans la console du navigateur
        $.post("./components/notesremove.php", { id: id }, (data) => {
            if (data == 1) {
                $(this).closest('.note-card-page').hide(600);
            } else {
                alert('La suppression a échoué.');
            }
        });
    });
});
