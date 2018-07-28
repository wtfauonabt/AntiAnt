#!/bin/bash
ssh -t api "cd /var/www/api/mvc;sudo git fetch --all; sudo git checkout master;sudo git pull | sudo tee deploy.log"