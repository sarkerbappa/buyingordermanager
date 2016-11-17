<?php

$this->app->bind('OrderSaveValidationRule', function()
{
    return new \App\Helpers\OrderSaveValidationRule;
});