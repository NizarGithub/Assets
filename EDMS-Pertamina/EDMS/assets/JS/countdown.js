// KONFIGURASI
var menit = 1; // Lamanya hitung mundur (dalam menit)
var detik = 5; // Detik standar (hitungan detik normalnya)
var penghitung_detik = detik; // Set variabel detik yang lain untuk dimanipulasi
// HITUNG MUNDUR
penghitung_detik = '';
function hitung_mundur() {
	penghitung_detik--;
	 // Setiap siklus 1 detik mengurangi nilainya 1 poin
	if (penghitung_detik == -1) { 
	// Deteksi detik ketika nilainya "0"
		menit--; 
		// Setiap siklus 1 menit mengurangi nilainya 1 poin
		penghitung_detik = detik; 
		// Me-reset detik untuk memulai hitung mundur menit yang baru
		if (menit <= -1) { 
		// Hitung mundur selesai
		menit = 0;penghitung_detik = 0;
		 // Menset menit dan detik ke "0"
		clearTimeout(penghitung); 
		// Stop hitung mundur
		}
	}
	if (document.getElementById) {
		document.getElementById("hitung_mundur_tampil").innerHTML='Menunggu '+penghitung_detik+ ' detik.<hr><span style="color: #aaa;  font-size: 18px"> Diarahkan otomatis ke login panel ... </span>  ';
		 // Memasukkan nilai variabel menit dan detik untuk ditampilkan
	}
	penghitung=setTimeout("hitung_mundur()", 1000); 
	// Set siklus penghitungan mundur (standar: 1 detik)
}


// INISIALISASI
if (document.all||document.getElementById)
document.write(' <b id="hitung_mundur_tampil">'+penghitung_detik+'</b>');
/*document.write('<div class="progress md progress-striped active">
                   <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60"
                   aria-valuemin="0" aria-valuemax="60"
                   style="width: 50%">
                   <span class="sr-only"></span> 
                   
                   </div>
                  </div>');*/
 // Format tampilan hitung mundur di antarmuka
