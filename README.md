# Laravel Nova action button selector
This package allow you to change dropdown Nova action selectors to buttons at detail page.

## Requirements
- `php: ^8`
- `laravel/nova: ^4`

## How to install
```
composer require lednerb/nova-action-button-selectors
```
Detail page
![example_1](./docs/main_1.jpg)

Index page with inline action
![example_2](./docs/main_2.jpg)


## Usage

In your Action class define the following trait:

```php
...
use Lednerb\ActionButtonSelector\ShowAsButton;

class MyAction extends Action
{
    use InteractsWithQueue, Queueable;
    use ShowAsButton;
    
    ...
```

If you want to hide the button on some Detail pages, use the following method in the Nova Model's `actions` array:

```php
...
 public function actions(NovaRequest $request)
    {
        return [
            MyCustomAction::make()
                ->onlyOnDetail()
                ->withoutConfirmation()
                ->showAsButton(false),

            ...
```