<?php
declare(strict_types = 1);

namespace DrBlitz\BlogAuthor\Controller;

use T3G\AgencyPack\Blog\Domain\Repository\PostRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

class AuthorController extends ActionController
{
    protected PostRepository $postRepository;
    public function __construct(
        PostRepository $postRepository,
    )
    {
        $this->postRepository = $postRepository;
    }

    public function showAction(): ResponseInterface
    {
        $post = $this->postRepository->findCurrentPost();
        $this->view->assign('authors', $post->getAuthors());
        return $this->htmlResponse();
    }
}
