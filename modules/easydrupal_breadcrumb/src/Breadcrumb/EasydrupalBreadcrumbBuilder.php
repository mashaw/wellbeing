<?php

namespace Drupal\easydrupal_breadcrumb\Breadcrumb;

use Drupal\Core\Breadcrumb\Breadcrumb;
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Link;

class EasydrupalBreadCrumbBuilder implements BreadcrumbBuilderInterface {
  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $attributes) {
    $parameters = $attributes->getParameters()->all();
    // I need my breadcrumbs for a few node types ONLY,
    // so it should be applied on node page ONLY.
    if (isset($parameters['node']) && !empty($parameters['node'])) {
      return TRUE;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function build(RouteMatchInterface $route_match) {
    $breadcrumb = new Breadcrumb();
    $breadcrumb->addLink(Link::createFromRoute('Home', '<front>'));

    $node = \Drupal::routeMatch()->getParameter('node');
    $node_type = $node->bundle();

    switch ($node_type) {
      // If node type is "project"
      // I want to add as parent of breadcrumb my summary projects view.
      case 'opinion':
        $breadcrumb->addLink(Link::createFromRoute('Noticeboard', 'view.articles.page_1'));
        $breadcrumb->addLink(Link::createFromRoute('Opinions', 'view.articles.page_2', ['arg_0' => 'opinion']));

        break;

      case 'article':
       $breadcrumb->addLink(Link::createFromRoute('Noticeboard', 'view.articles.page_1'));
      $breadcrumb->addLink(Link::createFromRoute('Articles', 'view.articles.page_2', ['arg_0' => 'article']));

        break;

      case 'event':
        $breadcrumb->addLink(Link::createFromRoute('Noticeboard', 'view.articles.page_1'));
        $breadcrumb->addLink(Link::createFromRoute('Events', 'view.articles.page_2', ['arg_0' => 'event']));

        break;

        case 'story':
        $breadcrumb->addLink(Link::createFromRoute('Noticeboard', 'view.articles.page_1'));
        $breadcrumb->addLink(Link::createFromRoute('Stories', 'view.articles.page_2', ['arg_0' => 'story']));

        break;

        case 'interview':
        $breadcrumb->addLink(Link::createFromRoute('Noticeboard', 'view.articles.page_1'));
        $breadcrumb->addLink(Link::createFromRoute('Interviews', 'view.articles.page_2', ['arg_0' => 'interview']));

        break;

    }

    // Don't forget to add cache control by a route,
    // otherwise you will surprice,
    // all breadcrumb will be the same for all pages.
    $breadcrumb->addCacheContexts(['route']);

    return $breadcrumb;
  }

}
