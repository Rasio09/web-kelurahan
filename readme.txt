bantu saya secara rinci mengembangkan website untuk membangun website kelurahan surat menyurat dengan menggunakan framework laravel dari instalasi hingga jadi.
adapun ketentuannya sebagai berikut ini:
1. membuatkan beserta databasenya yang dibutuhkan menggunakan xampp.
2. didalamnya ada fitur :
   - login sesuai hak akses (admin, user, kepala). admin hanya bisa menambahkan user sesuai diinputkan dan tersimpan di databasenya. lalu user ini akan menuju halaman dashboard utama dan ada pilihan menu untuk membuat surat dengan inputan nama pemohon dan tujuan suratnya. kepala ini melihat hasil dari inputan user untuk melakukan verifikasi suratnya.
    - hasil semua akan tersimpan di database.
3. secara garis besar alurnya seperti ini
- admin sesuai hak akses hanya dapat menambahkan data user.
- user akan menginputkan untuk surat yang nantinya akan dikirimkan ke kepala terlebih dahulu untuk diverifikasi setelah dudah diverifikasi oleh kepala akan dapat melihat hasil dan dapat dicetak, namun jika belum di verifikasi maka tidak bisa dilihat atau dicetak.
- kepala verifikasi hasil inputan user untuk disahkan.