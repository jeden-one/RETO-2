#!/usr/bin/env bash
echo "Borrando archivo de SSH predeterminado"
sudo rm /etc/ssh/sshd_config
echo "Copiando archivo de SSH personalizado"
sudo cp /vagrant/scripts_configuracion/sshd_config /etc/ssh/sshd_config
echo "Archivo de SSH personalizado copiado"
sudo sudo /etc/init.d/ssh restart

echo "Parando servicio de MySQL";
sudo sudo /etc/init.d/mysql stop
echo "Borrando archivo de configuración de MySql predeterminado"
sudo rm /etc/mysql/mysql.conf.d/mysqld.cnf
echo "Copiando arcivo preconfigurado     MySql-Ajebask"
sudo cp /vagrant/scripts_configuracion/mysqld.cnf /etc/mysql/mysql.conf.d/
sudo sudo /etc/init.d/mysql start

echo "Generando permisos para administrar la web"
sudo htpasswd -cdb /etc/apache2/.htpasswd ajebask ajebask
echo "Borrando fichero configuración Apache2"
sudo rm /etc/apache2/sites-enabled/000-default.conf
echo "Copiando fichero configuración preconfigurado Apache2-Ajebask"
sudo cp /vagrant/scripts_configuracion/000-default.conf /etc/apache2/sites-enabled/
sudo /etc/init.d/apache2 restart

echo "Generando permisos para la carpeta de imágenes"
sudo chmod 777 /vagrant/img

echo "Generando base de datos"
mysql -u root </vagrant/bdScriptCreacion.sql
mysql -u root </vagrant/scripts_configuracion/configurar_usuarios.sql