# -*- mode: ruby -*-
# vi: set ft=ruby :
Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/bionic64"
  config.vm.network "forwarded_port", guest: 80, host: 8765
  config.vm.network :public_network, :bridge => "en0: Ethernet", ip: "172.20.224.133", netmask: "16"
  config.vm.provision "shell",
      run: "always",
      inline: "sudo route add -net 172.20.0.0 netmask 255.255.0.0 gw 172.20.1.2"
  config.vm.provision :shell, path: "bootstrap.sh"
  config.vm.provider "virtualbox" do |vb|
    vb.memory = "2048"
    vb.customize ['modifyvm', :id, '--cableconnected1', 'on']
    vb.customize ["modifyvm", :id, "--nicpromisc2", "allow-all"]
  end
end