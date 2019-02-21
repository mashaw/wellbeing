<?php

namespace Drupal\lazy\Plugin\Filter;

use Drupal\Component\Utility\Html;
use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * Provides a filter to lazy-load images.
 *
 * @Filter(
 *   id = "lazy_filter",
 *   title = @Translation("Lazy-load images and IFRAMEs via bLazy"),
 *   description = @Translation("<a href=':url'>Configure options</a>", arguments = {":url" = "/admin/config/content/lazy"}),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_REVERSIBLE,
 *   weight = 20
 * )
 */
class LazyFilter extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    $config = \Drupal::config('lazy.settings');

    $opt_skipClass = $config->get('skipClass');
    $opt_selector = ltrim($config->get('selector'), '.');
    $opt_tags = $config->get('alter_tag');
    $opt_src = ($config->get('src') !== 'src') ? $config->get('src') : 'data-filterlazy-src';
    $opt_placeholderSrc = $config->get('placeholderSrc');

    $result = new FilterProcessResult($text);
    $html_dom = Html::load($text);

    foreach ($opt_tags as $tag) {
      $matches = $html_dom->getElementsByTagName($tag);
      foreach ($matches as $element) {
        $classes = $element->getAttribute('class');
        $classes = (strlen($classes) > 0) ? explode(' ', $classes) : [];

        $parent_classes = $element->parentNode->getAttribute('class');
        $parent_classes = (strlen($parent_classes) > 0) ? explode(' ', $parent_classes) : [];

        if (!in_array($opt_skipClass, $classes) && !in_array($opt_skipClass, $parent_classes)) {
          $classes[] = $opt_selector;
          $element->setAttribute('class', implode(' ', $classes));

          $src = $element->getAttribute('src');
          $element->removeAttribute('src');

          $element->setAttribute($opt_src, $src);
          $element->setAttribute('src', $opt_placeholderSrc);
        }
      }
    }

    $result->setProcessedText(Html::serialize($html_dom));

    return $result;
  }

  /**
   * {@inheritdoc}
   */
  public function tips($long = FALSE) {
    $tags = \Drupal::config('lazy.blazy')->get('alter_tag');
    $tags = implode(' ', $tags);
    $tags = trim(str_replace(['0'], '', $tags));
    $options = ['%img' => '<img>', '%iframe' => '<iframe>'];
    switch ($tags) {
      case 'img iframe':
        return t('Both %img and %iframe elements are lazy-loaded.', $options);

      case 'img':
        return t('%img elements are lazy-loaded.', $options);

      case 'iframe':
        return t('%iframe elements are lazy-loaded.', $options);

    }
  }

}
