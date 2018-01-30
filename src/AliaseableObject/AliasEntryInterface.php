<?php

namespace AliaseableObject;

interface AliasEntryInterface
{
    /**
     * @param string $modelName
     * @param $modelId
     * @return AliasEntry
     */
    public static function getEntry(string $modelName, $modelId): AliasEntry;

    /**
     * @param string $modelName
     * @param $modelId
     * @param null|string $alias
     * @return AliasEntry
     */
    public static function createEntry(string $modelName, $modelId, $alias = null): AliasEntry;

    public function delete();

    public function save();

    /**
     * @return AliasEntry[]
     */
    public function getDuplicates(): array;

    /**
     * @return null|AliaseableObjectInterface|AliaseableObject
     */
    public function getObject();

    /**
     * @return mixed
     */
    public function getModelId();

    /**
     * @param mixed $modelId
     */
    public function setModelId($modelId);

    /**
     * @return string
     */
    public function getModelName(): string;

    /**
     * @param string $modelName
     */
    public function setModelName(string $modelName);

    /**
     * @return string
     */
    public function getAlias(): string;

    /**
     * @param string $alias
     */
    public function setAlias(string $alias);
}