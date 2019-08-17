# Magento 2 için Türkiye Şehirleri Eklentisi

Magento 2 sitenize Türkiye şehirlerini ekler ve adres ekranlarında şehirlerin açılır menü olarak gelmesini sağlar.

# Kurulum
 - Zip içinden çıkan dosyaları `/app/code/Grinet/TurkeyCities` klasörüne yükleyin

( Unix/Linux/MacOSX için ) 
Magento ana klasörünüze girip aşağıdaki komutları çalıştırın :a
```bash
php bin/magento module:enable Grinet_TurkeyCities
php bin/magento setup:upgrade
php bin/magento cache:clean
```

# Composer ile kurulum
```bash
composer require grinet/turkeycities
php bin/magento module:enable Grinet_TurkeyCities
php bin/magento setup:upgrade
php bin/magento cache:clean
```

# Hata bildirimi

Gördüğünüz hataları info@grinet.com.tr adresimize iletebilirsiniz...

-----------------------------------------------------------------

# Turkey Regions for Magento 2

This extension adds Turkey Regions to your Magento2.

# Installation
 - Copy all files to `/app/code/Grinet/TurkeyCities` directory

( For Unix/Linux/MacOSX ) 
Go to your root folder of your magento site and run these commands :
```bash
php bin/magento module:enable Grinet_TurkeyCities
php bin/magento setup:upgrade
php bin/magento cache:clean
```

# Installation with composer
```bash
composer require grinet/turkeycities
php bin/magento module:enable Grinet_TurkeyCities
php bin/magento setup:upgrade
php bin/magento cache:clean
```

# Error reporting

Please send errors to info@grinet.com.tr ...

------------------------------------------------------------------
# Ekran Görüntüleri / Screenshots
<img src="http://grinet.com.tr/images/magento2_regions/frontend_addres_cities.png">
