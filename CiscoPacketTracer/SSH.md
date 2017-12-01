SSH
===

Подготовка
----------
Для SSH необходимо указать имя устройства (hostname) и домен (ip domain-name):
```
(config)# hostname R1
(config)# ip domain-name ccna-lab.com
```

Создайте ключ шифрования с указанием его длины
----------------------------------------------
```
(config)# crypto key generate rsa modulus 1024
```

Создание пользователя в локальной БД
------------------------------------
```
(config)# username admin privilege 15 secret adminpass
(15 == предоставляет пользователю права администратора)
```

Активация SSH на линиях VTY
---------------------------
```
(config)# line vty 0 4
(config-line)# transport input telnet ssh
```

Проверка пользователей по локальной базе
----------------------------------------
```
(config-line)# login local
(config-line)# end
```