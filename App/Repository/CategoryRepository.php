<?php

namespace App\Repository;

use App\Data\CategoryDTO;
use Core\DataBinderInterface;
use Database\DatabaseInterface;

class CategoryRepository extends DatabaseAbstract implements CategoryRepositoryInterface
{
  public function __construct(DatabaseInterface $database,
                              DataBinderInterface $dataBinder)
  {
      parent::__construct($database, $dataBinder);
  }

  /**
   * @return \Generator|CategoryDTO[]
   */
  public function findAll():\Generator
  {
      return $this->db->query(
          "
          SELECT id,
                name,
                parent_id as parentId
          FROM category;
          "
      )->execute()
      ->fetchAssoc();
  }

}
 ?>
