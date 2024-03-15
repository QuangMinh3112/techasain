import './bootstrap';

window.addEventListener('alert', (event) => {
    let data = event.detail;
    Swal.fire({
        position: data.position,
        icon: data.type,
        title: data.title,
        showConfirmButton: data.confirm,
        timer: data.timer
    })
})

window.addEventListener('confirm', (event) => {
    let data = event.detail;
    let userId = (data.userId);
    Swal.fire({
        title: data.title,
        text: data.text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: data.confirmText,
        cancelButtonText: data.cancelText,
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.dispatch('deleted', { id: userId });
            Swal.fire({
                title: "Xoá thành công!",
                text: "Dữ liệu bạn chọn đã được xoá",
                icon: "success"
            });
        }
    });
})
