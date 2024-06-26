<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore.proto

namespace Google\Cloud\GkeBackup\V1\RestoreConfig;

use UnexpectedValueException;

/**
 * Defines the behavior for handling the situation where sets of namespaced
 * resources being restored already exist in the target cluster.
 *
 * Protobuf type <code>google.cloud.gkebackup.v1.RestoreConfig.NamespacedResourceRestoreMode</code>
 */
class NamespacedResourceRestoreMode
{
    /**
     * Unspecified (invalid).
     *
     * Generated from protobuf enum <code>NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED = 0;</code>
     */
    const NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED = 0;
    /**
     * When conflicting top-level resources (either Namespaces or
     * ProtectedApplications, depending upon the scope) are encountered, this
     * will first trigger a delete of the conflicting resource AND ALL OF ITS
     * REFERENCED RESOURCES (e.g., all resources in the Namespace or all
     * resources referenced by the ProtectedApplication) before restoring the
     * resources from the Backup. This mode should only be used when you are
     * intending to revert some portion of a cluster to an earlier state.
     *
     * Generated from protobuf enum <code>DELETE_AND_RESTORE = 1;</code>
     */
    const DELETE_AND_RESTORE = 1;
    /**
     * If conflicting top-level resources (either Namespaces or
     * ProtectedApplications, depending upon the scope) are encountered at the
     * beginning of a restore process, the Restore will fail.  If a conflict
     * occurs during the restore process itself (e.g., because an out of band
     * process creates conflicting resources), a conflict will be reported.
     *
     * Generated from protobuf enum <code>FAIL_ON_CONFLICT = 2;</code>
     */
    const FAIL_ON_CONFLICT = 2;
    /**
     * This mode merges the backup and the target cluster and skips the
     * conflicting resources. If a single resource to restore exists in the
     * cluster before restoration, the resource will be skipped, otherwise it
     * will be restored.
     *
     * Generated from protobuf enum <code>MERGE_SKIP_ON_CONFLICT = 3;</code>
     */
    const MERGE_SKIP_ON_CONFLICT = 3;
    /**
     * This mode merges the backup and the target cluster and skips the
     * conflicting resources except volume data. If a PVC to restore already
     * exists, this mode will restore/reconnect the volume without overwriting
     * the PVC. It is similar to MERGE_SKIP_ON_CONFLICT except that it will
     * apply the volume data policy for the conflicting PVCs:
     * - RESTORE_VOLUME_DATA_FROM_BACKUP: restore data only and respect the
     *   reclaim policy of the original PV;
     * - REUSE_VOLUME_HANDLE_FROM_BACKUP: reconnect and respect the reclaim
     *   policy of the original PV;
     * - NO_VOLUME_DATA_RESTORATION: new provision and respect the reclaim
     *   policy of the original PV.
     * Note that this mode could cause data loss as the original PV can be
     * retained or deleted depending on its reclaim policy.
     *
     * Generated from protobuf enum <code>MERGE_REPLACE_VOLUME_ON_CONFLICT = 4;</code>
     */
    const MERGE_REPLACE_VOLUME_ON_CONFLICT = 4;
    /**
     * This mode merges the backup and the target cluster and replaces the
     * conflicting resources with the ones in the backup. If a single resource
     * to restore exists in the cluster before restoration, the resource will be
     * replaced with the one from the backup. To replace an existing resource,
     * the first attempt is to update the resource to match the one from the
     * backup; if the update fails, the second attempt is to delete the resource
     * and restore it from the backup.
     * Note that this mode could cause data loss as it replaces the existing
     * resources in the target cluster, and the original PV can be retained or
     * deleted depending on its reclaim policy.
     *
     * Generated from protobuf enum <code>MERGE_REPLACE_ON_CONFLICT = 5;</code>
     */
    const MERGE_REPLACE_ON_CONFLICT = 5;

    private static $valueToName = [
        self::NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED => 'NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED',
        self::DELETE_AND_RESTORE => 'DELETE_AND_RESTORE',
        self::FAIL_ON_CONFLICT => 'FAIL_ON_CONFLICT',
        self::MERGE_SKIP_ON_CONFLICT => 'MERGE_SKIP_ON_CONFLICT',
        self::MERGE_REPLACE_VOLUME_ON_CONFLICT => 'MERGE_REPLACE_VOLUME_ON_CONFLICT',
        self::MERGE_REPLACE_ON_CONFLICT => 'MERGE_REPLACE_ON_CONFLICT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


