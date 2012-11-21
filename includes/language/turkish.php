<?php
//TURKISH
if (!isset($_SESSION['settings']['cpassman_url'])) {
    $TeamPass_url = '';
} else {
    $TeamPass_url = $_SESSION['settings']['cpassman_url'];
}

$txt['account_is_locked'] = "Bu hesap kilitlenmiştir";
$txt['activity'] = "Aktivite";
$txt['add_button'] = "Ekle";
$txt['add_new_group'] = "Yeni bir klasör ekle";
$txt['add_role_tip'] = "Yeni bir rol ekle";
$txt['admin'] = "Yönetim";
$txt['admin_action'] = "Lütfen işleminizi onaylayınız";
$txt['admin_actions_title'] = "Özel işlemler";
$txt['admin_action_change_salt_key'] = "Change the main SALT Key";
$txt['admin_action_change_salt_key_tip'] = "Before changing the SALT key, please be sure to do a full backup of the database, and to put the tool in maintenance in order to avoid any users being logged.";
$txt['admin_action_check_pf'] = "Tüm kullanıcılar için kişisel klasörleri oluştur (eğer yoksa klasörleri yaratır)";
$txt['admin_action_db_backup'] = "Veritabanını yedekle";
$txt['admin_action_db_backup_key_tip'] = "Lütfen şifreleme anahtarını giriniz. Bu anahtarı başka bir yere kopyalayın. bu anahtar geri yüklemede sorulur (boş bırakılırsa şifreleme yapılmaz)";
$txt['admin_action_db_backup_start_tip'] = "Başla";
$txt['admin_action_db_backup_tip'] = "Veritabanınızı yeniden yükleyebilmek için yedek almanız sizin yararınızadır";
$txt['admin_action_db_clean_items'] = "Veritabanından kullanılmayan verileri kaldır";
$txt['admin_action_db_clean_items_result'] = "Öğeler silindi";
$txt['admin_action_db_clean_items_tip'] = "Sadece ilişkilendirilmiş klasörün silenmesinden sonra silenememiş öğeleri ve ilgili kayıtları siler. Bu işlem öncesinde yedek oluşturmanız tavsiye edilir.  ";
$txt['admin_action_db_optimize'] = "Veritabanını optimize et";
$txt['admin_action_db_restore'] = "Veritabanını geri yükle";
$txt['admin_action_db_restore_key'] = "Lütfen, Şifreleme Anahtarını Giriniz";
$txt['admin_action_db_restore_tip'] = "Yedekleme özelliği ile oluşturulmuş SQL yedek dosyası ile yapılmalıdır";
$txt['admin_action_purge_old_files'] = "Eski dosyaları sil";
$txt['admin_action_purge_old_files_result'] = "Dosyalar silindi";
$txt['admin_action_purge_old_files_tip'] = "Bu eylem 7 günden eski tüm geçici dosyaları silecektir";
$txt['admin_action_reload_cache_table'] = "Cache tablosunu yenile";
$txt['admin_action_reload_cache_table_tip'] = "This permits to reload the full content of table Cache. Can be usefull to be done sometimes.";
$txt['admin_backups'] = "Yedekler";
$txt['admin_emails'] = "Emails";
$txt['admin_emails_configuration'] = "Emails Configuration";
$txt['admin_emails_configuration_testing'] = "Configuration testing";
$txt['admin_email_auth'] = "SMTP server needs authentification";
$txt['admin_email_auth_pwd'] = "Authentification Password";
$txt['admin_email_auth_username'] = "Authentification Username";
$txt['admin_email_from'] = "Sender Email (from Email)";
$txt['admin_email_from_name'] = "Sender Name (from Name)";
$txt['admin_email_port'] = "Server Port";
$txt['admin_email_result_nok'] = "Email not sent ... check your configuration. See associated error: ";
$txt['admin_email_result_ok'] = "Email sent ... check your inbox.";
$txt['admin_email_send_backlog'] = "Send emails backlog (actually #nb_emails# emails)";
$txt['admin_email_send_backlog_tip'] = "This script permits to force the emails in the database to be sent.<br />This could take some time depending of the number of emails to send.";
$txt['admin_email_smtp_server'] = "SMTP server";
$txt['admin_email_test_body'] = "Hi,<br><br>Email sent successfully.<br><br>Cheers.";
$txt['admin_email_test_configuration'] = "Test the Email configuration";
$txt['admin_email_test_subject'] = "[TeamPass] Test email";
$txt['admin_error_no_complexity'] = "(<a href='index.php?page=manage_groups'>Tanımla?</a>)";
$txt['admin_error_no_visibility'] = "Bu öğeyi hiç kimse göremez";
$txt['admin_functions'] = "Rol yönetimi";
$txt['admin_groups'] = "Klasör Yönetimi";
$txt['admin_help'] = "Yardım";
$txt['admin_info'] = "Araç ile ilgili bazı bilgiler";
$txt['admin_info_loading'] = "Yükleniyor... Lütfen Bekleyiniz";
$txt['admin_ldap_configuration'] = "Ldap Yapılandırması";
$txt['admin_ldap_menu'] = "Ldap Ayarları";
$txt['admin_main'] = "Bilgi";
$txt['admin_misc_cpassman_dir'] = "TeamPass Path";
$txt['admin_misc_cpassman_url'] = "TeamPass URL";
$txt['admin_misc_custom_login_text'] = "Custom Login text";
$txt['admin_misc_custom_logo'] = "Full url to Custom Login Logo";
$txt['admin_misc_favicon'] = "favicon URL";
$txt['admin_misc_title'] = "Özelleştir";
$txt['admin_new1'] = "<i><u>14FEB2012:</i></u><br>Administrator profile is no more allowed to see items. This profile is now only an Administrative account.<br />See <a href='http://www.teampass.net/how-to-handle-changes-on-administrator-profile' target='_blank'>TeamPass.net page</a> concerning the way to handle this change.";
$txt['admin_one_shot_backup'] = "One shot backup and restore";
$txt['admin_path_to_files_folder'] = "Path to Files folder";
$txt['admin_path_to_files_folder_tip'] = "<span style='font-size:11px;max-width:300px;'>Files folder is used to store all generated files by TeamPass and also some uploaded files.<br />IMPORTANT: for security reason, this folder should not be in the WWW folder of your website. It should be set in a protected area with a specific redirection rule in your Server configuration.<br />IMPORTANT 2:It could be good to set a CRON task in order to clean up periodically this folder.</span>";
$txt['admin_path_to_upload_folder'] = "Path to Upload folder";
$txt['admin_path_to_upload_folder_tip'] = "<span style='font-size:11px;max-width:300px;'>Upload folder is used to store all uploaded files associated to Items.<br />IMPORTANT: for security reason, this folder should not be in the WWW folder of your website. It should be set in a protected area with a specific redirection rule in your Server configuration.<br />IMPORTANT 2:This folder should never be clean up! Those files are associated to the Items.</span>";
$txt['admin_pwd_maximum_length'] = "Maximum length for passwords";
$txt['admin_pwd_maximum_length_tip'] = "The default value for passwords length is set to 40. It is important to know that setting a high value length will have impact on performances. Indeed more long is this value, more time the server needs to encrypt and decrypt, and to display passwords.";
$txt['admin_script_backups'] = "Yedekleme betikleri için ayarlar";
$txt['admin_script_backups_tip'] = "For more security, it is recommended to parameter a scheduled backup of the database.<br />Use your server to schedule a daily cron task by calling the file 'script.backup.php' in 'backups' folder.<br />You first need to set the 2 first paramteres and SAVE them.";
$txt['admin_script_backup_decrypt'] = "Name of the file you want to decrypt";
$txt['admin_script_backup_decrypt_tip'] = "In order to decrypt a backup file, just indicate the name of the backup file (no extension and no path).<br />The file will be decrypted in the same folder as the backup files are.";
$txt['admin_script_backup_encryption'] = "Encryption key (optional)";
$txt['admin_script_backup_encryption_tip'] = "If set, this key will be used to encrypted your file";
$txt['admin_script_backup_filename'] = "Yedek dosya ismi";
$txt['admin_script_backup_filename_tip'] = "Yedek dosyaları için isim";
$txt['admin_script_backup_path'] = "Yedeklerin kaydedileceği dosya yolu";
$txt['admin_script_backup_path_tip'] = "Yedek dosyaları hangi klasörde saklansın";
$txt['admin_settings'] = "Ayarlar";
$txt['admin_settings_title'] = "TeamPass Ayarları";
$txt['admin_setting_activate_expiration'] = "Şifre son kullanma tarihi özellğini aktifleştir";
$txt['admin_setting_activate_expiration_tip'] = "aktifleştirildiğinde, zamanı dolmuş öğeler, kullanıcılara gösterilmeyecektir";
$txt['admin_setting_enable_delete_after_consultation'] = "Item consulted can be automatically deleted";
$txt['admin_setting_enable_delete_after_consultation_tip'] = "<span style='font-size:11px;max-width:300px;'>When enabled, the Item creator can decide that Item will be automatically deleted after being seen X times.</span>";
$txt['admin_url_to_files_folder'] = "URL to Files folder";
$txt['admin_url_to_upload_folder'] = "URL to Upload folder";
$txt['admin_users'] = "Kullanıcı yönetimi";
$txt['admin_views'] = "Görünüm";
$txt['alert_message_done'] = "Bitti!";
$txt['alert_message_personal_sk_missing'] = "Kişisel salt anahtarını girmelisiniz";
$txt['all'] = "Hepsi";
$txt['anyone_can_modify'] = "Bu öğenin, bu öğeye ulaşabilen herhangi biri tarafından değiştirilebilmesine izin ver";
$txt['associated_role'] = "Bu klasörü hangi rol ile ilişkilendireceksiniz:";
$txt['associate_kb_to_items'] = "İlişkilendirilecek öğeleri seçiniz";
$txt['assoc_authorized_groups'] = "izin verilen ilişkilendirilmiş klasörler";
$txt['assoc_forbidden_groups'] = "yasaklı ilişkilendirilmiş klasörler";
$txt['at'] = "at";
$txt['at_add_file'] = "Dosya eklendi";
$txt['at_automatically_deleted'] = "Automatically deleted";
$txt['at_automatic_del'] = "automatic deletion";
$txt['at_category'] = "Klasör";
$txt['at_copy'] = "Kopya oluşturuldu";
$txt['at_copy'] = "Kopayalama bitti";
$txt['at_creation'] = "Oluşturma";
$txt['at_delete'] = "Silme";
$txt['at_del_file'] = "Dosya silindi";
$txt['at_description'] = "Açıklama";
$txt['at_email'] = "email";
$txt['at_file'] = "Dosya";
$txt['at_import'] = "Önem";
$txt['at_label'] = "Etiket";
$txt['at_login'] = "Giriş";
$txt['at_modification'] = "Değişiklik";
$txt['at_moved'] = "Taşındı";
$txt['at_personnel'] = "Kişisel";
$txt['at_pw'] = "Şifre Değiştirildi";
$txt['at_restored'] = "geri yüklendi";
$txt['at_restriction'] = "Restriction";
$txt['at_shown'] = "Erişildi";
$txt['at_url'] = "URL";
$txt['at_user_added'] = "User #user_login# added";
$txt['at_user_deleted'] = "User #user_login# deleted";
$txt['at_user_email_changed'] = "User #user_login# email changed";
$txt['at_user_initial_pwd_changed'] = "User #user_login# initial password change";
$txt['at_user_locked'] = "User #user_login# locked";
$txt['at_user_pwd_changed'] = "User #user_login# password changed";
$txt['at_user_unlocked'] = "User #user_login# unlocked";
$txt['auteur'] = "geliştirici";
$txt['author'] = "geliştirici";
$txt['authorized_groups'] = "İzin verilen klasörler";
$txt['auth_creation_without_complexity'] = "şifre karmaşıklığına bakmaksızın öğe oluşturulmasına izin ver";
$txt['auth_modification_without_complexity'] = "şifre karmaşıklığına bakmaksızın öğe değiştirilmesine izin ver";
$txt['automatic_deletion_activated'] = "Automatic deletion engaged";
$txt['automatic_del_after_date_text'] = "or after date";
$txt['auto_create_folder_role'] = "Klasör ve Rol oluştur";
$txt['bad_email_format'] = "Email address has not the expected format!";
$txt['block_admin_info'] = "Administrators Info";
$txt['block_last_created'] = "En son oluşturulan";
$txt['bugs_page'] = "Herhangi bir hata bulursanız, direk olarak <a href='http://code.google.com/p/TeamPass/issues/list' target='_blank'><u>Hata</u></a> gönderebilirsiniz.";
$txt['by'] = "Tarafından";
$txt['cancel'] = "Vazgeç";
$txt['cancel_button'] = "Vazgeç";
$txt['can_create_root_folder'] = "Kök seviyesinde bir klasör oluşturabilir";
$txt['changelog'] = "En son haberler";
$txt['change_authorized_groups'] = "yetkilendirilmiş klasörleri değiştir";
$txt['change_forbidden_groups'] = "Yasaklı klasörleri değiştir";
$txt['change_function'] = "Rolleri değiştir";
$txt['change_group_autgroups_info'] = "Bu rolün görebileceği ve kullanabileceği yetkilendirilmiş klasörleri seç";
$txt['change_group_autgroups_title'] = "yetkilendirilmiş klasörleri özelleştir";
$txt['change_group_forgroups_info'] = "bu rolün göremeyeceği ve kullanamayacağı yasaklı klasörleri seç";
$txt['change_group_forgroups_title'] = "Yasaklı klasörleri özelleştir";
$txt['change_user_autgroups_info'] = "bu hesabın görebileceği ve kullanabileceği klasörleri seç";
$txt['change_user_autgroups_title'] = "yetkilendirilmiş klasörleri özelleştir";
$txt['change_user_forgroups_info'] = "bu hesabın göremeyeceği ve kullanamayacağı klasörleri seç";
$txt['change_user_forgroups_title'] = "Yasaklı klasörleri özelleştir";
$txt['change_user_functions_info'] = "Bu hesap ile ilişkilendirilmiş eylemleri seç";
$txt['change_user_functions_title'] = "ilişkilendirilmiş eylemleri özelleştir";
$txt['check_all_text'] = "Hepsini seç";
$txt['close'] = "Kapat";
$txt['complexity'] = "Karmaşıklık";
$txt['complex_asked'] = "Gerekli karmaşıklık";
$txt['complex_asked'] = "Gerkeli karmaşıklık";
$txt['complex_level0'] = "çok zayıf";
$txt['complex_level1'] = "zayıf";
$txt['complex_level2'] = "orta";
$txt['complex_level3'] = "güçlü";
$txt['complex_level4'] = "çok güçlü";
$txt['complex_level5'] = "ağır";
$txt['complex_level6'] = "çok ağır";
$txt['confirm'] = "Onayla";
$txt['confirm_delete_group'] = "Bu klasörü ve içeriğini tümüyle silmek istediğinizden emin misiniz?";
$txt['confirm_deletion'] = "Silmek istediğinizden emin misiniz?";
$txt['confirm_del_account'] = "Bu hesabı silmek istediğinizden emin misiniz?";
$txt['confirm_del_from_fav'] = "Sık kullanılanlardan silmek istediğinizden emin misiniz?";
$txt['confirm_del_role'] = "bir sonraki rolün silinmesini onaylayınız:";
$txt['confirm_edit_role'] = "bir sonraki rolün ismini giriniz:";
$txt['confirm_lock_account'] = "Bu hesabı kilitlemeye karar verdiniz? Emin misiniz?";
$txt['connection'] = "Bağlantı";
$txt['connections'] = "bağlantılar";
$txt['copy'] = "Kopyala";
$txt['copy_to_clipboard_small_icons'] = "Öğe sayfasındaki küçük ikonların kopyalanmasına izin ver";
$txt['copy_to_clipboard_small_icons_tip'] = "<span style='font-size:11px;max-width:300px;'>Eğer kullanıcıların yeni bir bilgisayarı yoksa, bellek kullanımını önler.<br /> Aslında, kopyalama alanına öğe bilgileri yüklenmez. Fakat şifre ve giriş bilgilerinin hızlı biçimde kopyalanmasının başka bir yolu yoktur.</span>";
$txt['creation_date'] = "Oluşturma Tarihi";
$txt['csv'] = "CSV";
$txt['csv_import_button_text'] = "CSV dosyasına gözat";
$txt['date'] = "Tarih";
$txt['date'] = "Tarih";
$txt['date_format'] = "Tarih formatı";
$txt['days'] = "gün";
$txt['definition'] = "Tanım";
$txt['delete'] = "Sil";
$txt['deletion'] = "Silinenler";
$txt['deletion_title'] = "Silinen öğe listesi";
$txt['del_button'] = "Sil";
$txt['del_function'] = "rolleri sil";
$txt['del_group'] = "Klasörü sil";
$txt['description'] = "Açıklama";
$txt['description'] = "Açıklama";
$txt['disable_notify'] = "Disable notify";
$txt['disconnect'] = "Bağlantıyı kes";
$txt['disconnection'] = "Bağlantıyı kes";
$txt['div_dialog_message_title'] = "Bilgi";
$txt['done'] = "Bitti";
$txt['drag_drop_helper'] = "Sürükle Bırak";
$txt['duplicate_folder'] = "aynı isimle birden fazla klasör oluşturulabilmesine izin ver";
$txt['duplicate_item'] = "aynı isimle birden fazla öğe oluşturulabilmesine izin ver";
$txt['email'] = "eposta";
$txt['email_altbody_1'] = "öğe";
$txt['email_altbody_2'] = "oluşturuldu";
$txt['email_announce'] = "Bu öğeyi eposta ile duyur";
$txt['email_body1'] = "Merhaba,<br><br>Öğe";
$txt['email_body2'] = "oluşturuldu.<br><br><a href='";
$txt['email_body3'] = "Saygılar";
$txt['email_bodyalt_item_updated'] = "Password for #item_label# has been updated.";
$txt['email_body_item_updated'] = "Hello,<br><br>Password for '#item_label#' has been updated.<br /><br />You can check it <a href=\"".@$_SESSION['settings']['cpassman_url']."/index.php?page=items&group=#item_category#&id=#item_id#\">HERE</a><br /><br />Cheers";
$txt['email_body_on_user_login'] = "Hello,<br><br>User #tp_user# has get connected to TeamPass the #tp_date# at #tp_time#.<br><br>Regards.";
$txt['email_change'] = "eposta adresini değiştirin";
$txt['email_changed'] = "eposta değiştirildi";
$txt['email_new_user_mail'] = "Hello,<br><br>An administrator has created your account for TeampPass.<br>You can use the next credentials for being logged:<br>- Login: #tp_login#<br>- Password: #tp_pw#<br><br>Click the <a href='#tp_link#'>LINK</a> to access.<br><br>Best regards.";
$txt['email_on_open_notification_mail'] = "Hello,<br><br>#tp_user# has opened and watched the Item '#tp_item#'.<br>Click the <a href='#tp_link#'>LINK</a> to access.<br><br>Best regards.";
$txt['email_on_open_notification_subject'] = "[TeamPass] Notification on Item open";
$txt['email_request_access_mail'] = "Hello #tp_item_author#,<br><br>User #tp_user# has required an access to '#tp_item#'.<br><br>Be sure of the rights of this user before changing the restriction to the Item.<br><br>Regards.";
$txt['email_request_access_subject'] = "[TeamPass] Request an access to item";
$txt['email_select'] = "Bilgilendirilecek kişiyi seçiniz";
$txt['email_share_item_mail'] = "Hello,<br><br><u>#tp_user#</u> has shared with you the item <b>#tp_item#</b><br>Click the <a href='#tp_link#'>LINK</a> to access.<br><br>Best regards.";
$txt['email_share_item_subject'] = "[TeamPass] An Item was share with you";
$txt['email_subject'] = "Şifre yöneticisinde yeni bir öğe oluşturuluyor";
$txt['email_subject_item_updated'] = "Password has been updated";
$txt['email_subject_new_user'] = "[TeamPass] Hesabınız Tanımlandı";
$txt['email_subject_new_user'] = "[TeamPass] Your new account";
$txt['email_subject_on_user_login'] = "[TeamPass] Bir kullanıcı giriş yaptı";
$txt['email_text_new_user'] = "Merhaba,<br><br> TeamPass hesabınız oluşturuldu.<br> Aşağıdaki bilgileri kullanarak TeamPass hesabınıza ($TeamPass_url) giriş yapabilirsiniz:<br>";
$txt['enable_delete_after_consultation'] = "Item will be automatically deleted after being seen";
$txt['enable_email_notification_on_item_shown'] = "Send notification by email when Item is shown";
$txt['enable_favourites'] = "Kullanıcıların sık kullanılanlar özellğini kullanmasını aktifleştir";
$txt['enable_notify'] = "Enable notify";
$txt['enable_personal_folder'] = "Kişisel klasörü aktifleştir";
$txt['enable_personal_folder_feature'] = "Kişisel klasör özelliğini aktifleştir";
$txt['enable_personal_saltkey_cookie'] = "Enable personal SALTKey to be stored in a cookie";
$txt['enable_send_email_on_user_login'] = "Kullanıcı giriş yaptığında yöneticiye e-posta gönder";
$txt['enable_user_can_create_folders'] = "Users are allowed to manage folders in allowed parent folders";
$txt['encrypt_key'] = "Şifreleme Anahtarı";
$txt['errors'] = "Hatalar";
$txt['error_complex_not_enought'] = "Şifre yeterince karmaşık değil";
$txt['error_confirm'] = "Şifre onayı hatalı!";
$txt['error_cpassman_dir'] = "TeamPass için bir yol (path) tanımlanmadı. Lütfen Yönetici Ayarları sayfasından TeamPass Ayarlarını seçiniz.";
$txt['error_cpassman_url'] = "TeamPass için bir URL tanımlanmadı. Lütfen Yönetici Ayarları sayfasından TeamPass Ayarlarını seçiniz.  ";
$txt['error_empty_data'] = "No data to proceed!";
$txt['error_fields_2'] = "2 alan zorunlu";
$txt['error_group'] = "Bir klasör zorunlu!";
$txt['error_group_complex'] = "Klasör minimum gerekli şifre karmaşıklık seviyesine sahip olmalı";
$txt['error_group_exist'] = "Bu klasör tanımlı!";
$txt['error_group_label'] = "Klasör ismi girilmeli";
$txt['error_html_codes'] = "Yazının içerisinde HTML kodları var! Buna izniniz yok.";
$txt['error_item_exists'] = "Bu öğe tanımlı!";
$txt['error_label'] = "Etiket zorunlu";
$txt['error_must_enter_all_fields'] = "Tüm alanlar doldurulmalı";
$txt['error_mysql'] = "MySQL Hatası";
$txt['error_not_allowed_to'] = "You are not allowed to do that!";
$txt['error_not_authorized'] = "Bu sayfayı görmeye yetkiniz yok";
$txt['error_not_exists'] = "Böyle bir sayfa yok";
$txt['error_no_folders'] = "Klasör oluşturarak başlamalısınız.";
$txt['error_no_password'] = "şifrenizi girmeniz gerekmekte";
$txt['error_no_roles'] = "Roller tanımlayıp klasörler ile ilişkilendirmelisiniz. ";
$txt['error_no_selected_folder'] = "You need to select a Folder";
$txt['error_password_confirmation'] = "şifreler aynı olmalı";
$txt['error_pw'] = "Şifre alanı zorunlu alandır";
$txt['error_pw_too_long'] = "Password is too long! maximum characters is 40.";
$txt['error_renawal_period_not_integer'] = "yenileme aralığı ay cinsinden tanımlanmalıdır";
$txt['error_salt'] = "<b>SALT Anahtarı çok uzun! Lütfen yönetici SALT anahtarını değiştirene kadar TeamPass kullanmayınız.</b> settings.php dosyasında, SALT anahtarı 32 karakterden uzun olamaz.";
$txt['error_tags'] = "Etiketlerde noktalama işaretleri kullanılamaz sadece boşluk kullanılabilirç";
$txt['error_times_before_deletion'] = "Number of consultation before deletion needs to be more than 0!";
$txt['error_user_exists'] = "Kullanıcı tanımlı";
$txt['expiration_date'] = "Son kullanma tarihi";
$txt['expir_one_month'] = "1 ay";
$txt['expir_one_year'] = "1 yıl";
$txt['expir_six_months'] = "6 ay";
$txt['expir_today'] = "bugün";
$txt['files_&_images'] = "Dosyalar &amp; Resimler";
$txt['find'] = "Bul";
$txt['find_text'] = "Aramanız";
$txt['folders'] = "Klasörler";
$txt['forbidden_groups'] = "Yasaklı Klasörler";
$txt['forgot_my_pw'] = "şifrenizi mi unuttunuz?";
$txt['forgot_my_pw_email_sent'] = "eposta gönderildi";
$txt['forgot_my_pw_error_email_not_exist'] = "Böyle bir eposta adresi yok!";
$txt['forgot_my_pw_text'] = "Şifreniz hesabınızda tanımlı eposta adresinize gönderilecektir.";
$txt['forgot_pw_email_altbody_1'] = "Merhaba, TeamPass'e giriş için kullanıcı bilgileriniz: ";
$txt['forgot_pw_email_body'] = "Merhaba,<br/><br/>TeamPass için yeni şifreniz:";
$txt['forgot_pw_email_body'] = "Merhaba,<br/><br/>TeamPass için yeni şifreniz: ";
$txt['forgot_pw_email_body_1'] = "Merhaba, <br/><br/> TeamPass giriş bilgileriniz:<br/><br/>";
$txt['forgot_pw_email_subject'] = "TeamPass - Şifreniz";
$txt['forgot_pw_email_subject_confirm'] = "[TeamPass] Şifreniz Adım 2";
$txt['functions'] = "Roller";
$txt['function_alarm_no_group'] = "Bu rol hiçbir klasör ile ilişkilendirilmemiş";
$txt['generate_pdf'] = "PDF dosyası oluştur";
$txt['generation_options'] = "Üretim Seçenekleri";
$txt['gestionnaire'] = "Müdür";
$txt['give_function_tip'] = "Yeni bir rol ekle";
$txt['give_function_title'] = "Yeni bir rol ekle";
$txt['give_new_email'] = "Lütfen yeni bir eposta adresi giriniz";
$txt['give_new_login'] = "Lütfen bir hesap seçiniz";
$txt['give_new_pw'] = "Lütfen yeni bir şifre belirleyiniz";
$txt['god'] = "Tanrı";
$txt['group'] = "Klasör";
$txt['group_parent'] = "Ana Klasör";
$txt['group_pw_duration'] = "Yenileme Aralığı";
$txt['group_pw_duration_tip'] = "Ay cinsinden, etkisiz kılmak için 0 giriniz";
$txt['group_select'] = "Klasörü Seçiniz";
$txt['group_title'] = "Klasör etiketi";
$txt['history'] = "Geçmiş";
$txt['home'] = "Anasayfa";
$txt['home_personal_menu'] = "Kişisel İşlemler";
$txt['home_personal_saltkey'] = "Kişisel SALT Anahtarınız";
$txt['home_personal_saltkey_button'] = "sakla";
$txt['home_personal_saltkey_info'] = "eğer kişisel öğelerinizi kullanmak istiyorsanız, kişisel salt anahtarınızı girmelisiniz.";
$txt['home_personal_saltkey_label'] = "Kişisel salt anahtarınızı giriniz.";
$txt['importing_details'] = "Detayların Listesi";
$txt['importing_folders'] = "Klasörler içe aktarılıyor";
$txt['importing_items'] = "Öğeler içe aktarılıyor";
$txt['import_button'] = "İçe Aktar";
$txt['import_csv_anyone_can_modify_in_role_txt'] = "Tüm içe aktarılan öğelerde \"aynı roldeki herhangi bir kimse değiştirebilir\" hakkını aktif et.";
$txt['import_csv_anyone_can_modify_txt'] = "Tüm içe aktarılan öğelerde \"herhangi bir kimse değiştirebilir\" hakkını aktif et.";
$txt['import_csv_dialog_info'] = "Bilgi: içe aktarım işleminde CSV dosyası kullanılmalıdır. Genellikle, KeePass programından aktarılan içerik bu formata uyar. Başka bir program tarafından üretilmiş bir içerik kullanıyorsanız, CSV yapısının şu şekilde olduğundan emin olun: Hesap (Account), Giriş İsmi (login name), Şifre (password), Web Sitesi (Web Site), Yorumlar (Comments)";
$txt['import_csv_menu_title'] = "Öğeleri Dosyadan içe aktar (CSV/KeePass XML)";
$txt['import_error_no_file'] = "Bir dosya seçmelisiniz!";
$txt['import_error_no_read_possible'] = "Dosya okunamadı";
$txt['import_error_no_read_possible_kp'] = "Dosya okunamadı! Dosya KeePass dosyası olmalı";
$txt['import_keepass_dialog_info'] = "Please use this to select an XML file generated by KeePass export functionality. Will only work with KeePass file! Notice that the import script will not import folders or elements that already exist at the same level of the tree structure.";
$txt['import_keepass_to_folder'] = "Hedef klasörü seçiniz";
$txt['import_kp_finished'] = "KeePass uygulamasından aktarım tamamlandı! Ön tanımlı olarak yeni oluşturulan klasörler için karmaşıklık seviyesi Orta olarak uygulandı. Büyük ihtimalle bu ayarı değiştirmeniz gerekecektir. ";
$txt['import_to_folder'] = "klasöre aktarmak istediğiniz öğeleri seçiniz:";
$txt['index_add_one_hour'] = "Oturumu 1 saatlik uzat";
$txt['index_alarm'] = "ALARM!!!";
$txt['index_bas_pw'] = "Bu hesap için hatalı şifre!";
$txt['index_change_pw'] = "Şifrenizi değiştirin!";
$txt['index_change_pw'] = "Şifrenizi Değiştirin";
$txt['index_change_pw_button'] = "Değiştir";
$txt['index_change_pw_confirmation'] = "Onayla";
$txt['index_expiration_in'] = "Oturum sona eriyor";
$txt['index_get_identified'] = "Lütfen kendinizi tanıtın";
$txt['index_identify_button'] = "Giriş";
$txt['index_identify_you'] = "Lütfen kendinizi tanıtın";
$txt['index_last_pw_change'] = "Şifre Değiştirildi";
$txt['index_last_seen'] = "En son bağlantı";
$txt['index_login'] = "Hesap";
$txt['index_maintenance_mode'] = "Bakım modu aktifleştirildi. Sadece yöneticiler giriş yapabilir.";
$txt['index_maintenance_mode_admin'] = "Bakım modu aktifleştirildi. Kullanıcılar TeamPass'e bakım modunda iken ulaşamazlar.";
$txt['index_new_pw'] = "Yeni şifre";
$txt['index_password'] = "şifre";
$txt['index_pw_error_identical'] = "Şifreler aynı olmak zorundadır";
$txt['index_pw_expiration'] = "Şifre son kullanma tarihi";
$txt['index_pw_level_txt'] = "Karmaşıklık";
$txt['index_refresh_page'] = "Sayfayı yenile";
$txt['index_session_duration'] = "Oturum süresi";
$txt['index_session_ending'] = "Oturumunuz 1 dakikadan az bir süre sonra sona erecektir";
$txt['index_session_expired'] = "Oturumunuz sona erdi veya doğru bir şekilde giriş yapamadınız";
$txt['index_welcome'] = "Hoşgeldiniz";
$txt['info'] = "Bilgi";
$txt['info_click_to_edit'] = "Değerleri değiştirmek için hücreye tıklayınız";
$txt['is_admin'] = "Yönetici mi";
$txt['is_manager'] = "Müdür mü";
$txt['is_read_only'] = "Is Read Only";
$txt['items'] = "Items";
$txt['items_browser_title'] = "Klasörler";
$txt['item_copy_to_folder'] = "Lütfenö öğe'nin kaydedileceği bir klasör seçiniz";
$txt['item_menu_add_elem'] = "Öğe ekle";
$txt['item_menu_add_rep'] = "Klasör Ekle";
$txt['item_menu_add_to_fav'] = "Çok kullanılanlara ekle";
$txt['item_menu_collab_disable'] = "Edition is not allowed";
$txt['item_menu_collab_enable'] = "Edition is allowed";
$txt['item_menu_copy_elem'] = "öğe'yi kopyala";
$txt['item_menu_copy_login'] = "girişi kopyala";
$txt['item_menu_copy_pw'] = "Şifreyi kopyala";
$txt['item_menu_del_elem'] = "Öğe Sil";
$txt['item_menu_del_from_fav'] = "sık kullanılanlardan sil";
$txt['item_menu_del_rep'] = "Klasör Sil";
$txt['item_menu_edi_elem'] = "öğeyi düzenle";
$txt['item_menu_edi_rep'] = "Klasörü düzenle";
$txt['item_menu_find'] = "Ara";
$txt['item_menu_mask_pw'] = "Şifreyi maskele";
$txt['item_menu_refresh'] = "Sayfayı yenile";
$txt['item_share_text'] = "In order to share by mail this Item, enter the email address and press SEND button.";
$txt['kbs'] = "KB";
$txt['kb_menu'] = "Veritabanı";
$txt['keepass_import_button_text'] = "XML dosyasına göz at";
$txt['label'] = "etiket";
$txt['last_items_icon_title'] = "Son erişilen öğeleri Göster/Gizle ";
$txt['last_items_title'] = "Son erişilen öğeler";
$txt['ldap_extension_not_loaded'] = "Sunucuda LDAP uzantısı aktif edilmemiştir.";
$txt['level'] = "Seviye";
$txt['link_copy'] = "bu öğeye bağlantı ver";
$txt['link_is_copied'] = "Bu öğeye olan bağlantı kopyalandı";
$txt['login'] = "Giriş(Eğer gerekli ise)";
$txt['login_attempts_on'] = "Giriş Denemeleri";
$txt['login_copied_clipboard'] = "Giriş kopyalandı";
$txt['login_copy'] = "Hesabı kopyala";
$txt['logs'] = "Kayıtlar";
$txt['logs_1'] = "Şifre yenilemelerinin kaydını üret";
$txt['logs_passwords'] = "Şifrelerin kaydını üret";
$txt['maj'] = "Büyük harf";
$txt['mask_pw'] = "Şifreyi Maskele/Göster";
$txt['max_last_items'] = "Kullanıcı tarafından görülen maksimum son erişilenlerin sayısı (öntanımlı değer 10)";
$txt['menu_title_new_personal_saltkey'] = "Changing your Personal Saltkey";
$txt['minutes'] = "Dakika";
$txt['modify_button'] = "Değiştir";
$txt['my_favourites'] = "Çok kullanılanlar";
$txt['name'] = "İsim";
$txt['nb_false_login_attempts'] = "Hesap kilitlenmeden önceki hatalı giriş denemesi sayısı (aktif olmaması için 0 giriniz)";
$txt['nb_folders'] = "Klasörlerin Sayısı";
$txt['nb_items'] = "Öğelerin Sayısı";
$txt['nb_items_by_page'] = "Number of items by page";
$txt['nb_items_by_query'] = "Number of items to get at each query iterration";
$txt['nb_items_by_query_tip'] = "<span style='font-size:11px;max-width:300px;'>More items means more time to display the list.<br />Set to 'auto' to let the tool to adapt this number depending on the size screen of the user.<br />Set to 'max' to force to display the complet list in one time.<br />Set a number corresding to the number of items to get at each query iterration.</span>";
$txt['new_label'] = "Yeni Etiket";
$txt['new_role_title'] = "Yeni rol başlığı";
$txt['new_saltkey'] = "New Saltkey";
$txt['new_saltkey_warning'] = "Please be sure to use the original SaltKey, otherwize the new encryption will be corrupted. Before doing any change, please test your actual SaltKey!";
$txt['new_saltkey_warning_lost'] = "You have lost your saltkey? What a pitty, this one can't be recovered, so please be sure before continuing.<br>By reseting your saltkey, all your previous personal items will be deleted!";
$txt['new_user_title'] = "Yeni bir kullanıcı ekle";
$txt['no'] = "Hayır";
$txt['nom'] = "İsim";
$txt['none'] = "Hiçbiri";
$txt['none_selected_text'] = "Hiçbir öğe seçilmedi";
$txt['notify_activated'] = "Notification enabled";
$txt['not_allowed_to_see_pw'] = "Bu öğeyi görmeye yetkiniz yok";
$txt['not_allowed_to_see_pw_is_expired'] = "Bu öğenin son kullanım tarihi geçti!";
$txt['not_defined'] = "Tanımlı değil";
$txt['no_last_items'] = "hiçbir öğe yok";
$txt['no_previous_pw'] = "No previous password";
$txt['no_restriction'] = "Kısıtlama yok";
$txt['numbers'] = "Sayılar";
$txt['number_of_used_pw'] = "Kullanıcının eski bir şifreyi yeniden kullanmadan önce girmesi gereken yeni şifre sayısı";
$txt['ok'] = "Tamam";
$txt['open_url_link'] = "Open in new page";
$txt['pages'] = "Sayfalar";
$txt['pdf'] = "PDF";
$txt['pdf_del_date'] = "PDF generated the";
$txt['pdf_del_title'] = "Passwords renewal follow-up";
$txt['pdf_download'] = "Dosyayı indir";
$txt['pdf_export'] = "PDF exports";
$txt['pdf_password'] = "PDF encryption key";
$txt['pdf_password_warning'] = "You must provide an encryption key!";
$txt['personal_folder'] = "Kişisel klasör";
$txt['personal_saltkey_change_button'] = "Değiştir";
$txt['personal_saltkey_cookie_duration'] = "Personal SALTKey cookie DAYS life time before expiration";
$txt['personal_saltkey_lost'] = "I've lost it";
$txt['personal_salt_key'] = "Kişisel SALT Anahtarınız";
$txt['personal_salt_key_empty'] = "Kişisel SALT anahtarı girilmedi!";
$txt['personal_salt_key_info'] = "This salt key will be used to encrypt and decrypt your passwords.<br />It is not stored in database, you are the only person who knows it.<br />So don't loose it!";
$txt['please_update'] = "Lütfen güncelleyiniz!";
$txt['please_wait'] = "Please wait!";
$txt['previous_pw'] = "Previous passwords used:";
$txt['print'] = "Yazdır";
$txt['print_out_menu_title'] = "Öğeleriniz listesini yazdırın";
$txt['print_out_pdf_title'] = "TeamPass - dışarı aktarılmış öğelerin listesi";
$txt['print_out_warning'] = "All passwords and all confidential data will be written in this file without any encryption! By writing the file containing unencrypted items/passwords, you are accepting the full responsibility for further protection of this list!";
$txt['pw'] = "şifre";
$txt['pw_change'] = "Hesabın şifresini değiştir";
$txt['pw_changed'] = "şifre değişti";
$txt['pw_copied_clipboard'] = "şifre kopyalandı";
$txt['pw_copy_clipboard'] = "şifreyi kopyala";
$txt['pw_encryption_error'] = "Error encryption of the password!";
$txt['pw_generate'] = "üret";
$txt['pw_is_expired_-_update_it'] = "Bu öğenin son kullanım tarihi geçmiş! Şifresini değiştirmelisiniz.";
$txt['pw_life_duration'] = "Users' password life duration before expiration (in days, 0 to disable)";
$txt['pw_recovery_asked'] = "You have asked for a password recovery";
$txt['pw_recovery_button'] = "Bana yeni şifre gönder";
$txt['pw_recovery_info'] = "By clicking on the next button, you will receive an email that contains the new password for your account.";
$txt['pw_used'] = "Bu şifre kullanılmaktadır";
$txt['readme_open'] = "Benioku dosyasını aç";
$txt['read_only_account'] = "Read Only";
$txt['refresh_matrix'] = "Refresh Matrix";
$txt['renewal_menu'] = "Renewal follow-up";
$txt['renewal_needed_pdf_title'] = "yenilenmesi gereken öğelerin listesi";
$txt['renewal_selection_text'] = "Son Kullanma tarihi geçecek tüm öğeleri listele";
$txt['request_access_ot_item'] = "Request an access to author";
$txt['restore'] = "Yerine koy";
$txt['restore'] = "Yerine koy";
$txt['restricted_to'] = "Restricted to";
$txt['restricted_to_roles'] = "Allow to restrict items to Users and Roles";
$txt['rights_matrix'] = "Users rights matrix";
$txt['roles'] = "Roller";
$txt['role_cannot_modify_all_seen_items'] = "Set this role not allowed to modify all accessible items (normal setting)";
$txt['role_can_modify_all_seen_items'] = "Set this role allowed to modify all accessible items (not secure setting)";
$txt['root'] = "kök";
$txt['save_button'] = "kaydet";
$txt['secure'] = "güvenli";
$txt['see_item_title'] = "Item Details";
$txt['see_logs'] = "loglara bakınız";
$txt['select'] = "seç";
$txt['select'] = "Select";
$txt['select_folders'] = "Klasörleri seç";
$txt['select_language'] = "Dil Seçimi";
$txt['send'] = "Gönder";
$txt['settings_anyone_can_modify'] = "Activate an option for each item that allows anyone to modify it";
$txt['settings_anyone_can_modify_tip'] = "<span style='font-size:11px;max-width:300px;'>When activated, this will add a checkbox in the item form that permits the creator to allow the modification of this item by anyone.</span>";
$txt['settings_default_language'] = "Öntanımlı dili tanımla";
$txt['settings_kb'] = "Enable Knowledge Base (beta)";
$txt['settings_kb_tip'] = "<span style='font-size:11px;max-width:300px;'>When activated, this will add a page where you can build your knowledge base.</span>";
$txt['settings_ldap_domain'] = "LDAP suffix";
$txt['settings_ldap_domain_controler'] = "LDAP array";
$txt['settings_ldap_domain_controler_tip'] = "<span style='font-size:11px;max-width:300px;'>Specifiy multiple controllers if you would like the class to balance the LDAP queries amongst multiple servers.<br />You must delimit the domains by a comma (,)!<br />By example: domain_1,domain_2,domain_3</span>";
$txt['settings_ldap_domain_dn'] = "Alan Adınız için LDAP Base dn";
$txt['settings_ldap_mode'] = "Kullanıcı Doğrulamasını LDAP sunucusu üzerinden yap";
$txt['settings_ldap_mode_tip'] = "Eğer bir LDAP sunucunuz var ve kullanıcılarınızın LDAP sunucusu üzerinden doğrulanmasını istiyorsanız aktifleştirin";
$txt['settings_ldap_ssl'] = "LDAP'ı SSL ile kullan (LDAPS)";
$txt['settings_ldap_tls'] = "LDAP'ı TLS ile kullan";
$txt['settings_log_accessed'] = "Enable logging who accessed the items";
$txt['settings_log_connections'] = "Tüm kullanıcı bağlantılarını veritabanına kaydet";
$txt['settings_maintenance_mode'] = "TeamPass'i Bakım Moduna Sok";
$txt['settings_maintenance_mode_tip'] = "This mode will refuse any user connection except for Administrators.";
$txt['settings_manager_edit'] = "Managers can edit and delete Items they are allowed to see";
$txt['settings_printing'] = "Öğelerin PDF'e çevrilmesini aktifleştir";
$txt['settings_printing_tip'] = "When enabled, a button will be added to user's home page that will permit him/her to write a listing of items to a PDF file he/she can view. Notice that the listed passwords will be uncrypted.";
$txt['settings_restricted_to'] = "Enable Restricted To functionality on Items";
$txt['settings_richtext'] = "öğe açıklaması için zengin metin girişini aktifleştir";
$txt['settings_richtext_tip'] = "<span style='font-size:11px;max-width:300px;'>Bu eylem açıklama alanında BBCodes ile zengin metin girişini aktifleştirecektir.</span>";
$txt['settings_send_stats'] = "TeamPass Aylık kullanım istatistiklerini kullanım profilini daha iyi anlamak için geliştiriciye gönder";
$txt['settings_send_stats_tip'] = "These statistics are entirely anonymous!<br /><span style='font-size:10px;max-width:300px;'>Your IP is not sent, just the following data are transmitted: amount of Items, Folders, Users, TeamPass version, personal folders enabled, ldap enabled.<br />Many thanks if you enable those statistics. By this you help me further develop TeamPass.</span>";
$txt['settings_show_description'] = "Show Description in list of Items";
$txt['share'] = "Share this Item";
$txt['share_sent_ok'] = "Email has been sent";
$txt['show'] = "Göster";
$txt['show_help'] = "Yardımı göster";
$txt['show_last_items'] = "Show last items block on main page";
$txt['size'] = "Boyut";
$txt['start_upload'] = "Dosyaları yüklemeye başla";
$txt['sub_group_of'] = "bağımlı";
$txt['support_page'] = "Herhangi bir konuda destek için, Lütfen <a href='https://github.com/nilsteampassnet/TeamPass/issues' target='_blank'><u>Forumu</u></a> kullanınız.";
$txt['symbols'] = "Semboller";
$txt['tags'] = "Etiketler";
$txt['Test the Email configuration'] = "This test should send an email to the address indicated. If you don't receive it, please check your credentials.";
$txt['thku'] = "TeamPass'i kullandığınız için teşekkürler";
$txt['times'] = "times";
$txt['timezone_selection'] = "Timezone selection";
$txt['time_format'] = "Zaman formatı";
$txt['uncheck_all_text'] = "Seçimi Kaldır";
$txt['unlock_user'] = "Kullanıcı kilitli. Bu hesabın kilidini açmak istediğinize emin misiniz?";
$txt['update_needed_mode_admin'] = "TeamPass kurlumunuzu güncellemeniz önerilmektedir. Lütfen <a href='install/upgrade.php'>BURAYA</a> tıklayınız";
$txt['uploaded_files'] = "Var olan dosyalar";
$txt['upload_button_text'] = "Gözat";
$txt['upload_files'] = "Yeni dosya yükle";
$txt['url'] = "URL";
$txt['url_copied'] = "URL kopyalandı";
$txt['used_pw'] = "Kullanılmış şifre";
$txt['user'] = "Kullanıcı";
$txt['users'] = "Kullanıcılar";
$txt['users_online'] = "kullanıcı aktif";
$txt['user_action'] = "Action on a user";
$txt['user_activity'] = "User Activity";
$txt['user_alarm_no_function'] = "Bu kullanıcının rol tanımı yok";
$txt['user_del'] = "Hesabı sil";
$txt['user_lock'] = "Kullanıcıyı kilitle";
$txt['user_mngt'] = "User Management";
$txt['version'] = "Güncel versiyon";
$txt['views_confirm_items_deletion'] = "Seçili öğeleri veritabanından silmek istediğinize emin misiniz?";
$txt['views_confirm_restoration'] = "Lütfen bu öğelerin geri yüklenmesini onaylayın";
$txt['visibility'] = "Görünürlük";
$txt['warning_screen_height'] = "UYARI: ekran boyu öğeleri göstermek için yeterli değil!";
$txt['yes'] = "Evet";
$txt['your_version'] = "veriyonunuz";
