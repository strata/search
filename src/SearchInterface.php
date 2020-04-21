<?php
declare(strict_types=1);

namespace Strata\Search;

interface SearchInterface
{

    const SORT_RELEVANCY = 'relevancy';

    /**
     * Constructor
     * @param DataStoreInterface $dataStore Data store for search index
     * @param string $name Name of data store (optional)
     */
    public function __construct(DataStoreInterface $dataStore, $name = null);

    /**
     * Return data store
     * @return DataStoreInterface
     */
    public function getDataStore(): DataStoreInterface;

    /**
     * Store a document in the search index (creates or updates a record)
     * @param Document $document
     * @return bool Result of action
     */
    public function index(Document $document): bool;

    /**
     * Delete a document from the search index
     * @param Document $document
     * @return bool Result of action
     */
    public function delete(Document $document): bool;

    /**
     * Delete all documents from the search index
     * @return bool Result of action
     */
    public function deleteAll(): bool;

    /**
     * Search by keyword
     * @param string $keywords Keywords to search
     * @param array $filter Array of field => value to filter results on
     * @param array $order Array of fields (or keyword relevancy) to sort results by
     * @return array
     */
    public function search(string $keywords, array $filter = [], array $order = []): array;

    /**
     * Search by
     * @param string $keywords Keywords to search
     * @param array $filter Array of field => value to filter results on
     * @param array $order Array of fields (or keyword relevancy) to sort results by
     * @return array
     */
    public function searchBy($field, $value, array $filter = [], array $order = []): array;
}
