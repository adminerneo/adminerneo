<?php

namespace Adminer;

$translations = [
	// label for database system selection (MySQL, SQLite, ...)
	'Home' => null,
	'System' => 'Sistem',
	'Server' => 'Pelayan',
	'Username' => 'Nama pengguna',
	'Password' => 'Kata laluan',
	'Permanent login' => 'Log masuk kekal',
	'Login' => 'Log masuk',
	'Logout' => 'Log keluar',
	'Logged as: %s' => 'Log masuk sebagai: %s',
	'Logout successful.' => 'Log keluar berjaya.',
	'Invalid server or credentials.' => null,
	'Too many unsuccessful logins, try again in %d minute(s).' => 'Terlalu banyak percubaan log masuk yang gagal, sila cuba lagi dalam masa %d minit.',
	'Master password expired. <a href="https://www.adminer.org/en/extension/"%s>Implement</a> %s method to make it permanent.' => 'Kata laluan utama telah luput. <a href="https://www.adminer.org/en/extension/"%s>Gunakan</a> cara %s untuk mengekalkannya.',
	'Language' => 'Bahasa',
	'Invalid CSRF token. Send the form again.' => 'Token CSRF tidak sah. Sila hantar borang sekali lagi.',
	'If you did not send this request from Adminer then close this page.' => 'Jika anda tidak menghantar permintaan ini dari Adminer sila tutup halaman ini.',
	'No extension' => 'Tiada sambungan',
	'None of the supported PHP extensions (%s) are available.' => 'Sambungan PHP yang (%s) disokong tidak wujud.',
	'Connecting to privileged ports is not allowed.' => 'Penyambungan ke port yang istimewa tidak dibenarkan.',
	'Session support must be enabled.' => 'Sokongan sesi perlu diaktifkan.',
	'Session expired, please login again.' => 'Sesi telah luput, sila log masuk kembali.',
	'%s version: %s through PHP extension %s' => 'Versi %s: %s melalui sambungan PHP %s',
	'Refresh' => 'Segar kembali',

	// text direction - 'ltr' or 'rtl'
	'ltr' => 'ltr',

	'Privileges' => 'Keistimewaan',
	'Create user' => 'Bina pengguna',
	'User has been dropped.' => 'Pengguna telah dijatuhkan.',
	'User has been altered.' => 'Pengguna telah diubah.',
	'User has been created.' => 'Pengguna telah dibuat.',
	'Hashed' => 'Hashed',
	'Column' => 'Kolum',
	'Routine' => 'Rutin',
	'Grant' => 'Beri',
	'Revoke' => 'Batal',

	'Process list' => 'Senarai proses',
	'%d process(es) have been killed.' => '%d proses telah dihentikan.',
	'Kill' => 'Henti',

	'Variables' => 'Pembolehubah',
	'Status' => 'Status',

	'SQL command' => 'Arahan SQL',
	'%d query(s) executed OK.' => '%d query berjaya dilaksanakan.',
	'Query executed OK, %d row(s) affected.' => 'Query berjaya dilaksanakan, %d baris terjejas.',
	'No commands to execute.' => 'Tiada arahan untuk dilaksanakan.',
	'Error in query' => 'Ralat pada query',
	'ATTACH queries are not supported.' => 'Query berikut tidak disokong.',
	'Execute' => 'Laksana',
	'Stop on error' => 'Berhenti jika ralat',
	'Show only errors' => 'Paparkan jika ralat',
	// sprintf() format for time of the command
	'%.3f s' => '%.3f s',
	'History' => 'Sejarah',
	'Clear' => 'Bersih',
	'Edit all' => 'Ubah semua',

	'File upload' => 'Muat naik fail',
	'From server' => 'Dari pelayan',
	'Webserver file %s' => 'Fail pelayan sesawang %s',
	'Run file' => 'Jalankan fail',
	'File does not exist.' => 'Fail tidak wujud.',
	'File uploads are disabled.' => 'Muat naik fail dihalang.',
	'Unable to upload a file.' => 'Muat naik fail gagal.',
	'Maximum allowed file size is %sB.' => 'Saiz fail maksimum yang dibenarkan adalah %sB.',
	'Too big POST data. Reduce the data or increase the %s configuration directive.' => 'Data POST terlalu besar. Kecilkan data atau tingkatkan tetapan %s.',
	'You can upload a big SQL file via FTP and import it from server.' => 'Anda boleh muat naik fail SQL yang besar melalui FTP dan import melalui pelayan.',
	'You are offline.' => 'Anda sedang offline.',

	'Export' => 'Eksport',
	'Output' => 'Pengeluaran',
	'open' => 'buka',
	'save' => 'simpan',
	'Saving' => 'Menyimpan',
	'Format' => 'Format',
	'Data' => 'Data',

	'Database' => 'Pangkalan data',
	'Use' => 'Guna',
	'Select database' => 'Pilih pangkalan data',
	'Invalid database.' => 'Pangkalan data tidak sah.',
	'Database has been dropped.' => 'Pangkalan data telah dijatuhkan.',
	'Databases have been dropped.' => 'Pangkalan data telah dijatuhkan.',
	'Database has been created.' => 'Pangkalan data telah dibuat.',
	'Database has been renamed.' => 'Pangkalan data telah ditukar nama.',
	'Database has been altered.' => 'Pangkalan data telah diubah.',
	'Alter database' => 'Ubah pangkalan data',
	'Create database' => 'Bina pangkalan data',
	'Database schema' => 'Skema pangkalan data',

	// link to current database schema layout
	'Permanent link' => 'Pautan kekal',

	// thousands separator - must contain single byte
	',' => ',',
	'0123456789' => '0123456789',
	'Engine' => 'Enjin',
	'Collation' => 'Collation',
	'Data Length' => 'Panjang Data',
	'Index Length' => 'Panjang Indeks',
	'Data Free' => 'Data Free',
	'Rows' => 'Baris',
	'%d in total' => '%d secara keseluruhan',
	'Analyze' => 'Menganalisis',
	'Optimize' => 'Mengoptimum',
	'Vacuum' => 'Vacuum',
	'Check' => 'Periksa',
	'Repair' => 'Baiki',
	'Truncate' => 'Memangkas',
	'Tables have been truncated.' => 'Jadual telah dimangkaskan.',
	'Move to other database' => 'Pindahkan ke pangkalan data yang lain',
	'Move' => 'Pindah',
	'Tables have been moved.' => 'Jadual telah dipindahkan.',
	'Copy' => 'Salin',
	'Tables have been copied.' => 'Jadual telah disalin.',

	'Routines' => 'Rutin',
	'Routine has been called, %d row(s) affected.' => 'Rutin telah dipanggil, %d baris terjejas.',
	'Call' => 'Panggil',
	'Parameter name' => 'Nama pembolehubah',
	'Create procedure' => 'Bina prosedur',
	'Create function' => 'Bina fungsi',
	'Routine has been dropped.' => 'Rutin telah dijatuhkan.',
	'Routine has been altered.' => 'Rutin telah diubah.',
	'Routine has been created.' => 'Rutin telah dibuat.',
	'Alter function' => 'Ubah fungsi',
	'Alter procedure' => 'Ubah prosedur',
	'Return type' => 'Jenis Return',

	'Events' => 'Peristiwa',
	'Event has been dropped.' => 'Peristiwa telah dijatuhkan.',
	'Event has been altered.' => 'Peristiwa telah diubah.',
	'Event has been created.' => 'Peristiwa telah dibuat.',
	'Alter event' => 'Ubah peristiwa',
	'Create event' => 'Bina peristiwa',
	'At given time' => 'Pada masa tersebut',
	'Every' => 'Setiap',
	'Schedule' => 'Jadual',
	'Start' => 'Mula',
	'End' => 'Habis',
	'On completion preserve' => 'Dalam melestarikan penyelesaian',

	'Tables' => 'Jadual',
	'Tables and views' => 'Jadual dan pandangan',
	'Table' => 'Jadual',
	'No tables.' => 'Tiada jadual.',
	'Alter table' => 'Ubah jadual',
	'Create table' => 'Bina jadual',
	'Table has been dropped.' => 'Jadual telah dijatuhkan.',
	'Tables have been dropped.' => 'Jadual telah dijatuhkan.',
	'Tables have been optimized.' => 'Jadual telah dioptimumkan.',
	'Table has been altered.' => 'Jadual telah diubah.',
	'Table has been created.' => 'Jadual telah dibuat.',
	'Table name' => 'Nama jadual',
	'Show structure' => 'Paparkan struktur',
	'engine' => 'enjin',
	'collation' => 'collation',
	'Column name' => 'Nama kolum',
	'Type' => 'Jenis',
	'Length' => 'Kepanjangan',
	'Auto Increment' => 'Kenaikan Auto',
	'Options' => 'Pilihan',
	'Comment' => 'Komen',
	'Default value' => 'Nilai lalai',
	'Drop' => 'Jatuh',
	'Drop %s?' => 'Jatuhkan %s?',
	'Are you sure?' => 'Anda pasti?',
	'Size' => 'Saiz',
	'Compute' => 'Kira',
	'Move up' => 'Gerak ke atas',
	'Move down' => 'Gerak ke bawah',
	'Remove' => 'Buang',
	'Maximum number of allowed fields exceeded. Please increase %s.' => 'Bilangan medan telah melebihi had yang dibenarkan. Sila tingkatkan %s.',

	'Partition by' => 'Partition mengikut',
	'Partition' => null,
	'Partitions' => 'Partition',
	'Partition name' => 'Nama partition',
	'Values' => 'Nilai',

	'View' => 'Papar',
	'Materialized view' => 'Paparan yang menjadi kenyataan',
	'View has been dropped.' => 'Paparan telah dijatuhkan.',
	'View has been altered.' => 'Paparan telah diubah.',
	'View has been created.' => 'Paparan telah dibuat.',
	'Alter view' => 'Ubah paparan',
	'Create view' => 'Bina paparan',

	'Indexes' => 'Indeks',
	'Indexes have been altered.' => 'Indeks telah diubah.',
	'Alter indexes' => 'Ubah indeks',
	'Add next' => 'Tambah yang seterusnya',
	'Index Type' => 'Jenis Indeks',
	'Column (length)' => 'Kolum (kepanjangan)',

	'Foreign keys' => 'Kunci asing',
	'Foreign key' => 'Kunci asing',
	'Foreign key has been dropped.' => 'Kunci asing telah dijatuhkan.',
	'Foreign key has been altered.' => 'Kunci asing telah diubah.',
	'Foreign key has been created.' => 'Kunci asing telah dibuat.',
	'Target table' => 'Jadual sasaran',
	'Change' => 'Tukar',
	'Source' => 'Sumber',
	'Target' => 'Sasaran',
	'Add column' => 'Tambah kolum',
	'Alter' => 'Ubah',
	'Add foreign key' => 'Tambah kunci asing',
	'ON DELETE' => 'ON DELETE',
	'ON UPDATE' => 'ON UPDATE',
	'Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.' => 'Kolum sumber dan sasaran perlu mempunyai jenis data yang sama, indeks diperlukan pada kolum sasaran dan data yang dirujuk wujud.',

	'Triggers' => ' Pencetus',
	'Add trigger' => 'Tambah pencetus',
	'Trigger has been dropped.' => 'Pencetus telah dijatuhkan.',
	'Trigger has been altered.' => 'Pencetus telah diubah.',
	'Trigger has been created.' => 'Pencetus telah dibuat.',
	'Alter trigger' => 'Ubah pencetus',
	'Create trigger' => 'Buat pencetus',
	'Time' => 'Masa',
	'Event' => 'Peristiwa',
	'Name' => 'Nama',

	'select' => 'pilih',
	'Select' => 'Pilih',
	'Select data' => 'Pilih data',
	'Functions' => 'Fungsi',
	'Aggregation' => 'Pengagregatan',
	'Search' => 'Cari',
	'anywhere' => 'di mana-mana',
	'Search data in tables' => 'Cari data dalam jadual',
	'as a regular expression' => null,
	'Sort' => 'Susun',
	'descending' => 'menurun',
	'Limit' => 'Had',
	'Limit rows' => 'Had baris',
	'Text length' => 'Kepanjangan teks',
	'Action' => 'Aksi',
	'Full table scan' => 'Imbasan penuh jadual',
	'Unable to select the table' => 'Pemilihan jadual tidak berjaya',
	'No rows.' => 'Tiada baris.',
	'%d / ' => '%d / ',
	'%d row(s)' => '%d baris',
	'Page' => 'Halaman',
	'last' => 'akhir',
	'Load more data' => 'Load lebih data',
	'Loading' => 'Loading',
	'Whole result' => 'Keputusan keseluruhan',
	'%d byte(s)' => ['%d byte', '%d bytes'],

	'Import' => 'Import',
	'%d row(s) have been imported.' => '%d baris telah diimport.',
	'File must be in UTF-8 encoding.' => 'Fail mesti dalam pengekodan UTF-8.',

	// in-place editing in select
	'Modify' => 'Pinda',
	'Ctrl+click on a value to modify it.' => 'Ctrl+click pada nilai untuk meminda.',
	'Use edit link to modify this value.' => 'Guna pautan ubah untuk meminda nilai ini.',

	// %s can contain auto-increment value
	'Item%s has been inserted.' => 'Item%s telah dimasukkan.',
	'Item has been deleted.' => 'Item telah dipadamkan.',
	'Item has been updated.' => 'Item telah dikemaskini.',
	'%d item(s) have been affected.' => '%d item telah terjejas.',
	'New item' => 'Item baru',
	'original' => 'asli',
	// label for value '' in enum data type
	'empty' => 'kosong',
	'edit' => 'ubah',
	'Edit' => 'Ubah',
	'Insert' => 'Masukkan',
	'Save' => 'Simpan',
	'Save and continue edit' => 'Simpan dan sambung ubah',
	'Save and insert next' => 'Simpan dan masukkan seterusnya',
	'Selected' => 'Terpilih',
	'Clone' => 'Klon',
	'Delete' => 'Padam',
	'You have no privileges to update this table.' => 'Anda tidak mempunyai keistimewaan untuk mengemaskini jadual ini.',

	'E-mail' => 'Emel',
	'From' => 'Dari',
	'Subject' => 'Subjek',
	'Attachments' => 'Lampiran',
	'Send' => 'Hantar',
	'%d e-mail(s) have been sent.' => '%d emel telah dihantar.',

	// data type descriptions
	'Numbers' => 'Nombor',
	'Date and time' => 'Tarikh dan masa',
	'Strings' => 'String',
	'Binary' => 'Binari',
	'Lists' => 'Senarai',
	'Network' => 'Rangkaian',
	'Geometry' => 'Geometri',
	'Relations' => 'Hubungan',

	'Editor' => 'Editor',
	// date format in Editor: $1 yyyy, $2 yy, $3 mm, $4 m, $5 dd, $6 d
	'$1-$3-$5' => '$1-$3-$5',
	// hint for date format - use language equivalents for day, month and year shortcuts
	'[yyyy]-mm-dd' => '[yyyy]-mm-dd',
	// hint for time format - use language equivalents for hour, minute and second shortcuts
	'HH:MM:SS' => 'HH:MM:SS',
	'now' => 'sekarang',
	'yes' => 'ya',
	'no' => 'tidak',

	// general SQLite error in create, drop or rename database
	'File exists.' => 'Fail wujud.',
	'Please use one of the extensions %s.' => 'Sila guna salah satu sambungan %s.',

	// PostgreSQL and MS SQL schema support
	'Alter schema' => 'Ubah skema',
	'Create schema' => 'Buat skema',
	'Schema has been dropped.' => 'Skema telah dijatuhkan.',
	'Schema has been created.' => 'Skema telah dibuat.',
	'Schema has been altered.' => 'Skema telah diubah.',
	'Schema' => 'Skema',
	'Invalid schema.' => 'Skema tidak sah.',

	// PostgreSQL sequences support
	'Sequences' => 'Turutan',
	'Create sequence' => 'Buat turutan',
	'Sequence has been dropped.' => 'Turutan telah dijatuhkan.',
	'Sequence has been created.' => 'Turutan telah dibuat.',
	'Sequence has been altered.' => 'Turutan telah diubah.',
	'Alter sequence' => 'Ubah turutan',

	// PostgreSQL user types support
	'User types' => 'Jenis pengguna',
	'Create type' => 'Buat jenis',
	'Type has been dropped.' => 'Jenis telah dijatuhkan.',
	'Type has been created.' => 'Jenis telah dibuat.',
	'Alter type' => 'Ubah jenis',

	'overwrite' => null,
	'DB' => null,
	'Warnings' => null,
	'Adminer does not support accessing a database without a password, <a href="https://www.adminer.org/en/password/"%s>more information</a>.' => null,
	'The action will be performed after successful login with the same credentials.' => null,
	'There is a space in the input password which might be the cause.' => null,
	'Unknown error.' => null,
	'Database does not support password.' => null,
	'Disable %s or enable %s or %s extensions.' => null,

	'Columns' => null,
	'Nullable' => null,
	'Default' => null,
	'Yes' => 'Ya',
	'No' => 'Tidak',
	'One Time Password' => null,
	'Invalid OTP code.' => null,

	'Schemas' => null,
	'No schemas.' => null,
	'Show schema' => null,
	'No driver' => null,
	'Database driver not found.' => null,
];
