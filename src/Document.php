<?php
declare(strict_types=1);

namespace Strata\Search;

use Strata\Search\Exception\DocumentException;

class Document
{
    /** @var string|int */
    protected $id;

    /** @var array */
    protected $body = [];

    /**
     * Constructor
     * @param string|int $id
     */
    public function __construct($id)
    {
        if (!is_int($id) && !is_string($id)) {
            throw new DocumentException(sprintf('ID parameter must be an int or string, %s passed', gettype($id)));
        }
        $this->id = $id;
    }

    /**
     * Return ID of document
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add field to the body array
     * @param string $name
     * @param mixed $value
     * @return Document
     */
    public function addField(string $name, $value): Document
    {
        $this->body[$name] = $value;
        return $this;
    }

    /**
     * Return field value, or null if not set.
     *
     * @param string $name
     * @return mixed|null
     */
    public function getField(string $name)
    {
        if (isset($this->body[$name])) {
            return $this->body[$name];
        }
        return null;
    }

    /**
     * Return
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }
}
