<?php
class Math
{
    public function factorial($num)
    {
        if (is_int($num) && $num >= 0) {
            $factorial = 1;
            for ($i = 2; $i <= $num; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        } else {
            return null;
        }
    }
}
