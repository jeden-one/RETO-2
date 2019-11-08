# -*- mode: ruby -*-
# vi: set ft=ruby :
Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/bionic64"
  config.vm.provision :shell, path: "bootstrap.sh"
  config.vm.network :public_network, :bridge => "en0: Ethernet", ip: "172.20.224.133",
	netmask: "16", gateway: "172.20.1.2"
  config.vm.provider "virtualbox" do |vb|
    vb.memory = "2048"
    vb.customize ['modifyvm', :id, '--cableconnected1', 'on']
  end
end
