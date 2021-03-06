<?php

namespace Phpfetcher\Dom;

/**
 * @author xuruiqi
 * @date   2014.09.21
 * @copyright reetsee.com
 * @desc   Dom's abstract class
 */

abstract class AbstractDom
{
    abstract function getElementById($id);

    abstract function getElementsByTagName($tag);

    abstract function loadHTML($content);

    abstract function sel($pattern = '', $node = null);
}
