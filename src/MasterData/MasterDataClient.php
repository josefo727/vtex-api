<?php

namespace Vtex\MasterData;

use Vtex\VtexClient;

/**
 * @method array createNewDocument(array $args = [])
 * @method array createOrUpdateEntireDocument(array $args = [])
 * @method array createOrUpdatePartialDocument(array $args = [])
 * @method array getDocument(array $args = [])
 * @method array updateEntireDocument(array $args = [])
 * @method array updatePartialDocument(array $args = [])
 * @method array deleteDocument(array $args = [])
 * @method array searchDocuments(array $args = [])
 * @method array scrollDocuments(array $args = [])
 * @method array getSchemas(array $args = [])
 * @method array getSchemaByName(array $args = [])
 * @method array saveSchemaByName(array $args = [])
 * @method array getIndices(array $args = [])
 * @method array putIndices(array $args = [])
 * @method array getIndiceByName(array $args = [])
 * @method array validateDocumentByClusters(array $args = [])
 * @method array listVersions(array $args = [])
 * @method array getVersion(array $args = [])
 * @method array putVersion(array $args = [])
 */
class MasterDataClient extends VtexClient { }