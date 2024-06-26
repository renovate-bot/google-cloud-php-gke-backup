<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/volume.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the operation of restoring a volume from a VolumeBackup.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.VolumeRestore</code>
 */
class VolumeRestore extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Full name of the VolumeRestore resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;&#47;volumeRestores/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Server generated global unique identifier of
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. The timestamp when this VolumeRestore resource was
     * created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The timestamp when this VolumeRestore resource was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. The full name of the VolumeBackup from which the volume will
     * be restored. Format:
     * `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;&#47;volumeBackups/&#42;`.
     *
     * Generated from protobuf field <code>string volume_backup = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $volume_backup = '';
    /**
     * Output only. The reference to the target Kubernetes PVC to be restored.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.NamespacedName target_pvc = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target_pvc = null;
    /**
     * Output only. A storage system-specific opaque handler to the underlying
     * volume created for the target PVC from the volume backup.
     *
     * Generated from protobuf field <code>string volume_handle = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $volume_handle = '';
    /**
     * Output only. The type of volume provisioned
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.VolumeRestore.VolumeType volume_type = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $volume_type = 0;
    /**
     * Output only. The timestamp when the associated underlying volume
     * restoration completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $complete_time = null;
    /**
     * Output only. The current state of this VolumeRestore.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.VolumeRestore.State state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. A human readable message explaining why the VolumeRestore is
     * in its current state.
     *
     * Generated from protobuf field <code>string state_message = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_message = '';
    /**
     * Output only. `etag` is used for optimistic concurrency control as a way to
     * help prevent simultaneous updates of a volume restore from overwriting each
     * other. It is strongly suggested that systems make use of the `etag` in the
     * read-modify-write cycle to perform volume restore updates in order to avoid
     * race conditions.
     *
     * Generated from protobuf field <code>string etag = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Full name of the VolumeRestore resource.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;&#47;volumeRestores/&#42;`
     *     @type string $uid
     *           Output only. Server generated global unique identifier of
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when this VolumeRestore resource was
     *           created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp when this VolumeRestore resource was last
     *           updated.
     *     @type string $volume_backup
     *           Output only. The full name of the VolumeBackup from which the volume will
     *           be restored. Format:
     *           `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;&#47;volumeBackups/&#42;`.
     *     @type \Google\Cloud\GkeBackup\V1\NamespacedName $target_pvc
     *           Output only. The reference to the target Kubernetes PVC to be restored.
     *     @type string $volume_handle
     *           Output only. A storage system-specific opaque handler to the underlying
     *           volume created for the target PVC from the volume backup.
     *     @type int $volume_type
     *           Output only. The type of volume provisioned
     *     @type \Google\Protobuf\Timestamp $complete_time
     *           Output only. The timestamp when the associated underlying volume
     *           restoration completed.
     *     @type int $state
     *           Output only. The current state of this VolumeRestore.
     *     @type string $state_message
     *           Output only. A human readable message explaining why the VolumeRestore is
     *           in its current state.
     *     @type string $etag
     *           Output only. `etag` is used for optimistic concurrency control as a way to
     *           help prevent simultaneous updates of a volume restore from overwriting each
     *           other. It is strongly suggested that systems make use of the `etag` in the
     *           read-modify-write cycle to perform volume restore updates in order to avoid
     *           race conditions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Volume::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Full name of the VolumeRestore resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;&#47;volumeRestores/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Full name of the VolumeRestore resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;&#47;volumeRestores/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Server generated global unique identifier of
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Server generated global unique identifier of
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when this VolumeRestore resource was
     * created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The timestamp when this VolumeRestore resource was
     * created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when this VolumeRestore resource was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The timestamp when this VolumeRestore resource was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The full name of the VolumeBackup from which the volume will
     * be restored. Format:
     * `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;&#47;volumeBackups/&#42;`.
     *
     * Generated from protobuf field <code>string volume_backup = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVolumeBackup()
    {
        return $this->volume_backup;
    }

    /**
     * Output only. The full name of the VolumeBackup from which the volume will
     * be restored. Format:
     * `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;&#47;volumeBackups/&#42;`.
     *
     * Generated from protobuf field <code>string volume_backup = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVolumeBackup($var)
    {
        GPBUtil::checkString($var, True);
        $this->volume_backup = $var;

        return $this;
    }

    /**
     * Output only. The reference to the target Kubernetes PVC to be restored.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.NamespacedName target_pvc = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\GkeBackup\V1\NamespacedName|null
     */
    public function getTargetPvc()
    {
        return $this->target_pvc;
    }

    public function hasTargetPvc()
    {
        return isset($this->target_pvc);
    }

    public function clearTargetPvc()
    {
        unset($this->target_pvc);
    }

    /**
     * Output only. The reference to the target Kubernetes PVC to be restored.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.NamespacedName target_pvc = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\GkeBackup\V1\NamespacedName $var
     * @return $this
     */
    public function setTargetPvc($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\NamespacedName::class);
        $this->target_pvc = $var;

        return $this;
    }

    /**
     * Output only. A storage system-specific opaque handler to the underlying
     * volume created for the target PVC from the volume backup.
     *
     * Generated from protobuf field <code>string volume_handle = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVolumeHandle()
    {
        return $this->volume_handle;
    }

    /**
     * Output only. A storage system-specific opaque handler to the underlying
     * volume created for the target PVC from the volume backup.
     *
     * Generated from protobuf field <code>string volume_handle = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVolumeHandle($var)
    {
        GPBUtil::checkString($var, True);
        $this->volume_handle = $var;

        return $this;
    }

    /**
     * Output only. The type of volume provisioned
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.VolumeRestore.VolumeType volume_type = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getVolumeType()
    {
        return $this->volume_type;
    }

    /**
     * Output only. The type of volume provisioned
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.VolumeRestore.VolumeType volume_type = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setVolumeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeBackup\V1\VolumeRestore\VolumeType::class);
        $this->volume_type = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the associated underlying volume
     * restoration completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCompleteTime()
    {
        return $this->complete_time;
    }

    public function hasCompleteTime()
    {
        return isset($this->complete_time);
    }

    public function clearCompleteTime()
    {
        unset($this->complete_time);
    }

    /**
     * Output only. The timestamp when the associated underlying volume
     * restoration completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->complete_time = $var;

        return $this;
    }

    /**
     * Output only. The current state of this VolumeRestore.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.VolumeRestore.State state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of this VolumeRestore.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.VolumeRestore.State state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeBackup\V1\VolumeRestore\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. A human readable message explaining why the VolumeRestore is
     * in its current state.
     *
     * Generated from protobuf field <code>string state_message = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateMessage()
    {
        return $this->state_message;
    }

    /**
     * Output only. A human readable message explaining why the VolumeRestore is
     * in its current state.
     *
     * Generated from protobuf field <code>string state_message = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_message = $var;

        return $this;
    }

    /**
     * Output only. `etag` is used for optimistic concurrency control as a way to
     * help prevent simultaneous updates of a volume restore from overwriting each
     * other. It is strongly suggested that systems make use of the `etag` in the
     * read-modify-write cycle to perform volume restore updates in order to avoid
     * race conditions.
     *
     * Generated from protobuf field <code>string etag = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. `etag` is used for optimistic concurrency control as a way to
     * help prevent simultaneous updates of a volume restore from overwriting each
     * other. It is strongly suggested that systems make use of the `etag` in the
     * read-modify-write cycle to perform volume restore updates in order to avoid
     * race conditions.
     *
     * Generated from protobuf field <code>string etag = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

