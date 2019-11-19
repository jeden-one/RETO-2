#!/usr/bin/env bash
sudo rm /etc/netplan/50-vagrant.yaml
sudo cp /vagrant/scripts_configuracion/50-vagrant.yaml /etc/netplan
sudo netplan apply
echo "Tarjetas de red configuradas"