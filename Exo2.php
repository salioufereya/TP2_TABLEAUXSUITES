<?php
function plusGrand($tab)
{
    if(count($tab)==0)
    return null;
    else
        return max($tab);
}
$table=['1','2','5','3','16'];
$table1=[];

echo plusGrand($table);