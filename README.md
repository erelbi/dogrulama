# dogrulama
qr-code kullanarak web sitesine giriş

[Giriş ekranı](https://ibb.co/nzyPLmb)

[Üretilen qr code](https://ibb.co/ZTrdXgW)

[okutulan qr code değerinin girilmesi](https://ibb.co/QnZYvqv)


Composer Kurulumu

sudo apt updatesudo apt install php-cli php-zip wget unzip

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

HASH="$(wget -q -O - https://composer.github.io/installer.sig)"

php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

Kütüphanenin Kurulumu

composer require endroid/qr-code
