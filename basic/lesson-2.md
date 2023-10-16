# Câu lệnh điều kiện trong PHP - Hàm isset và empty

1. If :

- Có 2 cách viết :
     - Cách 1 : 

     ```php
     if($dieu_kien){
        //dung;
     }
     ```

     - Cách 2 : có thể nhúng html vào [lesson-2.php](lesson-2.php)

    ```php
     if($dieu_kien):
        //dung;
     endif;
     ```

2. Isset : 
- Kiểm tra 1 biến hoặc 1 kiểu dữ liệu nhập vào đã được khởi tạo chưa.

```php
if(isset($bienGi)){
    $x = $bienGi +1;
}
```

_Đúng thì cho ra x_ , sai thì ```bool(false)``` .

3. Empty :
- Kiểm tra biến truyền vào có rỗng hay không .
- Khởi tạo và phải có dữ liệu .
- '' , 0 , null , false => đều là rỗng .