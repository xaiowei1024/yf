<?php


//根据二维数组中的某个值排序
array_multisort(array_column($arr,'name'),SORT_ASC,$arr);



// 获取某一列值的总和
//获取所有值的集合
array_column($lists,'num')
array_sum(array_column($lists,'num'));

?>