// Cargar dataTables
$(document).ready(function () {
    $('#premios').DataTable({
        columnDefs: [
            {
                targets: [0],
                orderData: [0, 1],
            }
        ],
    });
});


// Importar CSV
$('#import_csv').click(() => {
    $('#import_csv_box').toggle(200);
});


// Cambiar año
$('#change_year').click(() => {
    $('#change_year_box').toggle(200);
});