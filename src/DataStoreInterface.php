<?php
declare(strict_types=1);

namespace Strata\Search;

interface DataStoreInterface
{

    /**
     * Create or update a document in the data store
     *
     * @param Document $doc
     * @return bool Result of action
     */
    public function save(Document $doc): bool;

    /**
     * Delete a document in the data store
     *
     * @param Document $doc
     * @return bool Result of action
     */
    public function delete(Document $doc): bool;
}
