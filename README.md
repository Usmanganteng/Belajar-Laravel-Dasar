<b>PENGENALAN LARAVEL</b>
---
> - Laravel adalah kerangka kerja PHP sumber terbuka yang populer untuk pengembangan aplikasi web. Dengan menyediakan fitur-fitur seperti routing, manajemen database, dan sistem templating, Laravel membantu pengembang membangun aplikasi web dengan cepat dan efisien. Konsep pemrograman berbasis MVC digunakan untuk memisahkan logika bisnis dari presentasi. Dengan dokumentasi yang lengkap dan komunitas yang besar, Laravel menjadi pilihan yang populer bagi pengembang web.
---
<b>POINT UTAMA</b>
---
> #### Git 
> - Git dalam konteks Laravel adalah sistem kontrol versi yang digunakan untuk melacak perubahan kode, kolaborasi tim, dan manajemen kode sumber. Dengan Git, pengembang dapat melakukan commit, membuat cabang, menyatukan kode, dan memantau riwayat perubahan kode dalam proyek Laravel. Ini membantu dalam mengelola proyek dengan lebih terstruktur dan efisien.
---
> #### Artisan
> - Artisan adalah utilitas baris perintah dalam Laravel yang memungkinkan pengembang untuk menjalankan tugas-tugas pengembangan seperti membuat kontroler, migrasi database, dan menjalankan pengujian dengan mudah melalui baris perintah.
---
> #### Request Lifecycle
> - Request Lifecycle dalam Laravel adalah serangkaian tahapan yang terjadi saat suatu permintaan HTTP diterima oleh aplikasi Laravel hingga respon dikirim kembali. Tahapan tersebut meliputi routing, penggunaan middleware, eksekusi kontroler, interaksi dengan basis data jika menggunakan Eloquent ORM, dan akhirnya mengirimkan respon HTTP kepada pengguna. Ini membantu pengembang memahami proses internal yang terjadi di dalam Laravel saat menangani permintaan.
---
> #### Testing
> - Testing dalam Laravel adalah praktik untuk memeriksa fungsionalitas dan kualitas aplikasi yang dibangun menggunakan kerangka kerja ini. Ini mencakup pengujian unit, fungsional, dan integrasi. Laravel menyediakan alat bawaan seperti PHPUnit dan Dusk untuk melakukan pengujian. Pengujian membantu menjamin kualitas kode, mendeteksi bug, dan memastikan aplikasi berjalan sesuai yang diinginkan sebelum dirilis.
---
> #### Environment
> - Environment dalam Laravel adalah pengaturan konfigurasi aplikasi berdasarkan lingkungan di mana aplikasi berjalan, seperti pengembangan, pengujian, dan produksi. Ini disimpan dalam file `.env` dan memungkinkan pengembang untuk dengan mudah mengelola variabel lingkungan tanpa harus mengubah kode secara langsung. Ini membantu memastikan konsistensi dan keamanan aplikasi di berbagai lingkungan.
---
> #### Configuration
> - Configurasi dalam Laravel adalah pengaturan yang mengontrol perilaku dan fungsi aplikasi, seperti koneksi database, konfigurasi cache, dan penyedia layanan. Ini disimpan dalam file-file PHP di direktori `config` dan diakses menggunakan API Laravel seperti `config().` Konfigurasi memungkinkan Anda menyesuaikan aplikasi, memisahkan logika, dan memastikan portabilitas.
---
> #### Configuration Cache
> - Configuration Cache dalam Laravel adalah mekanisme untuk meningkatkan kinerja aplikasi dengan menyimpan konfigurasi aplikasi ke dalam cache, memungkinkan aplikasi untuk membaca konfigurasi lebih cepat dengan menggabungkan file konfigurasi menjadi satu file yang disimpan dalam cache. Ini berguna untuk lingkungan produksi di mana kinerja aplikasi sangat penting.
---
> #### Service Container 
> - Service Container dalam Laravel adalah wadah untuk mengelola objek dan ketergantungan di aplikasi. Ini mengikat abstraksi dengan implementasi, dan saat diminta, menciptakan dan mengembalikan instance objek yang sesuai. Service Container memfasilitasi Dependency Injection, membuat kode lebih bersih, mudah diuji, dan fleksibel. Ini adalah komponen kunci dalam arsitektur Laravel.
---
> #### Dependency Injection
> - Dependency Injection (DI) dalam Laravel adalah teknik untuk menyediakan objek yang diperlukan ke dalam kelas dari luar tanpa membuatnya di dalam kelas tersebut. Ini memungkinkan pemisahan ketergantungan antar kelas, meningkatkan fleksibilitas, dan memudahkan pengujian. Dalam Laravel, DI sering digunakan untuk menyisipkan objek seperti model Eloquent ke dalam kelas seperti kontroler.
---
> #### Service Provider
> - Service Provider dalam Laravel adalah kelas yang mendaftarkan komponen-komponen aplikasi ke dalam Service Container. Ini memfasilitasi proses bootstrapping dan inisialisasi aplikasi. Setiap Service Provider memiliki metode register() untuk mendaftarkan komponen dan boot() untuk menjalankan kode setelah pendaftaran. Service Provider memungkinkan aplikasi menjadi modular dan terorganisir dengan baik, serta mempermudah penggunaan paket eksternal atau komponen pihak ketiga.
---
> #### Facades
> - Facades dalam Laravel menyediakan antarmuka sederhana untuk mengakses layanan-layanan yang tersedia di dalam Service Container tanpa harus mengaksesnya langsung. Mereka memberikan cara intuitif untuk mengakses komponen-komponen inti Laravel seperti routing, cache, dan lainnya dengan sintaks yang bersih dan mudah dipahami. Facades membuatnya mudah untuk mengakses layanan-layanan Laravel dari mana saja di dalam aplikasi Anda.
---
> #### Routing
> - Routing dalam Laravel adalah proses mengarahkan permintaan HTTP dari pengguna ke kode yang tepat dalam aplikasi. Ini didefinisikan dalam file `routes/web.php` untuk rute web dan `routes/api.php` untuk rute API. Anda dapat menentukan rute menggunakan metode seperti `get()`, `post()`, dan lainnya, serta memberikan aksi yang harus dijalankan. Routing memungkinkan Anda membuat aplikasi responsif dan dinamis dengan menanggapi permintaan pengguna secara tepat.
---
> #### View
> - View dalam Laravel adalah bagian dari aplikasi yang bertugas menampilkan konten kepada pengguna akhir. Mereka adalah file-template HTML dengan logika template yang dapat menampilkan data dari kontroler atau komponen lain. View disimpan dalam direktori `resources/views` dengan ekstensi `.blade.php.` Laravel menggunakan Blade sebagai mesin template, memungkinkan pembuatan tampilan dengan sintaks yang kuat dan ekspresif. View memungkinkan pemisahan logika bisnis dari presentasi, membantu menciptakan tampilan yang bersih dan terstruktur.
---
> #### Static File
> - Static file dalam Laravel adalah berkas seperti gambar, file CSS, dan JavaScript yang diperlukan oleh aplikasi web dan tidak diproses oleh server Laravel. Mereka disimpan di dalam direktori `public` dan disajikan langsung oleh server web saat diakses melalui peramban, membantu mengelola aset-aset statis dengan mudah.
---
> #### Route Parameter
> - Route Parameter dalam Laravel adalah bagian dari URL yang menangkap nilai dinamis dan meneruskannya ke aplikasi. Mereka memungkinkan pembuatan rute dinamis dengan menentukan nilai yang ditangkap di dalam kurung kurawal {} dalam definisi rute. Dengan ini, aplikasi dapat menanggapi berbagai permintaan berdasarkan nilai yang dimasukkan dalam URL.
---
> #### Named Route
> - Named Route dalam Laravel adalah cara untuk memberikan nama yang bermakna kepada sebuah rute yang telah didefinisikan. Ini memungkinkan Anda merujuk rute dengan mudah dari berbagai bagian kode tanpa harus mengganti URL secara langsung, membantu menjaga konsistensi dan fleksibilitas dalam pengelolaan rute.
---
> #### Request Input
> - Request Input dalam Laravel adalah data yang dikirimkan dari klien ke aplikasi Laravel melalui permintaan HTTP, seperti formulir atau query string. Anda dapat mengakses data ini menggunakan helper request(), Dependency Injection, atau metode spesifik yang disediakan oleh Laravel. Ini memungkinkan Anda untuk mengambil dan memproses data yang dikirimkan oleh pengguna.
---
> #### File Storage
> - File Storage dalam Laravel adalah fitur yang memungkinkan Anda menyimpan dan mengelola file di dalam aplikasi Anda. Ini menyediakan berbagai driver penyimpanan, termasuk lokal dan cloud storage seperti Amazon S3. Dengan fitur ini, Anda dapat dengan mudah menyimpan file yang diunggah oleh pengguna, mengambilnya untuk ditampilkan atau diunduh, dan melakukan operasi lainnya terkait dengan pengelolaan file dalam aplikasi Laravel Anda.
---
> #### Response
> - Response dalam Laravel adalah output yang dihasilkan oleh aplikasi sebagai tanggapan atas permintaan HTTP dari klien. Ini dapat berupa teks, JSON, tampilan, file, atau pengalihan ke URL lain. Dalam Laravel, Anda dapat menghasilkan respons menggunakan berbagai metode seperti `response()`, `view()`, `json()`, atau `redirect()`. Ini memungkinkan Anda untuk berkomunikasi dengan pengguna atau klien Anda dengan cara yang efisien dan efektif.
---
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
---
> - apa yang terjadi ketika data yang sudah tersimpan di dengan cookie kita ganti ke session 
---
  <b>KESIMPULAN</b>
---
> - Laravel adalah kerangka kerja aplikasi web PHP yang kuat dan ekspresif, memungkinkan pengembangan aplikasi web yang cepat dan efisien. Dengan fitur-fitur seperti Eloquent ORM, Blade Templating Engine, Artisan CLI, dan routing yang ekspresif, Laravel menyediakan alat yang kuat dan konsisten bagi pengembang. Dukungan dari paket-paket tambahan dan komunitas yang luas membuatnya menjadi pilihan utama untuk membangun aplikasi web modern.
---
