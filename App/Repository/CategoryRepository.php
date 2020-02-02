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
  public function findAll(): \Generator
  {
      return $this->db->query(
          "
          SELECT t1.name AS lev1,
                t2.name as lev2,
                t3.name as lev3,
                t4.name as lev4
          FROM category AS t1
          LEFT JOIN category AS t2 ON t2.parent_id = t1.id
          LEFT JOIN category AS t3 ON t3.parent_id = t2.id
          LEFT JOIN category AS t4 ON t4.parent_id = t3.id
          WHERE t1.name = 'ELECTRONICS';
          "
      )->execute()
          ->fetch(CategoryDTO::class);
  }

}
 ?>
