<?php
return [
    'login' => [
        'title' => 'Masuk ke akun Anda',
        'invalidUsernamePassword' => 'Nama pengguna atau kata kunci salah.',
        'lockedMinutes' => 'Login dikunci selama %minutes% menit',
        'attemptNumber' => '(upaya: %attempt1% dari %attempt2%)',
        'accountLocked' => 'Akun dikunci.',
        'rememberMe' => 'Ingatkan akun',
        'button' => 'Masuk'
    ],
    'dashboard' => [
        'menu' => 'Dasbor'
    ],
    'tickets' => [
        'menu' => 'Tiket',
        'showingResults' => 'Menampilkan %x% hingga %y% dari %z%',
        'totalReplies' => '%number% balasan',
        'id' => 'ID tiket',
        'removeConfirmation' => 'Anda yakin ingin menghapus tiket ini?',
        'showOverdueOnly' => 'Tampilkan hanya tiket yang lewat waktu',
        'active' => 'Aktif',
        'attachmentRemoved' => 'Lampiran telah dihapus.',
        'messageSent' => 'Pesan Anda telah dikirim.',
        'newTicket' => 'Tiket baru',
        'submitNewTicket' => 'Kirimkan tiket baru',
        'fullName' => 'Opsional. Jika tiket akan dikirim ke klien yang sudah ada, maka Anda dapat memasukkan email.',
        'departments' => 'Departemen',
        'agentsAssigned' => 'Agen ditugaskan',
        'departmentsRemoveConfirmation' => 'Anda yakin ingin menghapus departemen ini dan tiketnya?',
        'departmentRemoved' => 'Departemen dan tiketnya telah dihapus.',
        'departmentUpdated' => 'Departemen telah diperbarui.',
        'editDepartment' => 'Ubah departemen',
        'newDepartment' => 'Departemen baru',
        'departmentCreated' => 'Departemen baru telah dibuat.'
    ],
    'account' => [
        'menu' => 'Akun',
        'online' => 'online',
        'loginLog' => 'Log masuk',
        'logout' => 'Keluar',
        'profile' => 'Profil',
        'changePassword' => 'Ubah kata sandi',
        'timezone' => 'Zona waktu',
        'timezoneDescription' => 'Jika Anda tidak memilih apapun, Anda akan menggunakan zona waktu default helpdesk.',
        'passwordUpdated' => 'Kata sandi telah diubah.',
        'profileUpdated' => 'Profil Anda telah diperbaharui.',
        'avatarRemoved' => 'Avatar telah dihapus.'
    ],
    'cannedResponses' => [
        'menu' => 'Tanggapan otomatis',
        'removeConfirmation' => 'Anda yakin ingin menghapus tanggapan otomatis ini?',
        'edit' => 'Edit tanggapan otomatis',
        'new' => 'Tanggapan otomatis baru'
    ],
    'kb' => [
        'menu' => 'Informasi Dasar',
        'articles' => 'Artikel',
        'categories' => 'Kategori',
        'newCategory' => 'Kategori baru',
        'category' => 'Kategori',
        'editCategory' => 'Ubah kategori',
        'addSubcategory' => 'Tambahkan subkategori',
        'newArticle' => 'Artikel baru',
        'removeCategory' => 'Hapus kategori',
        'removeConfirmation' => 'Anda yakin ingin menghapus kategori ini beserta subkategori dan artikelnya?',
        'categoryRemoved' => 'Kategori telah dihapus.',
        'categoryCreated' => 'Kategori baru telah dibuat.',
        'categoryUpdated' => 'Kategori telah diperbaharui.',
        'article' => 'Artikel',
        'author' => 'Penulis',
        'editArticle' => 'Ubah artikel',
        'removeArticleConfirmation' => 'Apakah Anda yakin akan menghapus artikel ini?'
    ],
    'agents' => [
        'menu' => 'Agen',
        'agentRemoved' => 'Agen telah dihapus.',
        'registration' => 'Registrasi',
        'lastLogin' => 'Login terakhir',
        'administrator' => 'Administrator',
        'agent' => 'Agen',
        'edit' => 'Ubah agen',
        'new' => 'Agen baru',
        'informationUpdated' => 'Informasi agen telah diperbaharui.',
        'removeConfirmation' => 'Anda yakin ingin menghapus agen ini?',
        'agentCreated' => 'Agen baru telah dibuat.',
        'assignedDepartments' => 'Departemen yang ditugaskan'
    ],
    'settings' => [
        'menu' => 'Setup',
        'general' => 'Pengaturan umum',
        'security' => 'Pengaturan keamanan',
        'tickets' => 'Pengaturan tiket',
        'kb' => 'Pengaturan Artikel Informasi Dasar',
        'emailAddresses' => 'Alamat email',
        'emailTemplates' => 'Template email',
        'changeLogo' => 'Ubah logo',
        'logoRestored' => 'Logo default telah dikembalikan.',
        'logoChanged' => 'Logo telah diubah.',
        'brandName' => 'Nama merk',
        'brandNameDescription' => 'Nama perusahaan akan digunakan untuk menandai pusat dukungan dan email keluar. Misalnya: HelpDeskZ Inc.',
        'windowTitle' => 'Judul Website',
        'windowTitleDescription' => 'Ini adalah judul yang muncul pada tab browser. Jika halaman helpdesk Anda ditandai, ini akan menjadi judul / nama halaman situs.',
        'pageSize' => 'Ukuran halaman default',
        'pageSizeDescription' => 'Pilih jumlah item yang ditampilkan per halaman.',
        'dateFormat' => 'Format tanggal',
        'dateFormatDescription' => 'Tentukan format tanggal untuk pengguna lainnya. [a]Lihat tabel pemformatan tanggal PHP[/a]',
        'defaultTimezone' => 'Zona waktu default',
        'defaultTimezoneDescription' => 'Pilih zona waktu default untuk klien atau staf baru, ini akan diterapkan jika klien atau staf tidak memilih apapun pada preferensi mereka.',
        'defaultServerTimezone' => 'Zona waktu server default',
        'maintenanceMode' => 'Mode perawatan',
        'maintenanceMessage' => 'Pesan perawatan',
        'recaptchaStatus' => 'Status reCAPTCHA',
        'siteKey' => 'Site key',
        'privateKey' => 'Private key',
        'maxLoginAttempts' => 'Jumlah percobaan login maksimum',
        'minutesIpLocking' => 'Menit penguncian IP setelah melebihi percobaan login maksimum',
        'updated' => 'Pengaturan telah diperbaharui.',
        'displayOrderReplies' => 'Tampilkan urutan balasan tiket',
        'ticketsPerPage' => 'Tiket per halaman',
        'ticketsPerPageDescription' => 'Jumlah maksimum tiket untuk ditampilkan sebelum membagi di beberapa halaman.',
        'repliesPerPage' => 'Balasan per halaman',
        'repliesPerPageDescription' => 'Jumlah maksimum balasan tiket untuk ditampilkan sebelum membagi ke beberapa halaman.',
        'defaultDeadline' => 'Batas waktu balasan default',
        'defaultDeadlineDescription' => 'Jika agen tidak ditanggapi dalam jam-jam ini, tiket akan ditandai sebagai lewat waktu.',
        'defaultAutoClose' => 'Waktu default untuk menutup tiket',
        'defaultAutoCloseDescription' => 'Jika klien tidak merespon setelah jam-jam ini, tiket akan ditutup secara otomatis.',
        'allowAttachments' => 'Izinkan lampiran',
        'numberAttachments' => 'Jumlah lampiran diperbolehkan',
        'maxUploadSize' => 'Ukuran unggah maksimal',
        'maxUploadSizeDescription' => 'Menurut konfigurasi PHP Anda, tidak boleh lebih tinggi dari %size%',
        'allowedFileTypes' => 'Jenis berkas yang diperbolehkan',
        'allowedFileTypesDescription' => 'Masukkan ekstensi berkas yang diizinkan untuk lampiran yang dipisahkan dengan koma.',
        'newestReplyFirst' => 'Balasan terbaru dulu',
        'oldestReplyFirst' => 'Balasan yang lama dulu',
        'articlesUnderCategory' => 'Artikel untuk ditampilkan di bawah kategori',
        'charLimitArticlePreview' => 'Batas karakter pratinjau artikel',
        'charLimitArticlePreviewDescription' => 'Jumlah maksimum karakter untuk ditampilkan di bawah pratinjau artikel.',
        'popularArticles' => 'Jumlah artikel populer untuk ditampilkan',
        'newestArticles' => 'Jumlah artikel terbaru untuk ditampilkan',
        'editEmailTemplate' => 'Edit template email',
        'defaultEmailAddressDescription' => 'Alamat email default digunakan untuk mengirim pemberitahuan atau pesan dari departemen yang tidak mempunyai alamat email terkait.',
        'newEmailAddress' => 'Alamat email baru',
        'emailDeletionConfirm' => 'Anda yakin ingin menghapus email ini?',
        'outgoing' => 'Outgoing',
        'host' => 'Host',
        'port' => 'Port',
        'encryption' => 'Enkripsi',
        'incoming' => 'Incoming',
        'incomingInformation' => 'Sistem akan menghapus semua email dari kotak surat setelah diunduh. Ini dilakukan untuk memastikan kinerja terbaik untuk proses penanganan email di sisi server web. Jika Anda menginginkan cadangan email, maka kami sarankan untuk membuat kotak surat baru tempat Anda meneruskan semua email masuk.',
        'editEmailAddress' => 'Edit alamat email',
        'emailTemplateUpdated' => 'Template email telah diupdate.',
        'defaultEmailChanged' => 'Alamat email defailt telah diubah.',
        'emailRemoved' => 'Alamat email telah dihapus.',
        'smtpHost' => 'SMTP Host',
        'smtpPort' => 'SMTP Port',
        'smtpEncryption' => 'Enkripsi SMTP',
        'incomingHost' => 'Incoming Host',
        'incomingPort' => 'Incoming Port',
        'incomingUsername' => 'Incoming Username',
        'incomingPassword' => 'Incoming Password',
        'emailCreated' => 'Email baru telah ditambahkan.',
        'emailUpdated' => 'Email telah diupdate.',
    ],
    'tools' => [
        'menu' => 'Alat',
        'customFields' => 'Custom fields',
        'fieldTitle' => 'Judul Custom fields',
        'fieldType' => 'Tipe Custom fields',
        'required' => 'Wajib',
        'newCustomField' => 'Custom fields baru',
        'editCustomField' => 'Ubah Custom fields',
        'textField' => 'Bidang teks',
        'textArea' => 'Area teks',
        'checkbox' => 'Kotak centang',
        'radio' => 'Radio',
        'dropdownSelect' => 'Pilih drop-down',
        'date' => 'Tanggal',
        'defaultValue' => 'Nilai default',
        'options' => 'Opsi',
        'optionsDescription' => ' Masukkan satu opsi per baris. Setiap baris akan menjadi pilihan yang dapat dipilih pelanggan Anda',
        'select' => 'Pilih',
        'customFieldInserted' => 'Custom fields baru telah dibuat.',
        'customFieldUpdated' => 'Custom fields telah diperbaharui.',
        'customFieldConfirm' => 'Anda yakin ingin menghapus custom field ini?',
        'invalidCustomField' => 'Custom fields tidak valid.',
        'customFieldRemoved' => 'Custom field telah dihapus.'
    ],
    'users' => [
        'menu' => 'Pengguna',
        'newUser' => 'Pengguna baru',
        'editUser' => 'Ubah pengguna',
        'removeUserConfirmation' => 'Anda yakin ingin menghapus pengguna ini dan tiketnya?',
        'userRemoved' => 'Pengguna telah dihapus.',
        'notifyNewAccount' => 'Kirimkan email ke pengguna dengan informasi akun',
        'accountCreated' => 'Akun pengguna telah dibuat.',
        'accountUpdated' => 'Akun pengguna telah diperbaharui.'
    ],
    'form' => [
        'username' => 'Nama pengguna',
        'password' => 'Kata sandi',
        'searchTicket' => 'Cari tiket',
        'keyword' => 'Kata kunci',
        'dateOpened' => 'Tanggal dibuka',
        'lastUpdate' => 'Pembaharuan terakhir',
        'department' => 'Departemen',
        'allDepartments' => 'Semua departemen',
        'status' => 'Status',
        'search' => 'Cari',
        'open' => 'Buka',
        'answered' => 'Dijawab',
        'awaiting_reply' => 'Menunggu balasan',
        'in_progress' => 'Dalam proses',
        'closed' => 'Tutup',
        'overdue' => 'Lewat waktu',
        'todayAt' => 'Hari ini di %date%',
        'yesterdayAt' => 'Kemarin pada %date%',
        'subject' => 'Judul',
        'lastReply' => 'Balasan terakhir',
        'priority' => 'Prioritas',
        'massAction' => 'Aksi masa',
        'noChange' => 'Tidak ada perubahan',
        'submit' => 'Kirim',
        'delete' => 'Hapus',
        'cancel' => 'Batal',
        'general' => 'Umum',
        'reply' => 'Balasan',
        'createdOn' => 'Dibuat pada tanggal %date%',
        'updatedOn' => 'Diperbaharui pada tanggal %date%',
        'save' => 'Simpan',
        'to' => 'Kepada',
        'quickInsert' => 'Sisipkan cepat',
        'attachments' => 'Lampiran',
        'allowedFiles' => 'Berkas yang diperbolehkan',
        'browse' => 'Cari',
        'chooseFile' => 'Pilih berkas',
        'quote' => 'Quote',
        'staff' => 'Staf',
        'uploadImage' => 'Unggah gambar',
        'total' => 'Total',
        'download' => 'Unduh',
        'dropImageHere' => 'Lepaskan gambar di sini untuk mengunggah',
        'fullName' => 'Nama lengkap',
        'email' => 'Alamat email',
        'dateCreated' => 'Tanggal dibuat',
        'createdBy' => 'Dibuat oleh',
        'title' => 'Judul',
        'message' => 'Pesan',
        'specialTags' => 'Tag khusus',
        'clientName' => 'Nama klien',
        'clientEmail' => 'Alamat email klient',
        'goBack' => 'Kembali',
        'type' => 'Tipe',
        'public' => 'Publik',
        'private' => 'Tertutup',
        'action' => 'Aksi',
        'categoryName' => 'Nama kategori',
        'parentCategory' => 'Kategori utama',
        'rootCategory' => 'Root kategori',
        'view' => 'Lihat',
        'all' => 'Semua',
        'views' => 'Lihat',
        'displayOrder' => 'Tampilkan berdasarkan',
        'beginningList' => 'Di awal daftar',
        'endList' => 'Di akhir daftar',
        'afterItem' => 'Setelah %item%',
        'notModify' => 'Tidak di modifikasi',
        'never' => 'Tidak pernah',
        'active' => 'Aktif',
        'locked' => 'Terkunci',
        'leaveBlankNotChange' => 'Biarkan kosong untuk tidak mengubahnya.',
        'yes' => 'Iya',
        'no' => 'Tidak',
        'enable' => 'Aktifkan',
        'disable' => 'Non aktifkan',
        'default' => 'Default',
        'setDefault' => 'Set default',
        'edit' => 'Ubah',
        'emailName' => 'Nama email',
        'none' => 'None',
        'signature' => 'Tanda tangan',
        'newPassword' => 'Kata sandi baru',
        'existingPassword' => 'Kata sandi eksisting',
        'confirm' => 'Konfirmasi',
        'enterExistingPassword' => 'Masukan kata sandi eksisting.',
        'enterNewPassword' => 'Masukan kata sandi baru.',
        'manage' => 'Kelola',
        'avatar' => 'Avatar',
        'deleteAvatar' => 'Hapus avatar',
        'user' => 'Pengguna',
    ],
    'error' => [
        'recordsNotFound' => 'Records not found.',
        'noItemsSelected' => 'You did not select any ticket.',
        'invalidCannedResponse' => 'Invalid canned response.',
        'ticketNotFound' => 'Ticket was not found.',
        'ticketNotPermission' => 'You don\'t have permissions to view this ticket.',
        'invalidDepartment' => 'Invalid department.',
        'invalidStatus' => 'Invalid status.',
        'invalidPriority' => 'Invalid priority.',
        'enterMessage' => 'Enter your message.',
        'enterValidEmail' => 'Enter a valid e-mail address.',
        'enterSubject' => 'Enter the subject.',
        'fileNotAllowed' => 'File is not allowed.',
        'fileBig' => 'File is too big. Maximum size is %size%',
        'enterTitle' => 'Enter the title',
        'enterCategoryName' => 'Enter category name.',
        'selectParentCategory' => 'Select a valid parent category.',
        'selectCategoryType' => 'Select category type.',
        'selectCategory' => 'Select a valid category.',
        'selectArticleType' => 'Select article type.',
        'enterContent' => 'Enter the content.',
        'enterDepartmentName' => 'Enter department name.',
        'selectDepartmentType' => 'Select a valid type of department.',
        'enterFullName' => 'Enter the full name.',
        'enterUsername' => 'Enter a valid username.',
        'usernameTaken' => 'Username is being used by other agent.',
        'emailTaken' => 'Email is being used by other user.',
        'selectTypeAccess' => 'Select a valid access type.',
        'enterPassword' => 'Enter a valid password, it must be at least 6 characters in length.',
        'selectLogo' => 'Select a valid image for logo.',
        'logoSize' => 'Logo is too big. Maximum size is %size%',
        'uploadingLogo' => 'Error uploading logo, try again.',
        'enterSiteName' => 'Enter the brand name.',
        'enterWindowTitle' => 'Enter the window title.',
        'enterPageSize' => 'Enter a valid page size.',
        'enterDateFormat' => 'Enter the date format.',
        'selectTimezone' => 'Select a valid timezone.',
        'selectCaptchaStatus' => 'Select captcha status.',
        'enterSiteKey' => 'Enter the site key.',
        'enterPrivateKey' => 'Enter the private key.',
        'enterMaxAttempts' => 'Enter a valid number for maximum login attempts.',
        'enterMinutesIpLocking' => 'Enter a valid number for minutes of IP locking.',
        'emailExists' => 'Email address already exists.',
        'selectOutgoing' => 'Select a valid type of outgoing email',
        'selectIncoming' => 'Select a valid type of incoming email',
        'emailTakenDepartment' => 'Other email has taken this support department.',
        'passwordsNotMatches' => 'The new passwords entered do not match.',
        'wrongExistingPassword' => 'Your existing password is incorrect.',
        'passwordTooShort' => 'The new password must be at least 6 characters in length.',
        'selectDepartment' => 'Select a department.',
        'departmentNotExist' => 'Selected department does not exist.'
    ],
    'twoFactor' => [
        'title' => 'Two-Factor Authentication',
        'info' => 'Protect your account with high security log in.',
        'downloadApp' => ' Download the app for android or %1%iPhone%0% and %2%iPad%0%',
        'secretKey' => 'Secret Key',
        'verificationCode' => 'Verification Code',
        'enter2FA' => 'Enter the 6 digits from your mobile App.',
        'backupCode' => 'Save this code!',
        'activate' => 'Activate Two-Factor Authentication',
        'deactivate' => 'Deactivate Two-Factor Authentication',
        'activated' => 'Two-Factor authentication has been activated.',
        'deactivated' => 'Two-Factor authentication was deactivated.',
        'error' => [
            'isActive' => 'Two-Factor authentication is already active.',
            'invalidCode' => 'Invalid verification code.',
            'invalidPassword' => 'Invalid password.'
        ]
    ]
];
