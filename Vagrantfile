# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.network :forwarded_port, guest: 3306, host: 8806
    config.vm.hostname = "albos"
    config.vm.synced_folder "./www", "/var/www", :mount_options => ["dmode=777", "fmode=666"]

end