// Fungsi menyalin teks pada tombol copy di section Home
window.copyText = function(buttonElement) {
    const textToCopy = buttonElement.parentElement.querySelector('.copy-target').innerText;
    navigator.clipboard.writeText(textToCopy).then(() => {
        const icon = buttonElement.querySelector('i');
        icon.className = 'bi bi-check-lg text-success';
        setTimeout(() => { icon.className = 'bi bi-copy'; }, 1500);
    }).catch(err => {
        console.error('Gagal menyalin teks: ', err);
    });
};

// Counter animasi statistik di section Home (Dioptimasi dengan IntersectionObserver)
document.addEventListener("DOMContentLoaded", () => {
    const statsRow = document.querySelector('.hero-stats-flat-row');
    if (!statsRow) return;

    const counters = statsRow.querySelectorAll('.counter');
    const duration = 1000; 

    const startCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const updateCount = () => {
            const count = +counter.innerText;
            const increment = Math.ceil(target / (duration / 16));
            if (count < target) {
                counter.innerText = count + increment > target ? target : count + increment;
                setTimeout(updateCount, 16); 
            } else { 
                counter.innerText = target; 
            }
        };
        updateCount();
    };

    if (typeof IntersectionObserver === 'undefined') {
        // Fallback untuk browser lawas
        counters.forEach(counter => startCounter(counter));
    } else {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => startCounter(counter));
                    observer.unobserve(entry.target); // Matikan observer setelah berjalan sekali
                }
            });
        }, {
            threshold: 0.1 // Berjalan ketika 10% elemen terlihat di layar
        });
        observer.observe(statsRow);
    }
});
