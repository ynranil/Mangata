#!/bin/bash

# tracks dizinini sil
rm -rf tracks

# Yeni tracks dosyasını indir
wget http://37.120.189.81/airchain_testnet/tracks

# tracks dosyasını çalıştırılabilir hale getir
chmod +x tracks

# tracksd servisini durdur
systemctl stop tracksd

# tracks programında rollback işlemini 4 kez çalıştır
./tracks rollback
./tracks rollback
./tracks rollback
./tracks rollback

# yenileyici.sh scriptini çalıştır
./yenileyici.sh
