# OpenRSD - Beta - State: Usable

### What is OpenRSD
OpenRSD or ORSD is a set of PHP scripts, JS, HTML, and BootStrap CSS to create a beautiful, easy to use, responsive Dashboard to manage Raspbian based distros for the RPi2-3.

After months of testing, OpenRSD seems to be stable. Please put issues on GitHub if you find any bugs. 


### How to install
You can now install OpenRSD for your RPi2/3:

1. This script is only tested on Raspbian, please make sure you are running a distro based on that, or running Raspbian.
2. Once Raspbian (Or Raspbian based OS) is installed, run:
	
	```
	
	sudo apt-get update && sudo apt-get install git apache2 php5 libapache2-mod-php5 php5-mcrypt expect geoip-bin
	
	```
	
3. Once that is done, run "sudo nano /etc/apache2/apache2.conf" Edit the User and Group to the user/group pi, it should look like this.
	

	```
	
	...Some Config stuff...
	User pi
	Group pi
	...Some Config stuff...
	
	```

4. Then run: "cd /var/www/html"
5. Then run: "rm -f index.html" *Optional!
6. Then run: "git clone https://github.com/mitchellurgero/openrsd"
7. Once the command finishes running, you can go to the following URL to access the admin panel for your pi: "Your PI's IP Address/openrsd"
8. Login with the user pi, and whatever password you have set for that user.

Logging in is simple: anyone that can login to the console can login to the ORSD Admin Panel.

