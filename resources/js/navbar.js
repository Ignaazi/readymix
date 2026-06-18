// Fungsi mengubah menu aktif untuk tombol link biasa
window.setActiveMenu = function(element) {
    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
    element.classList.add('active');
    closeMobileMenu();
}

// Fungsi khusus saat sub-menu di dalam dropdown diklik
window.setDropdownActive = function(element) {
    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
    const parentDropdown = element.closest('.dropdown').querySelector('.dropdown-toggle');
    if (parentDropdown) {
        parentDropdown.classList.add('active');
    }
    closeMobileMenu();
}

// Auto-close mobile menu when any nav link is clicked
function closeMobileMenu() {
    const navContent = document.getElementById('navContent');
    if (!navContent) return;

    // Only close when the mobile drawer is actually open
    if (!navContent.classList.contains('show')) return;

    // Programmatically click the toggler button — it's already
    // wired to Bootstrap's collapse and avoids ESM scope issues.
    const toggler = document.querySelector('.navbar-toggler');
    if (toggler) {
        toggler.click();
    }
}

// Delegated listener — any link inside the nav closes the mobile menu,
// except dropdown toggles (those expand a submenu instead).
document.addEventListener('DOMContentLoaded', function () {
    const navContent = document.getElementById('navContent');
    if (!navContent) return;

    navContent.addEventListener('click', function (e) {
        const link = e.target.closest('a');
        if (!link) return;

        // Don't close when clicking a dropdown toggle
        if (link.classList.contains('dropdown-toggle')) return;

        closeMobileMenu();
    });
});

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
