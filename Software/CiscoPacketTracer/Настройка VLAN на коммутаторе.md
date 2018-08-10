Настройка VLAN на коммутаторе
=============================

Как вывести список сетей VLAN?
------------------------------
```
# show vlan
```

или:

```
# show vlan brief
```

Как создать VLAN?
-----------------
```
(config)# vlan 10
(config-vlan)# name Student
(config-vlan)# vlan 20
(config-vlan)# name Faculty
...
(config-vlan)# end
```

Как назначить сеть VLAN одному интерфейсу?
------------------------------------------
```
(config)# interface f0/6
(config-if)# switchport mode access
(config-if)# switchport access vlan 10
```

Как назначить сеть VLAN нескольким интерфейсам?
-----------------------------------------------
```
(config)# interface range f0/11-24
(config-if-range)# switchport mode access
(config-if-range)# switchport access vlan 10
(config-if-range)# end
```

Как снять VLAN с интерфейса?
------------------------------
```
(config)# interface f0/24
(config-if)# no switchport access vlan
(config-if)# end
```

Как удалить сеть VLAN из базы данных?
-------------------------------------
```
(config)# no vlan 30
(config)# end
```

Как изменить VLAN коммутатора?
------------------------------
```
(config)# interface vlan 1
(config-if)# no ip address
(config-if)# interface vlan 99
(config-if)# ip address 192.168.1.11 255.255.255.0
(config-if)# end
```

Как проверить существование файла vlan.dat?
-------------------------------------------
```
show flash
(вывод содержимого директории flash:/ )
```

Как вывести список транковых интерфейсов?
-----------------------------------------
```
# show interfaces trunk
```

Как настроить транковый интерфейс?
----------------------------------
```
(config)# interface f0/1
(config-if)# switchport mode trunk
```