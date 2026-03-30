<?php

function vat($price, $vat = .15)
{
    return $price + ($price * $vat);
}
