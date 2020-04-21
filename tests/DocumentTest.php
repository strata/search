<?php
declare(strict_types=1);

namespace Strata\Search\Tests;

use PHPUnit\Framework\TestCase;
use Strata\Search\Document;
use Strata\Search\Exception\DocumentException;

final class DocumentTest extends TestCase
{

    public function testBasicMethods()
    {
        $doc = new Document(1);
        $doc->addField('name', 'John Smith');
        $this->assertEquals(1, $doc->getId());
        $this->assertEquals('John Smith', $doc->getField('name'));

        $doc = new Document("testing");
        $this->assertEquals('testing', $doc->getId());
    }

    public function testInvalidId()
    {
        $this->expectException(DocumentException::class);
        $doc = new Document([1 => 'test']);
    }
}
