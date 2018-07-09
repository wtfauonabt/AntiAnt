Vagrant.configure("2") do |config|

  config.vm.define "centos" do |centos|
    centos.vm.box = "centos/7"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.synced_folder "C:/Users/stanl/Vagrant/AntiAnt", "/var/www", type: trues
    config.vm.provider :virtualbox do |vb|
      vb.name = "aa"
    end
    config.vm.provision "shell", inline: <<-SHELL
        apt-get update
        apt-get install -y apache2
      SHELL
    end
  end
