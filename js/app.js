// Función para enviar formulario de creación
function createFormSubmit() {
    var form = document.getElementById("create-form");
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "registrar.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            alert(xhr.responseText);
        }
    };
    xhr.send(new FormData(form));
}

// Función para enviar formulario de actualización
function updateFormSubmit(id) {
    var form = document.getElementById("update-form-" + id);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "modificar.php" + id, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            alert(xhr.responseText);
        }
    };
    xhr.send(new FormData(form));
}

// Función para enviar solicitud de eliminación
function deleteRecord(id) {
    if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "eliminar.php" + id, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                alert(xhr.responseText);
            }
        };
        xhr.send();
    }
}