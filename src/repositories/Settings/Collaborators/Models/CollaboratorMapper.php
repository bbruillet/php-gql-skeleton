<?php

namespace Vertuoza\Repositories\Settings\Collaborators\Models;

use stdClass;
use Vertuoza\Entities\Settings\CollaboratorEntity;
// use Vertuoza\Repositories\Settings\Collaborators\Models\CollaboratorModel;
// use Vertuoza\Repositories\Settings\Collaborators\UnitTypeMutationData;
// use Vertuoza\Entities\Settings\CollaboratorEntity;

class CollaboratorMapper
{
  public static function modelToEntity(CollaboratorModel $dbData): CollaboratorEntity
  {
    $entity = new CollaboratorEntity();
    $entity->id = $dbData->id . '';
    $entity->name = $dbData->name;
    $entity->firstName = $dbData->first_name === null;

    return $entity;
  }

  // public static function serializeUpdate(UnitTypeMutationData $mutation): array
  // {
  //   return self::serializeMutation($mutation);
  // }

  // public static function serializeCreate(UnitTypeMutationData $mutation, string $tenantId): array
  // {
  //   return self::serializeMutation($mutation, $tenantId);
  // }

  // private static function serializeMutation(UnitTypeMutationData $mutation, string $tenantId = null): array
  // {
  //   $data = [
  //     'label' => $mutation->name,
  //   ];

  //   if ($tenantId) {
  //     $data[UnitTypeModel::getTenantColumnName()] = $tenantId;
  //   }
  //   return $data;
  // }
}
