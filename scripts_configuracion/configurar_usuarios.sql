# Creamos usuario regular
GRANT INSERT, SELECT, UPDATE, DELETE ON proyecto_ajebask.* TO 'user'@'172.20.224.133' IDENTIFIED BY 'ajebask';
GRANT INSERT, SELECT, UPDATE, DELETE ON proyecto_ajebask.* TO 'user'@'localhost' IDENTIFIED BY 'ajebask';
FLUSH PRIVILEGES;
#
# Creamos usuario administrador
GRANT ALL PRIVILEGES ON *.* TO 'jeden'@'172.20.224.133' IDENTIFIED BY 'jeden';
GRANT ALL PRIVILEGES ON *.* TO 'jeden'@'localhost' IDENTIFIED BY 'jeden';
FLUSH PRIVILEGES;