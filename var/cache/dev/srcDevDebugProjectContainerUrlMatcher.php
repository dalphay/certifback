<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/product':
                // allProduct
                $ret = array('_route' => 'allProduct', '_controller' => 'App\\Controller\\ProductController::getAll');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_allProduct;
                }

                return $ret;
                not_allProduct:
                // newProduct
                $ret = array('_route' => 'newProduct', '_controller' => 'App\\Controller\\ProductController::new');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_newProduct;
                }

                return $ret;
                not_newProduct:
                break;
            default:
                $routes = array(
                    '/user/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'), null, array('POST' => 0), null),
                    '/user/logout' => array(array('_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, array('GET' => 0), null),
                    '/user/shopping_cart' => array(array('_route' => 'getShoppingCart', '_controller' => 'App\\Controller\\ShoppingCartController::one'), null, array('GET' => 0), null),
                    '/user' => array(array('_route' => 'register', '_controller' => 'App\\Controller\\UserController::register'), null, array('GET' => 0), null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/product/([^/]++)(?'
                        .'|(*:27)'
                    .')'
                    .'|/user/shopping_cart/product/([^/]++)(?'
                        .'|(*:74)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:113)'
                        .'|wdt/([^/]++)(*:133)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:179)'
                                .'|router(*:193)'
                                .'|exception(?'
                                    .'|(*:213)'
                                    .'|\\.css(*:226)'
                                .')'
                            .')'
                            .'|(*:236)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 27:
                        $matches = array('product' => $matches[1] ?? null);

                        // oneProduct
                        $ret = $this->mergeDefaults(array('_route' => 'oneProduct') + $matches, array('_controller' => 'App\\Controller\\ProductController::one'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_oneProduct;
                        }

                        return $ret;
                        not_oneProduct:

                        // deleteProduct
                        $ret = $this->mergeDefaults(array('_route' => 'deleteProduct') + $matches, array('_controller' => 'App\\Controller\\ProductController::del'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_deleteProduct;
                        }

                        return $ret;
                        not_deleteProduct:

                        // updateProduct
                        $ret = $this->mergeDefaults(array('_route' => 'updateProduct') + $matches, array('_controller' => 'App\\Controller\\ProductController::update'));
                        if (!isset(($a = array('PATCH' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_updateProduct;
                        }

                        return $ret;
                        not_updateProduct:

                        break;
                    case 74:
                        $matches = array('product' => $matches[1] ?? null);

                        // addToShoppingCart
                        $ret = $this->mergeDefaults(array('_route' => 'addToShoppingCart') + $matches, array('_controller' => 'App\\Controller\\ShoppingCartController::add'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_addToShoppingCart;
                        }

                        return $ret;
                        not_addToShoppingCart:

                        // updateQty
                        $ret = $this->mergeDefaults(array('_route' => 'updateQty') + $matches, array('_controller' => 'App\\Controller\\ShoppingCartController::updateQty'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_updateQty;
                        }

                        return $ret;
                        not_updateQty:

                        // removeFromShoppingCart
                        $ret = $this->mergeDefaults(array('_route' => 'removeFromShoppingCart') + $matches, array('_controller' => 'App\\Controller\\ShoppingCartController::del'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_removeFromShoppingCart;
                        }

                        return $ret;
                        not_removeFromShoppingCart:

                        break;
                    default:
                        $routes = array(
                            113 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            133 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            179 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            193 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            213 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            226 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            236 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (236 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
