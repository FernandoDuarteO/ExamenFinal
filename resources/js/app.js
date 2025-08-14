import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('success', event => {
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: event.detail,
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('delete', event => {
        Swal.fire({
            icon: 'error',
            title: '¡Borrado!',
            text: event.detail,
        });
    });
});
