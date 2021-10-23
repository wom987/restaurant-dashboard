function deleteProduct(id) {
    alertify.confirm(
        "¿Desea eliminar el registro?",
        "Nota: Esta accion no se puede revertir",

        function () {
            $.ajax({
                url: URL + "products/" + id,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "DELETE",
                data: {
                    _token: $("meta[name='csrf-token']").attr("content"),
                },
                success: function (response) {
                    alertify.error("Eliminado correctamente!");
                   window.location.reload();
                },
                error: function (xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    console.log(err.Message);
                },
            });
        },
        function () {
            alertify.success("Accion cancelada!");
        }
    );
}
function deleteWaiter(id) {
    alertify.confirm(
        "¿Desea eliminar el registro?",
        "Nota: Esta accion no se puede revertir",

        function () {
            try {
                fetch(URL + "cashiers/" + id, {
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    method: "DELETE",
                    data: {
                        _token: $("meta[name='csrf-token']").attr("content"),
                    },
                    dataType: "json",
                })
                    .then((response) => {
                        response.json();
                    })
                    .then((data) => {
                        alertify.error("Registro Eliminado!");
                    })
                    .then(() => {
                        $("#sid" + id).remove();
                    });
            } catch (error) {
                console.log(error);
            }
        },
        function () {
            alertify.success("Accion cancelada!");
        }
    );
}