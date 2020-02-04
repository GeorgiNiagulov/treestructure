<?php

namespace App\Http;

use App\Data\CategoryDTO;
use App\Service\CategoryServiceInterface;
use Core\DataBinderInterface;
use Core\TemplateInterface;

class CategoryHttpHandler extends HttpHandlerAbstract{
  /**
   * @var CategoryServiceInterface
   */
  private $categoryService;

  public function __construct(
      TemplateInterface $template,
      DataBinderInterface $dataBinder,
      CategoryServiceInterface $categoryService)
      {
          parent::__construct($template, $dataBinder);
          $this->categoryService = $categoryService;
      }

      public function view()
      {
              $this->render("views/view", $this->categoryService->getAll());
      }

}
 ?>
