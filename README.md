# API Form Request
Laravel package for extending FormRequest for REST API Request.

## Installation

Require this package with composer.

```shell
composer require mannysoft/api-form-request
```

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

## Usage

```php
namespace App\Http\Requests\Api;

use Mannysoft\ApiFormRequest\ApiFormRequest;

class RegisterUser extends ApiFormRequest
{
    // Whether you want to use other status code other than 422.
    // You can use 400 also
    protected $statusCode = 422;
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
```
Now you can use in your controller.

```php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegisterUser;
use App\User;

class UserController extends Controller
{

    public function register(RegisterUser $request)
    {
        User::create([
            'fullname' => request('fullname'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);
    }
}
```
```json
{
    "errors": [
        {
            "field": "email",
            "message": "The email has already been taken."
        },
        {
            "field": "password",
            "message": "The password confirmation does not match."
        }
    ]
}
```

