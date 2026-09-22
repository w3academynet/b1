<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public static function about()
    {
        return [
            'title' => 'About Us',

            // html content
            'content' => '<p>Welcome to the about page. We are a company that values excellence and innovation.</p>
            <p>Our mission is to provide top-notch services to our clients and make a positive impact in the industry.</p>
            <p>Feel free to explore our website and learn more about what we have to offer.</p>',
        ];
    }
}
