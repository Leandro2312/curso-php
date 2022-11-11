# PHP (Hypertext Preprocessor)

Uma linguagem sever-side, roda do lado do servidor. É uma linguagem de programação back-end, pois ela realiza comunicação com banco de dados.

Ela é processado no servidor e o resultado do processamento é enviado ao cliente(quem requisitou). Exemplo:

Arquivo PHP: 2+2

Resposta para o cliente: 4

Todo arquivo PHP tera a extensão .PHP

## Aula 01 
 - Introdução ao PHP
 - Infraestrutura necessária
 - Onde colocar nosssos arquivos
 - Variáveis
 - Tipos de dados
 - Operadores aritméticos
 - Envio/Recebimento de informações entre arquivos

### Introdução ao PHP
 -Documentação Oficial http://php.net/
 - Ele brilha na WEB, 79% da web usa PHP (https://kinsta.com/php-market-share/)
 - PHP pode ser ultilizado para projetos de IoT(internet das coisas),
 funciona para criar aplicações de linha de comando(modo texto), pode criar aplicativos desktop com PHP
 - PHP é uma linguagem interpretada

 ### Infraestrutura necessária
 - Servidor é computador que fornece serviços a clientes. Exemplo: 
 Serviço de DHCP: O servidor fica responsável pro distribuir números IP (Internet Protocol) para os clientes(hosts) na rede.
 - Nossos sites ficam em servidores Web, um servidor web é responsável por exibir um site quando for solicitado(requisisão.) Iremos ultilizar o servidor web chamado APACHE(existem outros como IIS, NGINX) juntamente com um banco de dados chamado MariaDB(mesma coisa do MySQL).
 - Vamos instalar o XAMPP, esse programa já instala o APACHE, o PHP e o MariaDB
 
![](xampp.PNG)

### Onde colocar nossos arquivos