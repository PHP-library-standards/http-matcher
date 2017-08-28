<?php
/**
 * @package   Pls\Http\Matcher
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Matcher;

use Pls\Http\Message\Request;

interface Matcher
{
    public function match(Request $request): Result;
}
