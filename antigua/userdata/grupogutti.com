--- 
customlog: 
  - 
    format: combined
    target: /etc/apache2/logs/domlogs/grupogutti.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /etc/apache2/logs/domlogs/grupogutti.com-bytes_log
documentroot: /home/gutti/public_html
group: gutti
hascgi: 1
homedir: /home/gutti
ip: 167.250.5.34
owner: mood
phpopenbasedirprotect: 1
port: 80
scriptalias: 
  - 
    path: /home/gutti/public_html/cgi-bin
    url: /cgi-bin/
serveradmin: webmaster@grupogutti.com
serveralias: mail.grupogutti.com www.grupogutti.com
servername: grupogutti.com
usecanonicalname: 'Off'
user: gutti
