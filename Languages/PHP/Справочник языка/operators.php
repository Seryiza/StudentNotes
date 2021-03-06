<?php

// Оператором называется нечто, принимающее одно или более значений (или выражений, если говорить на жаргоне программирования), и вычисляющее новое значение (таким образом, вся конструкция может рассматриваться как выражение).

// -= Приоритет оператора =-
// операторы имеют разные приоритеты
// если операторы имеют равные приоритеты, то их порядок решается их ассоциативностью: так оператор - (минус) левоассоциативный, а = (присваивание) -- правоассоциативный
// приоритеты: http://php.net/manual/ru/language.operators.precedence.php

// в некоторых случаях нет гарантий по порядку вычисления:
$a = 1;
echo $a + $a++; // может вывести как 2 так и 3

$i = 1;
$array[$i] = $i++; // может установить индекс как 1 так 2

// особенность 'and vs &&' or '|| vs or':
$bool = true && false;
var_dump($bool); // false, that's expected

$bool = true and false;
var_dump($bool); // true, ouch!

// Because 'and/or' have lower priority than '=' but '||/&&' have higher.


// -= Арифметические операторы =-
// +$a          Идентичность    Конвертация $a в int или float, что более подходит.
// -$a          Отрицание   Смена знака $a.
// $a + $b      Сложение    Сумма $a и $b.
// $a - $b      Вычитание   Разность $a и $b.
// $a * $b      Умножение   Произведение $a и $b.
// $a / $b      Деление Частное от деления $a на $b.
// $a % $b      Деление по модулю   Целочисленный остаток от деления $a на $b.
// $a ** $b    Возведение в степень    Возведение $a в степень $b. Добавлено в PHP 5.6.

// Операция деления ("/") возвращает число с плавающей точкой, кроме случая, когда оба значения являются целыми числами (или строками, которые преобразуются в целые числа), которые делятся нацело - в этом случае возвращается целое значение. Для целочисленного деления используйте intdiv().

// Результат операции остатка от деления % будет иметь тот же знак, что и делимое — то есть, результат $a % $b будет иметь тот же знак, что и $a. Например:
echo (5 % 3)."\n";           // выводит 2
echo (5 % -3)."\n";          // выводит 2
echo (-5 % 3)."\n";          // выводит -2
echo (-5 % -3)."\n";         // выводит -2


// -= Оператор присваивания =-
// Результатом выполнения оператора присваивания является само присвоенное значение. Таким образом, результат выполнения "$a = 3" будет равен 3.

// В дополнение к базовому оператору присваивания имеются "комбинированные операторы" для всех бинарных арифметических операций, операций объединения массивов и строковых операций, которые позволяют использовать некоторое значение в выражении, а затем установить его как результат данного выражения. Например:
$a = 3;

$a += 5; // устанавливает $a в 8, как если бы мы написали: $a = $a + 5;
$b = "Hello ";
$b .= "There!"; // устанавливает $b в "Hello There!",  как и $b = $b . "There!";

// Присваивание по ссылке также поддерживается, для него используется синтаксис $var = &$othervar;

$a = 3;
$b = &$a; // $b - это ссылка на $a

print "$a\n"; // печатает 3
print "$b\n"; // печатает 3

// Начиная с версии PHP 5, оператор new автоматически возвращает ссылку


// -= Побитовые операторы =-
/*
$a & $b     И   Устанавливаются только те биты, которые установлены и в $a, и в $b.

$a | $b     Или Устанавливаются те биты, которые установлены в $a или в $b.

$a ^ $b     Исключающее или Устанавливаются только те биты, которые установлены либо только в $a, либо только в $b, но не в обоих одновременно.

~ $a        Отрицание   Устанавливаются те биты, которые не установлены в $a, и наоборот.

$a << $b    Сдвиг влево Все биты переменной $a сдвигаются на $b позиций влево (каждая позиция подразумевает "умножение на 2")

$a >> $b    Сдвиг вправо    Все биты переменной $a сдвигаются на $b позиций вправо (каждая позиция подразумевает "деление на 2")
*/

// -= Операторы сравнения =-
/*
$a == $b    Равно   TRUE если $a равно $b после преобразования типов.

$a === $b   Тождественно равно  TRUE если $a равно $b и имеет тот же тип.

$a != $b    Не равно    TRUE если $a не равно $b после преобразования типов.

$a <> $b    Не равно    TRUE если $a не равно $b после преобразования типов.

$a !== $b   Тождественно не равно   TRUE если $a не равно $b или они разных типов.

$a < $b Меньше  TRUE если $a строго меньше $b.

$a > $b Больше  TRUE если $a строго больше $b.

$a <= $b    Меньше или равно    TRUE если $a меньше или равно $b.

$a >= $b    Больше или равно    TRUE если $a больше или равно $b.

$a <=> $b   Спейсшип (космический корабль)  Число типа integer меньше, больше или равное нулю, когда $a соответственно меньше, больше или равно $b. Доступно PHP 7.
*/

// В случае, если вы сравниваете число со строкой или две строки, содержащие числа, каждая строка будет преобразована в число, и сравниваться они будут как числа.

// Сравнение разных типов:
/*
null или string -> string:  NULL преобразуется в "", числовое или лексическое сравнение

bool или null -> что угодно:  Преобразуется в bool, FALSE < TRUE

object -> object  Встроенные классы могут определять свои собственные правила сравнения, объекты разных классов не сравниваются, объекты одного класса - сравниваются свойства тем же способом, что и в массивах (PHP 4), в PHP 5 есть свое собственное объяснение

string, resource или number -> string, resource или number: Строки и ресурсы переводятся в числа, обычная математика

array ->  array:   Массивы с меньшим числом элементов считаются меньше, если ключ из первого операнда не найден во втором операнде - массивы не могут сравниваться, иначе идет сравнение соответствующих значений

array ->  что угодно:  array всегда больше
object -> что угодно:  object всегда больше
*/

// Оператор null coalescing:
// Выражение (expr1) ?? (expr2) вычисляется так: expr2, если expr1 равен NULL, и expr1 в ином случае.
//На практике, этот оператор не вызывает предупреждения, если левый операнд не существует, прям как isset(). Это очень полезно для ключей массива.
// можно использовать цепочкой:
$foo = null;
$bar = null;
$baz = 1;
$qux = 2;

echo $foo ?? $bar ?? $baz ?? $qux; // выведет 1


// Оператор управления ошибками
// PHP поддерживает один оператор управления ошибками: знак (@). В случае, если он предшествует какому-либо выражению в PHP-коде, любые сообщения об ошибках, генерируемые этим выражением, будут проигнорированы.


// -= Операторы исполнения =-
// PHP поддерживает один оператор исполнения: обратные кавычки (``). PHP попытается выполнить строку, заключенную в обратные кавычки, как консольную команду, и вернет полученный вывод (т.е. он не просто выводится на экран, а, например, может быть присвоен переменной). Использование обратных кавычек аналогично использованию функции shell_exec().

$output = `ls -al`;
echo "<pre>$output</pre>";

// Обратные кавычки недоступны, в случае, если включен безопасный режим или отключена функция shell_exec().
// В отличие от некоторых других языков, обратные кавычки не будут работать внутри строк в двойных кавычках.


// -= Операторы инкремента и декремента =-
// Операторы инкремента/декремента не влияют на булевы значения. Декремент NULL также не даст никакого эффекта, однако инкремент даст значение 1.

// есть операторы ++$a $a++ --$a $a--
// PHP следует соглашениям Perl (в отличие от С) касательно выполнения арифметических операций с символьными переменными. Например, в PHP и Perl $a = 'Z'; $a++; присвоит $a значение 'AA'
$a = 'Z';
echo(++$a);

// Следует учесть, что к символьным переменным можно применять операцию инкремента, в то время как операцию декремента применять нельзя, кроме того, поддерживаются только ASCII символы (a-z и A-Z). Попытка инкремента/декремента других символьных переменных не будет иметь никакого эффекта, исходная строка останется неизменной.


// -= Логические операторы =-
/*
$a and $b   И   TRUE если и $a, и $b TRUE.

$a or $b    Или TRUE если или $a, или $b TRUE.

$a xor $b   Исключающее или TRUE если $a, или $b TRUE, но не оба.

! $a    Отрицание   TRUE если $a не TRUE.

$a && $b    И   TRUE если и $a, и $b TRUE.

$a || $b    Или TRUE если или $a, или $b TRUE.
*/

// Смысл двух разных вариантов для операторов "and" и "or" в том, что они работают с различными приоритетами
// операторы являются шунтирующими (short-circuit)
$a = 0 || 'avacado';
echo($a);               // True, т.к. результат лог. операции -- всегда лог. тип


// -= Строковые операторы =-
// . и .= (конкатенация)


// -= Операторы массива =-
/*
$a + $b Объединение Объединение массива $a и массива $b.

$a == $b    Равно   TRUE в случае, если $a и $b содержат одни и те же пары ключ/значение.

$a === $b   Тождественно равно  TRUE в случае, если $a и $b содержат одни и те же пары ключ/значение в том же самом порядке и того же типа.

$a != $b    Не равно    TRUE, если массив $a не равен массиву $b.

$a <> $b    Не равно    TRUE, если массив $a не равен массиву $b.

$a !== $b   Тождественно не равно   TRUE, если массив $a не равен тождественно массиву $b.
*/


// -= Операторы проверки типа =-
// Оператор instanceof используется для определения того, является ли текущий объект экземпляром указанного класса.
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);        // bool(true)
var_dump($a instanceof NotMyClass);     // bool(false)

// Оператор instanceof также может быть использован для определения, наследует ли определенный объект какому-либо классу
// Также можно проверить реализует ли класс интерфейс
// Хотя instanceof обычно используется с прямо указанным именем класса, он также может быть использован с другим объектом или строковой переменной:
interface MyInterface
{
}

class MyClass implements MyInterface
{
}

$a = new MyClass;
$b = new MyClass;
$c = 'MyClass';
$d = 'NotMyClass';

var_dump($a instanceof $b); // $b это объект класса MyClass (true)
var_dump($a instanceof $c); // $c это строка 'MyClass' (true)
var_dump($a instanceof $d); // $d это строка 'NotMyClass' (false)
?>