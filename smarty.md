<h2>smarty的基本语法</h2>

<h3>注释</h3>

```php
{*在模板中被注释的语句*}
```

<h3>变量输出</h3>

输出一维数组
```php
//test.php
$arr=array('one'=>'hello','two'=>'world');
$smarty->assign('arr',$arr);
$smarty->display('test.tpl');
```
```php
//test.tpl
{$arr.one}{$arr.two}

或

{$arr['one']}{$arr['two']}
```

输出二维数组
```php
//test.php
$arr=array('number'=>array(one'=>'hello','two'=>'world'));
$smarty->assign('arr',$arr);
$smarty->display('test.tpl');
```
```php
//test.tpl
{$arr['number']['one']}  {$arr['number']['two']}
```
输出变量为类
```php
//test.php

```
```php
//test.tpl

```


<h3>变量调节器</h3>
例如

首字母大写调节器  capitalize
```php
//test.tpl
{$arr['one']|capitalize}
```


字符串连接  cat

将cat后面的字符产拼接到变量后
```php
//test.tpl
{$arr['one']|cat:'hello world'}
```

日期格式化 date_format
```php
//test.tpl
{$arr['one']|capitalize}
```
<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

<h3></h3>

```php

```

