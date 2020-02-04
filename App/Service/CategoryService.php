<?php

namespace App\Service;

use App\Data\CategoryDTO;
use App\Repository\CategoryRepositoryInterface;

class CategoryService implements CategoryServiceInterface
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $CategoryRepository;

    public function __construct(CategoryRepositoryInterface $CategoryRepository)
    {
        $this->CategoryRepository = $CategoryRepository;
    }
    /**
     * @return \Generator|CategoryDTO[]
     */
    public function getAll(): \Generator
    {
       return  $this->CategoryRepository->findAll();
    }
}
