<?php

namespace Drupal\date_all_day\Plugin\Field\FieldFormatter;

use Drupal\date_all_day\DateRangeAllDayTrait;
use Drupal\datetime_range\Plugin\Field\FieldFormatter\DateRangeCustomFormatter;

/**
 * Plugin implementation of the 'Custom' formatter for 'daterange' fields.
 *
 * This formatter renders the data range as plain text, with a fully
 * configurable date format using the PHP date syntax and separator.
 *
 * @FieldFormatter(
 *   id = "daterange_all_day_custom",
 *   label = @Translation("Custom"),
 *   field_types = {
 *     "daterange_all_day"
 *   }
 * )
 */
class DateRangeAllDayCustomFormatter extends DateRangeCustomFormatter {

  use DateRangeAllDayTrait;

}
