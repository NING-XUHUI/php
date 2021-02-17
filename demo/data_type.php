<?php
    // 数据类型

    // 创建数据
    $a = 'abc1.1.1';
    $b = '1.1.1abc';

    // 自动转换
    echo $a + $b;

    // 强制转换
    echo '<br/>', (float)$a, (float)$b;

    // 判断数据类型
    echo '<hr/>';
    var_dump(is_int($a));
    var_dump(is_string($a));

    echo '<hr/>';
    echo Gettype($a),'<hr/>';

    // 设置类型
    var_dump(settype($b, 'int'));
    echo gettype($b);
