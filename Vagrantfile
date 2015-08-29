# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "centos6.6"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.synced_folder "sandbox", "/vagrant_data"

  config.vm.provision "ansible" do |ansible|
      ansible.playbook = "recipe/playbook.yml"
  end
end
