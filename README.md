# Laravel-Branding
Simple integration for basic dynamic branding. Useful for white-labeling apps

## Installation

```
composer require binarycabin/laravel-branding
```

## Usage

Instead of adding your brand graphics, files, etc. within /resources, add them to a /branding directory. 

In your .gitignore file, be sure to add:

```
/branding
```

So you can keep your branding files separate from your repository.

Next, in your web.php routes file add the routing necessary to ensure any files in your /branding directory will be accessible by accessing siteurl.com/branding/... :

```
Branding::routes();
```

This package also comes with a simple method "Branding::hasLogo()" to verify a file exists at /branding/img/logo.png. You can use the code below in your layout view to display the app name, or a logo if one exists:
```
<a class="navbar-brand" href="{{ url('/') }}">
        @if(Branding::hasLogo())
                <img src="{{ asset('/branding/img/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}" />
        @else
                {{ config('app.name', 'Laravel') }}
        @endif
</a>

```