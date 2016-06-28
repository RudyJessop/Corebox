#CoreBox

Core Tech Labs Offical VM box for any project development

![Corebox](http://rudyjessop.com/wp-content/themes/torch/images/corelabslogo.png)


### Stuff installed with Corebox 1.0

- Git
- PHP 5.6
- HHVM
- MySql 5.6
- Redis
- Node.js
  |-gulp
  |-vue
  |-bower
  |-pm2
  |-react
  |-firebase
- New Relic
- Ansible

### Using address [http://192.168.20.20](http://192.168.20.20)
Using `vagrant up` is all you need to do

Access the VM `vagrant ssh`

### New Relic
You need 2 things:
  * You Application Name
  * Your Account License Key.

To Add your application name and license key

```bash
vagrant ssh
sudo nano /etc/php5/mods-available/newrelic.ini
```

Hotkey `control+w` and search `<app_name>`. Place your application or server name
Again
Hotkey `control+w` and search `license`. Paste your license key within.


### Ansible



### MySql Info
- Hostname: 127.0.0.1
- Username: root
- Password: root


#### Comming soon
 * Support for the following to come in time
- AWS
- Digitalocean
- rackspace




