<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TextWidget;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SiteController extends Controller
{
    public function about(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $widget = TextWidget::query()
            ->where('key', '=', 'about-us-page')
            ->where('active', '=', true)
            ->first();
        if (!$widget) {
            throw new NotFoundHttpException();
        }

        return view('about', compact('widget'));
    }
}
