<?php declare(strict_types=1);

/**
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * PHP version 8.1
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace OpenAPI\Server\Api;


interface PetApiInterface {


    /**
     * Operation addPet
     *
     * Add a new pet to the store
     * @param \OpenAPI\Server\Model\Pet $pet
     * @return \OpenAPI\Server\Model\NoContent200 | \OpenAPI\Server\Model\NoContent405
     */
    public function addPet(
            \OpenAPI\Server\Model\Pet $pet,
    ):
        \OpenAPI\Server\Model\NoContent200 | 
        \OpenAPI\Server\Model\NoContent405
    ;


    /**
     * Operation deletePet
     *
     * Deletes a pet
     * @param int $petId
     * @param null | string $apiKey
     * @return \OpenAPI\Server\Model\NoContent200 | \OpenAPI\Server\Model\NoContent400
     */
    public function deletePet(
            int $petId,
            ?string $apiKey,
    ):
        \OpenAPI\Server\Model\NoContent200 | 
        \OpenAPI\Server\Model\NoContent400
    ;


    /**
     * Operation findPetsByStatus
     *
     * Finds Pets by status
     * @param \OpenAPI\Server\Model\FindPetsByStatusStatusParameterInner[] $status
     * @return \OpenAPI\Server\Model\Pet[] | \OpenAPI\Server\Model\NoContent400
     */
    public function findPetsByStatus(
            array $status,
    ):
        array | 
        \OpenAPI\Server\Model\NoContent400
    ;


    /**
     * Operation findPetsByTags
     *
     * Finds Pets by tags
     * @param string[] $tags
     * @return \OpenAPI\Server\Model\Pet[] | \OpenAPI\Server\Model\NoContent400
     * @deprecated
     */
    public function findPetsByTags(
            array $tags,
    ):
        array | 
        \OpenAPI\Server\Model\NoContent400
    ;


    /**
     * Operation getPetById
     *
     * Find pet by ID
     * @param int $petId
     * @return \OpenAPI\Server\Model\Pet | \OpenAPI\Server\Model\NoContent400 | \OpenAPI\Server\Model\NoContent404
     */
    public function getPetById(
            int $petId,
    ):
        \OpenAPI\Server\Model\Pet | 
        \OpenAPI\Server\Model\NoContent400 | 
        \OpenAPI\Server\Model\NoContent404
    ;


    /**
     * Operation updatePet
     *
     * Update an existing pet
     * @param \OpenAPI\Server\Model\Pet $pet
     * @return \OpenAPI\Server\Model\NoContent200 | \OpenAPI\Server\Model\NoContent400 | \OpenAPI\Server\Model\NoContent404 | \OpenAPI\Server\Model\NoContent405
     */
    public function updatePet(
            \OpenAPI\Server\Model\Pet $pet,
    ):
        \OpenAPI\Server\Model\NoContent200 | 
        \OpenAPI\Server\Model\NoContent400 | 
        \OpenAPI\Server\Model\NoContent404 | 
        \OpenAPI\Server\Model\NoContent405
    ;


    /**
     * Operation updatePetWithForm
     *
     * Updates a pet in the store with form data
     * @param int $petId
     * @param null | string $name
     * @param null | string $status
     * @return \OpenAPI\Server\Model\NoContent200 | \OpenAPI\Server\Model\NoContent405
     */
    public function updatePetWithForm(
            int $petId,
            ?string $name,
            ?string $status,
    ):
        \OpenAPI\Server\Model\NoContent200 | 
        \OpenAPI\Server\Model\NoContent405
    ;


    /**
     * Operation uploadFile
     *
     * uploads an image
     * @param int $petId
     * @param null | string $additionalMetadata
     * @param null | \Illuminate\Http\UploadedFile $file
     * @return \OpenAPI\Server\Model\ApiResponse
     */
    public function uploadFile(
            int $petId,
            ?string $additionalMetadata,
            ?\Illuminate\Http\UploadedFile $file,
    ):
        \OpenAPI\Server\Model\ApiResponse
    ;


    /**
     * Operation uploadFileWithRequiredFile
     *
     * uploads an image (required)
     * @param int $petId
     * @param \Illuminate\Http\UploadedFile $requiredFile
     * @param null | string $additionalMetadata
     * @return \OpenAPI\Server\Model\ApiResponse
     */
    public function uploadFileWithRequiredFile(
            int $petId,
            \Illuminate\Http\UploadedFile $requiredFile,
            ?string $additionalMetadata,
    ):
        \OpenAPI\Server\Model\ApiResponse
    ;

}
