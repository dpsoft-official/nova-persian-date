<?php

namespace Dpsoft\NovaPersianDate;

use DateTimeInterface;
use Exception;
use Laravel\Nova\Fields\Field;

class PersianDateTime extends Field
{
    public $component = 'nova-persian-date-time';

    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback ?? function ($value) {
                if (!$value instanceof DateTimeInterface) {
                    throw new Exception("DateTime field must cast to 'datetime' in Eloquent model.");
                }

                return $value->format('Y-m-d H:i:s');
            });
    }

    /**
     * format based on jalali-moment. See https://github.com/jalaali/moment-jalaali
     *
     * @param  string  $format
     * @return PersianDateTime
     */
    public function format($format)
    {
        return $this->withMeta(compact('format'));
    }

    /**
     * Set datePicker Color. See https://talkhabi.github.io/vue-persian-datetime-picker/#/theme
     *
     * @param $color
     * @return PersianDateTime
     */
    public function color($color)
    {
        return $this->withMeta(compact('color'));
    }
}
