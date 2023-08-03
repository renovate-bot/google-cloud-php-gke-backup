<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore.proto

namespace Google\Cloud\GkeBackup\V1\RestoreConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transformation rule to be applied against Kubernetes resources as they
 * are selected for restoration from a Backup. A rule contains both filtering
 * logic (which resources are subject to transform) and transformation logic.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.RestoreConfig.TransformationRule</code>
 */
class TransformationRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A list of transformation rule actions to take against candidate
     * resources. Actions are executed in order defined - this order matters, as
     * they could potentially interfere with each other and the first operation
     * could affect the outcome of the second operation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.RestoreConfig.TransformationRuleAction field_actions = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $field_actions;
    /**
     * This field is used to specify a set of fields that should be used to
     * determine which resources in backup should be acted upon by the supplied
     * transformation rule actions, and this will ensure that only specific
     * resources are affected by transformation rule actions.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.ResourceFilter resource_filter = 2;</code>
     */
    private $resource_filter = null;
    /**
     * The description is a user specified string description of the
     * transformation rule.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\GkeBackup\V1\RestoreConfig\TransformationRuleAction>|\Google\Protobuf\Internal\RepeatedField $field_actions
     *           Required. A list of transformation rule actions to take against candidate
     *           resources. Actions are executed in order defined - this order matters, as
     *           they could potentially interfere with each other and the first operation
     *           could affect the outcome of the second operation.
     *     @type \Google\Cloud\GkeBackup\V1\RestoreConfig\ResourceFilter $resource_filter
     *           This field is used to specify a set of fields that should be used to
     *           determine which resources in backup should be acted upon by the supplied
     *           transformation rule actions, and this will ensure that only specific
     *           resources are affected by transformation rule actions.
     *     @type string $description
     *           The description is a user specified string description of the
     *           transformation rule.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Restore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A list of transformation rule actions to take against candidate
     * resources. Actions are executed in order defined - this order matters, as
     * they could potentially interfere with each other and the first operation
     * could affect the outcome of the second operation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.RestoreConfig.TransformationRuleAction field_actions = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldActions()
    {
        return $this->field_actions;
    }

    /**
     * Required. A list of transformation rule actions to take against candidate
     * resources. Actions are executed in order defined - this order matters, as
     * they could potentially interfere with each other and the first operation
     * could affect the outcome of the second operation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.RestoreConfig.TransformationRuleAction field_actions = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\GkeBackup\V1\RestoreConfig\TransformationRuleAction>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeBackup\V1\RestoreConfig\TransformationRuleAction::class);
        $this->field_actions = $arr;

        return $this;
    }

    /**
     * This field is used to specify a set of fields that should be used to
     * determine which resources in backup should be acted upon by the supplied
     * transformation rule actions, and this will ensure that only specific
     * resources are affected by transformation rule actions.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.ResourceFilter resource_filter = 2;</code>
     * @return \Google\Cloud\GkeBackup\V1\RestoreConfig\ResourceFilter|null
     */
    public function getResourceFilter()
    {
        return $this->resource_filter;
    }

    public function hasResourceFilter()
    {
        return isset($this->resource_filter);
    }

    public function clearResourceFilter()
    {
        unset($this->resource_filter);
    }

    /**
     * This field is used to specify a set of fields that should be used to
     * determine which resources in backup should be acted upon by the supplied
     * transformation rule actions, and this will ensure that only specific
     * resources are affected by transformation rule actions.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.ResourceFilter resource_filter = 2;</code>
     * @param \Google\Cloud\GkeBackup\V1\RestoreConfig\ResourceFilter $var
     * @return $this
     */
    public function setResourceFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\RestoreConfig\ResourceFilter::class);
        $this->resource_filter = $var;

        return $this;
    }

    /**
     * The description is a user specified string description of the
     * transformation rule.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description is a user specified string description of the
     * transformation rule.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

