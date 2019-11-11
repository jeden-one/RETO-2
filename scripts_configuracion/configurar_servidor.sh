echo "Borrando archivo de SSH predeterminado"
sudo rm /etc/ssh/sshd_config
echo "Copiando archivo de SSH personalizado"
sudo cp sshd_config /etc/ssh/sshd_config
echo "Archivo de SSH personalizado copiado"
sudo sudo /etc/init.d/ssh restart

echo "Parando servicio de MySQL";
sudo sudo /etc/init.d/mysql stop
echo "Borrando archivo de configuración de MySql predeterminado"
sudo rm /etc/mysql/mysql.conf.d/mysqld.cnf
sudo cp mysqld.cnf /etc/mysql/mysql.conf.d/
sudo sudo /etc/init.d/mysql start

mysql -u root </vagrant/bdScriptCreacion.sql
mysql -u root </vagrant/scripts_configuracion/configurar_usuarios.sql
