<?php
function echo1()
{
    for($i=0;$i<func_num_args();$i++)
    {
        $argument = func_get_arg($i);
        echo"<script>console.log('$argument')</script>";
        echo "<h4>$argument</h4>";
    }
}
echo1();
echo1('bla');
echo1('foo', 'bar', 'baz');
?>