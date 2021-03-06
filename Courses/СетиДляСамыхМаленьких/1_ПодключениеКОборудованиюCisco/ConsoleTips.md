# Советы при работе в консоли
## Сокращение команд
Все команды в консоли можно сокращать. Главное, чтобы сокращение однозначно указывало на команду. Например, `show running-config` сокращается до `sh run`. Меньше нельзя, ибо возникнет неоднозначность с другими командами.

По нажатию `Tab` сокращенная команда дописывается до полной, а знак вопроса, следующий за командой, выводит список дальнейших возможностей и небольшую справку по ним.

## Горячие клавишы
* `Ctrl+A` — Передвинуть курсор на начало строки
* `Ctrl+E` — Передвинуть курсор на конец строки
* `Курсорные Up, Down` — Перемещение по истории команд
* `Ctrl+W` — Стереть предыдущее слово
* `Ctrl+U` — Стереть всю линию
* `Ctrl+C` — Выход из режима конфигурирования
* `Ctrl+Z` — Применить текущую команду и выйти из режима конфигурирования
* `Ctrl+Shift+6` — Остановка длительных процессов (так называемый escape sequence)

## Фильтры
Используйте **фильтрацию вывода команды**. Облегчаем работу с помощью фильтрации: после команды ставим `|`, пишем вид фильтрации и, собственно, искомое слово (или его часть). Виды фильтрации (ака модификаторы вывода):

* `begin` — вывод всех строк, начиная с той, где нашлось слово,
* `section` — вывод секций конфигурационного файла, в которых встречается слово,
* `include` — вывод строк, где встречается слово,
* `exclude` — вывод строк, где НЕ встречается слово.