<?php
/**
 * @package   Pls\Http\Matcher
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Matcher;

interface Result
{
    public function getAllowedMethods(): iterable;

    public function getParameters(): iterable;

    public function getTarget($default = null);

    public function isFound(): bool;

    public function isAllowed(): bool;
}
