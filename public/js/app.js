const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

function toast_success(message) {
    Toast.fire({
        icon: "success",
        title: message,
    });
}

function toast_error(message) {
    Toast.fire({
        icon: "error",
        title: message,
    });
}

function toast_warning(message) {
    Toast.fire({
        icon: "warning",
        title: message,
    });
}

function toast_info(message) {
    Toast.fire({
        icon: "info",
        title: message,
    });
}

function toast_question(message) {
    Toast.fire({
        icon: "question",
        title: message,
    });
}

window.addEventListener("show-message", function (event) {
    toast_success(event.detail.message);
});
