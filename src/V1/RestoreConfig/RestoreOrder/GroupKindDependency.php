<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore.proto

namespace Google\Cloud\GkeBackup\V1\RestoreConfig\RestoreOrder;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a dependency between two group kinds.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.RestoreConfig.RestoreOrder.GroupKindDependency</code>
 */
class GroupKindDependency extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The satisfying group kind must be restored first
     * in order to satisfy the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.GroupKind satisfying = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $satisfying = null;
    /**
     * Required. The requiring group kind requires that the other
     * group kind be restored first.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.GroupKind requiring = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $requiring = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind $satisfying
     *           Required. The satisfying group kind must be restored first
     *           in order to satisfy the dependency.
     *     @type \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind $requiring
     *           Required. The requiring group kind requires that the other
     *           group kind be restored first.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Restore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The satisfying group kind must be restored first
     * in order to satisfy the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.GroupKind satisfying = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind|null
     */
    public function getSatisfying()
    {
        return $this->satisfying;
    }

    public function hasSatisfying()
    {
        return isset($this->satisfying);
    }

    public function clearSatisfying()
    {
        unset($this->satisfying);
    }

    /**
     * Required. The satisfying group kind must be restored first
     * in order to satisfy the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.GroupKind satisfying = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind $var
     * @return $this
     */
    public function setSatisfying($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind::class);
        $this->satisfying = $var;

        return $this;
    }

    /**
     * Required. The requiring group kind requires that the other
     * group kind be restored first.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.GroupKind requiring = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind|null
     */
    public function getRequiring()
    {
        return $this->requiring;
    }

    public function hasRequiring()
    {
        return isset($this->requiring);
    }

    public function clearRequiring()
    {
        unset($this->requiring);
    }

    /**
     * Required. The requiring group kind requires that the other
     * group kind be restored first.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.GroupKind requiring = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind $var
     * @return $this
     */
    public function setRequiring($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind::class);
        $this->requiring = $var;

        return $this;
    }

}

