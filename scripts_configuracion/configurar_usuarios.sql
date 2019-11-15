# Creamos usuario regular
GRANT INSERT, SELECT, UPDATE, DELETE ON proyecto_ajebask.* TO 'user'@'192.168.0.123' IDENTIFIED BY 'ajebask';
GRANT INSERT, SELECT, UPDATE, DELETE ON proyecto_ajebask.* TO 'user'@'localhost' IDENTIFIED BY 'ajebask';
FLUSH PRIVILEGES;
#
# Creamos usuario administrador
GRANT ALL PRIVILEGES ON *.* TO 'jeden'@'192.168.0.123' IDENTIFIED BY 'jeden';
GRANT ALL PRIVILEGES ON *.* TO 'jeden'@'localhost' IDENTIFIED BY 'jeden';
FLUSH PRIVILEGES;