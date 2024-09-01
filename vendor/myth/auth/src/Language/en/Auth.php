<?php

namespace Myth\Auth\Language\en;

return [
    // Exceptions
    'invalidModel' => 'The {0} model must be loaded prior to use.',
    'userNotFound' => 'Tidak dapat menemukan user dengan ID = {0, number}.',
    'noUserEntity' => 'User Entity must be provided for password validation.',
    'tooManyCredentials' => 'You may only validate against 1 credential other than a password.',
    'invalidFields' => 'The "{0}" field cannot be used to validate credentials.',
    'unsetPasswordLength' => 'You must set the `minimumPasswordLength` setting in the Auth config file.',
    'unknownError' => 'Maaf, terjadi masalah dalam mengirimkan email. Silahkan coba lagi.',
    'notLoggedIn' => 'Anda harus login untuk mengakses halaman tersebut.',
    'notEnoughPrivilege' => 'Anda tidak memiliki akses untuk halaman tersebut.',

    // Registration
    'registerDisabled' => 'Sorry, new user accounts are not allowed at this time.',
    'registerSuccess' => 'Selamat datang! Silahkan login dengan akun yang sudah didaftarkan.',
    'registerCLI' => 'Berhasil membuat akun baru: {0}, #{1}',

    // Activation
    'activationNoUser' => 'Unable to locate a user with that activation code.',
    'activationSubject' => 'Activate your account',
    'activationSuccess' => 'Please confirm your account by clicking the activation link in the email we have sent.',
    'activationResend' => 'Resend activation message one more time.',
    'notActivated' => 'This user account is not yet activated.',
    'errorSendingActivation' => 'Failed to send activation message to: {0}',

    // Login
    'badAttempt' => 'Login gagal. Silahkan cek kembali email/username yang dimasukkan.',
    'loginSuccess' => 'Login sukses',
    'invalidPassword' => 'Login gagal. Silahkan cek kembali password yang dimasukkan.',

    // Forgotten Passwords
    'forgotDisabled' => 'Reseting password option has been disabled.',
    'forgotNoUser' => 'Tidak dapat menemukan pengguna dengan email tersebut.',
    'forgotSubject' => ' Instruksi Reset Password',
    'resetSuccess' => 'Password berhasil diganti. Silahkan login dengan password baru.',
    'forgotEmailSent' => 'Email instruksi telah dikirim. Silahkan cek untuk instruksi lebih lanjut.',
    'errorEmailSent' => 'Gagal mengirim email dengan instruksi reset password ke email: {0}',
    'errorResetting' => 'Gagal mengirim email instruksi ke email: {0}',

    // Passwords
    'errorPasswordLength' => 'Passwords harus setidaknya {0, number} karakter.',
    'suggestPasswordLength' => 'Pass phrases - up to 255 characters long - make more secure passwords that are easy to remember.',
    'errorPasswordCommon' => 'Password tidak boleh bersifat umum.',
    'suggestPasswordCommon' => 'Kata sandi diperiksa terhadap lebih dari 65 ribu kata sandi yang umum digunakan atau kata sandi yang telah dibocorkan melalui peretasan.',
    'errorPasswordPersonal' => 'Passwords cannot contain re-hashed personal information.',
    'suggestPasswordPersonal' => 'Variations on your email address or username should not be used for passwords.',
    'errorPasswordTooSimilar' => 'Password terlalu mirip dengan username.',
    'suggestPasswordTooSimilar' => 'Do not use parts of your username in your password.',
    'errorPasswordPwned' => 'Kata sandi {0} telah terungkap karena pelanggaran data dan telah terlihat {1, number} kali dalam {2} kata sandi yang beresiko.',
    'suggestPasswordPwned' => '{0} should never be used as a password. If you are using it anywhere change it immediately.',
    'errorPasswordPwnedDatabase' => 'a database',
    'errorPasswordPwnedDatabases' => 'databases',
    'errorPasswordEmpty' => 'Password harus diisi.',
    'passwordChangeSuccess' => 'Password berhasil diubah',
    'userDoesNotExist' => 'Gagal ubah password. User tidak ditemukan',
    'resetTokenExpired' => 'Maaf. token reset anda sudah kadaluarsa.',

    // Groups
    'groupNotFound' => 'Unable to locate group: {0}.',

    // Permissions
    'permissionNotFound' => 'Unable to locate permission: {0}',

    // Banned
    'userIsBanned' => 'User has been banned. Contact the administrator',

    // Too many requests
    'tooManyRequests' => 'Too many requests. Please wait {0, number} seconds.',

    // Login views
    'home' => 'Home',
    'current' => 'Current',
    'forgotPassword' => 'Lupa Password?',
    'enterEmailForInstructions' => 'No problem! Enter your email below and we will send instructions to reset your password.',
    'email' => 'Email',
    'emailAddress' => 'Email',
    'sendInstructions' => 'Kirim Instruksi',
    'loginTitle' => 'Login',
    'loginAction' => 'Login',
    'rememberMe' => 'Remember me',
    'needAnAccount' => 'Need an account?',
    'forgotYourPassword' => 'Forgot your password?',
    'password' => 'Password',
    'repeatPassword' => 'Ulangi Password',
    'emailOrUsername' => 'Email atau username',
    'username' => 'Username',
    'register' => 'Register',
    'signIn' => 'Sign In',
    'alreadyRegistered' => 'Already registered?',
    'weNeverShare' => 'We\'ll never share your email with anyone else.',
    'resetYourPassword' => 'Reset Password',
    'enterCodeEmailPassword' => 'Enter the code you received via email, your email address, and your new password.',
    'token' => 'Token',
    'newPassword' => 'Password Baru',
    'newPasswordRepeat' => 'Ulangi Password Baru',
    'resetPassword' => 'Reset Password',
];
