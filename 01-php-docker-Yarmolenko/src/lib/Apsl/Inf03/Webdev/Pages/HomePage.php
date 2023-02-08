<?php

namespace Apsl\Inf03\Webdev\Pages;

use Apsl\Controller\Page;
use Apsl\Http\Response;
use Apsl\Http\Request;
use Apsl\PandaValidator\PandaValidator;

class HomePage extends Page
{
    public function createResponse(): void
    {
        $templateParams = [
            'title' => 'Contact',
            'success' => $this->request->getGetValue('success', false)
        ];

        $validator = new PandaValidator();

        $errors = [];
        if ($this->request->isMethod(Request::METHOD_POST)) {
            $text = $this->request->getValue('text');
            $grade = $this->request->getValue('grade');
           

            if(!$validator->isValidText($text))
                $errors[] = "The text is invalid";
            
            if(!$validator->isValidGrade($grade))
                $errors[] = "The grade is invalid";

            if (empty($errors)) {
                $this->response->redirect($this->request->getUri() . '?success=1');
                return;
            }

            $templateParams['errors'] = $errors;
        }

        $this->response->addHeader(Response::HEADER_CONTENT_TYPE, 'text/html');
        $this->response->useTemplate('templates/index.html.php', $templateParams);
    }
}
