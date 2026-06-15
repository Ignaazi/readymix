// Fungsi mengubah menu aktif untuk tombol link biasa
window.setActiveMenu = function(element) {
    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
    element.classList.add('active');
}

// Fungsi khusus saat sub-menu di dalam dropdown diklik
window.setDropdownActive = function(element) {
    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
    const parentDropdown = element.closest('.dropdown').querySelector('.dropdown-toggle');
    if (parentDropdown) {
        parentDropdown.classList.add('active');
    }
}

window.copyPhoneNumber = function() {
    const phoneText = document.getElementById('phoneNum').innerText;
    navigator.clipboard.writeText(phoneText)
        .then(() => {
            alert("Nomor telepon berhasil disalin!");
        })
        .catch(err => {
            console.error('Gagal menyalin: ', err);
        });
}
