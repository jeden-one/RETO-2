# -*- mode: ruby -*-
# vi: set ft=ruby :
Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/bionic64"
  config.vm.network "forwarded_port", guest: 80, host: 8765
  config.vm.network :public_network, :bridge => "en0: Ethernet"
  config.vm.provision :shell, :inline => "sudo /vagrant/scripts_configuracion/reiniciarRed.sh", run: "always"
  config.vm.provision :shell, path: "bootstrap.sh"
  config.vm.provision :shell, :inline => "sudo netplan apply", run: "always"
  config.vm.provider "virtualbox" do |vb|
    vb.memory = "2048"
    vb.customize ['modifyvm', :id, '--cableconnected1', 'on']
    vb.customize ["modifyvm", :id, "--nicpromisc2", "allow-all"]
  end
end