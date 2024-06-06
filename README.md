IMPLEMENTASI INTERPOLASI

Proyek ini bertujuan untuk memodelkan hubungan antara tegangan yang diberikan kepada baja tahan karat dan waktu yang diperlukan hingga baja tersebut patah menggunakan interpolasi polinom Lagrange dan Newton. Data eksperimen yang diberikan digunakan untuk membangun model interpolasi, dan hasilnya dipresentasikan dalam bentuk grafik.

Penjelasan Alur Kode:

Interpolasi Lagrange:

Fungsi lagrangeInterpolation menghitung nilai interpolasi untuk sebuah titik menggunakan polinom Lagrange.
Data input diberikan sebagai array x dan y, dan nilai interpolasi dihitung untuk x_point.

Interpolasi Newton:

Fungsi newtonInterpolation menghitung nilai interpolasi menggunakan metode polinom Newton.
Digunakan tabel selisih terbagi untuk menghitung koefisien polinom Newton.

Testing:

Kode testing memverifikasi hasil interpolasi dengan beberapa titik contoh.

Plotting:

Script Python digunakan untuk memplot hasil interpolasi bersama dengan data asli.
Menggunakan matplotlib untuk memvisualisasikan hasil interpolasi dalam grafik.