<?php

namespace Vertuoza\Usecases\Settings\Collaborators;

use Vertuoza\Api\Graphql\Context\UserRequestContext;
use Vertuoza\Repositories\RepositoriesFactory;

class CollaboratorUseCases
{
  public CollaboratorByIdUseCase $collabById;


  public function __construct(UserRequestContext $userContext, RepositoriesFactory $repositories)
  {
    $this->collabById = new CollaboratorByIdUseCase($repositories, $userContext);
  }
}
