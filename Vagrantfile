# -*- mode: ruby -*-
# vi: set ft=ruby :

MAINVM = "virtualbox"
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "RudyJessop/corebox"
  config.vm.network "private_network", ip: "192.168.20.20"
  config.vm.hostname = "corebox"
  config.vm.synced_folder ".", "/var/www/"

  #config.vm.provision 'shell', path: 'scripts/newrelic.sh'

  config.ssh.insert_key = false

  config.vm.provider(MAINVM) do |v|
    v.name = "Corebox" #Virutal Machine Name
    # v.memory = 2048
    # v.cpus = 2
  end

end