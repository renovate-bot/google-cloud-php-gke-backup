<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore.proto

namespace Google\Cloud\GkeBackup\V1\Restore;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines the filter for `Restore`. This filter can be used to further
 * refine the resource selection of the `Restore` beyond the coarse-grained
 * scope defined in the `RestorePlan`. `exclusion_filters` take precedence
 * over `inclusion_filters`. If a resource matches both `inclusion_filters`
 * and `exclusion_filters`, it will not be restored.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.Restore.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Selects resources for restoration. If specified, only resources
     * which match `inclusion_filters` will be selected for restoration. A
     * resource will be selected if it matches any `ResourceSelector` of the
     * `inclusion_filters`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.ResourceSelector inclusion_filters = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $inclusion_filters;
    /**
     * Optional. Excludes resources from restoration. If specified,
     * a resource will not be restored if it matches
     * any `ResourceSelector` of the `exclusion_filters`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.ResourceSelector exclusion_filters = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $exclusion_filters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\GkeBackup\V1\ResourceSelector>|\Google\Protobuf\Internal\RepeatedField $inclusion_filters
     *           Optional. Selects resources for restoration. If specified, only resources
     *           which match `inclusion_filters` will be selected for restoration. A
     *           resource will be selected if it matches any `ResourceSelector` of the
     *           `inclusion_filters`.
     *     @type array<\Google\Cloud\GkeBackup\V1\ResourceSelector>|\Google\Protobuf\Internal\RepeatedField $exclusion_filters
     *           Optional. Excludes resources from restoration. If specified,
     *           a resource will not be restored if it matches
     *           any `ResourceSelector` of the `exclusion_filters`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Restore::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Selects resources for restoration. If specified, only resources
     * which match `inclusion_filters` will be selected for restoration. A
     * resource will be selected if it matches any `ResourceSelector` of the
     * `inclusion_filters`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.ResourceSelector inclusion_filters = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInclusionFilters()
    {
        return $this->inclusion_filters;
    }

    /**
     * Optional. Selects resources for restoration. If specified, only resources
     * which match `inclusion_filters` will be selected for restoration. A
     * resource will be selected if it matches any `ResourceSelector` of the
     * `inclusion_filters`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.ResourceSelector inclusion_filters = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\GkeBackup\V1\ResourceSelector>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInclusionFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeBackup\V1\ResourceSelector::class);
        $this->inclusion_filters = $arr;

        return $this;
    }

    /**
     * Optional. Excludes resources from restoration. If specified,
     * a resource will not be restored if it matches
     * any `ResourceSelector` of the `exclusion_filters`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.ResourceSelector exclusion_filters = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExclusionFilters()
    {
        return $this->exclusion_filters;
    }

    /**
     * Optional. Excludes resources from restoration. If specified,
     * a resource will not be restored if it matches
     * any `ResourceSelector` of the `exclusion_filters`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.ResourceSelector exclusion_filters = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\GkeBackup\V1\ResourceSelector>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExclusionFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeBackup\V1\ResourceSelector::class);
        $this->exclusion_filters = $arr;

        return $this;
    }

}


