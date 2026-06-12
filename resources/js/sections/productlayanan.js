// Fungsi mendownload tabel mutu sebagai file gambar PNG menggunakan html2canvas
window.downloadTableAsImage = function() {
    const element = document.getElementById('tableAreaToDownload');
    const downloadBtn = element.querySelector('.services-png-btn');
    if(downloadBtn) downloadBtn.style.visibility = 'hidden';

    // Memastikan pustaka html2canvas sudah ter-load dengan aman
    if (typeof html2canvas === 'undefined') {
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js';
        script.onload = () => {
            executeHtml2Canvas(element, downloadBtn);
        };
        document.head.appendChild(script);
    } else {
        executeHtml2Canvas(element, downloadBtn);
    }
};

function executeHtml2Canvas(element, downloadBtn) {
    html2canvas(element, {
        scale: 2,
        backgroundColor: '#ffffff',
        useCORS: true
    }).then(canvas => {
        if(downloadBtn) downloadBtn.style.visibility = 'visible';
        const link = document.createElement('a');
        link.download = 'Daftar-Mutu-Karakteristik-Tabel.png';
        link.href = canvas.toDataURL('image/png');
        link.click();
    }).catch(err => {
        if(downloadBtn) downloadBtn.style.visibility = 'visible';
        console.error('Gagal memproses unduhan tabel:', err);
    });
}
