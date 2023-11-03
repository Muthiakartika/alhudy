const eng = document.querySelector('#btnradio1');
const idn = document.querySelector('#btnradio2');

const contentTag = document.querySelector('.content-tag');
const contentT1 = document.querySelector('.content-t1');
const contentT2 = document.querySelector('.content-t2');
const contentT3 = document.querySelector('.content-t3');
const contentT4 = document.querySelector('.content-t4');
const contentT5 = document.querySelector('.content-t5');
const contentP1 = document.querySelector('.content-p1');
const contentP2 = document.querySelector('.content-p2');
const contentP3 = document.querySelector('.content-p3');
const contentP4 = document.querySelector('.content-p4');

eng.addEventListener('click', english);
idn.addEventListener('click', bahasa);

function english() {
    contentTag.innerHTML = 'Authentic Balinese Handicraft';
    contentT1.innerHTML = 'About';
    contentT2.innerHTML = 'Signature Products from BaliStuti';
    contentT3.innerHTML = 'Wood Handicraft Statue';
    contentT4.innerHTML = 'Wood Handicraft Utensil';
    contentT5.innerHTML = 'Costum Made';
    contentP1.innerHTML =
        'BaliStuti was founded in 1998. First established as a small shop in Legian, Double Six beach. BaliStuti was inspired by a term in Sanskrit “Stuti” which means “Trusted”, so BaliStuti means “Trusted from Bali”. We`ve gone a long way in providing high-quality handicrafts at reasonable pricing. Whether you`re a wholesale distributor, store, or individual buyer, we have reasonable pricing. We welcome your enquiries and invite you to browse our website. We look forward to working with you.';
    contentP2.innerHTML = 'Sculpture products made from selected wood and carved by the professional of the best Balinese wood craftsmen.';
    contentP3.innerHTML = 'Products made by professional craftsmen who design tools that are useful and comfortable to be use by the customer.';
    contentP4.innerHTML = 'Products that are crafted from the hands of professional craftsmen based on customer request.';
}

function bahasa() {
    contentTag.innerHTML = 'Kerajinan Autentik Bali';
    contentT1.innerHTML = 'Tentang';
    contentT2.innerHTML = 'Produk Andalan BaliStuti';
    contentT3.innerHTML = 'Patung Kayu Pahatan';
    contentT4.innerHTML = 'Kerajinan Perkakas Kayu';
    contentT5.innerHTML = 'Pesanan Khusus';
    contentP1.innerHTML =
        'BaliStuti pertama kali didirikan pada tahun 1998 sebagai sebuah toko kecil di Legian, pantai Double Six. BaliStuti ini sendiri terinspirasi dari istilah dalam bahasa Sansekerta yaitu “Stuti” yang berarti “Terpercaya”, sehingga BaliStuti mempunyai makna tersendiri yang artinya “Terpercaya dari Bali”. Kami telah melangkah jauh dalam menyediakan kerajinan tangan yang berkualitas tinggi dengan harga yang wajar. Baik jika anda adalah distributor grosir, toko, atau pembeli perorangan, kami akan memberikan harga yang terjangkau. Kami juga akan menyambut pertanyaan Anda dan mengundang Anda untuk menelusuri situs web kami. Kami berharap agar dapat bekerja sama dengan Anda.';
    contentP2.innerHTML =
        'Produk patung yang berbahan dasar kayu pilihan, dibuat dan dipahat dari tangan tangan profesional pengrajin kayu bali terbaik. ';
    contentP3.innerHTML = 'Produk hasil karya tangan pengerajin profesional yang mendesign utensil yang berguna dan nyaman digunakan bagi pengguna. ';
    contentP4.innerHTML = 'Produk yang dihasilkan dari tangan pengerajin profesional yang berdasarkan keinginan pelanggan.';
}
