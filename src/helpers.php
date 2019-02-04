<?php

function isNotLumenSurvey() : bool
{
    return ! preg_match('/lumen/i', app()->version());
}
