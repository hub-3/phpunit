<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture\Metadata\Attribute;

use PHPUnit\Framework\Attributes\RequiresPhpunit;
use PHPUnit\Framework\TestCase;

#[RequiresPhpunit('10.0.0')]
final class RequiresPhpunitTest extends TestCase
{
    #[RequiresPhpunit('11.0.0', '<')]
    public function testOne(): void
    {
    }
}
