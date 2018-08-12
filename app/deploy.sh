#!/bin/bash
cd /var/www;sudo git fetch --all; sudo git checkout master;sudo git pull | sudo tee deploy.log"
