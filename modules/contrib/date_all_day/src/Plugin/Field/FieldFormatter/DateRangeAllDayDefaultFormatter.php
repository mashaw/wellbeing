<?php

namespace Drupal\date_all_day\Plugin\Field\FieldFormatter;

use Drupal\date_all_day\DateRangeAllDayTrait;
use Drupal\datetime_range\Plugin\Field\FieldFormatter\DateRangeDefaultFormatter;

/**
 * Plugin implementation of the 'Default' formatter for 'daterange' fields.
 *
 * This formatter renders the data range using <time> elements, with
 * configurable date formats (from the list of configured formats) and a
 * separator.
 *
 * @FieldFormatter(
 *   id = "daterange_all_day_default",
 *   label = @Translation("Default"),
 *   field_types = {
 *     "daterange_all_day"
 *   }
 * )
 */
class DateRangeAllDayDefaultFormatter extends DateRangeDefaultFormatter {

  use DateRangeAllDayTrait;

}
