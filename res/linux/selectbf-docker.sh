#!/bin/sh

sed -i 's|\${DB_USER}|'$DB_USER'|g' config.xml
sed -i 's|\${DB_PASSWORD}|'$DB_PASSWORD'|g' config.xml
sed -i 's|\${DB_DATABASE}|'$DB_DATABASE'|g' config.xml
sed -i 's|\${DB_PORT}|'$DB_PORT'|g' config.xml
sed -i 's|\${FTP_HOST}|'$FTP_HOST'|g' config.xml
sed -i 's|\${FTP_PORT}|'$FTP_PORT'|g' config.xml
sed -i 's|\${FTP_USER}|'$FTP_USER'|g' config.xml
sed -i 's|\${FTP_PASSWORD}|'$FTP_PASSWORD'|g' config.xml

java -Xmx256m -Xms256m -Dlog4j.configuration=file:///app/conf/log4j.properties   -cp ./selectbf.jar:/app/lib/commons-net-1.3.0.jar:/app/lib/jakarta-oro-2.0.8.jar:/app/lib/jdom.jar:/app/lib/commons-beanutils-1.7dev.jar:/app/lib/commons-collections-3.1.jar:/app/lib/commons-logging-1.0.4.jar:/app/lib/log4j-1.2.9.jar:/app/lib/swt.jar:/app/lib/mysql-connector-java-5.0.5-bin.jar: org.selectbf.SelectBf