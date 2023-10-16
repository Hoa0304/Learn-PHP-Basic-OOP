# Biến, hằng, kiểu dữ liệu và Toán tử

<details>
<summary>1. Biến</summary>

- Quy tắt đặt tên biến :
     - $name_Variable--number123 .
     - Sau ```$``` chỉ được chữ or ```_``` không được số .

```php

<?php
$variable = 1;

echo $variable;
var_dump($variable);
?>
```

```echo``` : in ra giá trị của biến.
```var_dump()``` : in ra giá trị của biến và cho biết kiểu dữ liệu __hay dùng cho debug__.

> Nếu $variable = '1' thì kiểu dữ liệu sẽ là String.


- Cấu trúc :
     - Snake Case : 
          - Cách 1 :```$bien_snake_case``` nối với nhau = ```_``` .
          - Cách 2 : ```$bienSnakeCase```.
     - CamelCase .


</details>

2. Hằng :

- Cú pháp :

```php
define('__HANGSO__',20);
var_dump(__HANGSO__);
```
> int(20)

3. Kiểu dữ liệu.

- Kiểu dữ liệu không cố định :
     - Kiểu dữ liệu quyết định = cách gán giá trị vào trong biến.
     - Trùng lập tên biến được .

4. Toán tử (Operators) :

- [lesson_1.php](lesson-1.php)
