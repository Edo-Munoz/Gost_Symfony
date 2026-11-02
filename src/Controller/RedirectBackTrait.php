<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

trait RedirectBackTrait
{
    private function answer(Request $request, string $type, string $message, string $fallbackRoute, array $extra = []): Response
    {
        if ($request->isXmlHttpRequest()) {
            return $this->json(array_merge(['type' => $type, 'message' => $message], $extra));
        }

        $this->addFlash($type, $message);

        return $this->redirectBack($request, $fallbackRoute);
    }

    private function redirectBack(Request $request, string $fallbackRoute, array $fallbackParams = []): RedirectResponse
    {
        $referer = $request->headers->get('referer');

        if ($referer && str_starts_with($referer, $request->getSchemeAndHttpHost())) {
            return $this->redirect($referer);
        }

        return $this->redirectToRoute($fallbackRoute, $fallbackParams);
    }
}
