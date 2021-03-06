<?php
namespace App\Controllers;

use App\Authenticate\AuthenticateInterface;

/**
 * Class AuthenticateController
 * @package App\Controllers
 * @author  yuuki.takezawa<yuuki.takezawa@comnect.jp.net>
 */
class AuthenticateController extends BaseController
{

    protected $layout = 'layouts.authenticate';

    /** @var AuthenticateInterface  */
    protected $auth;

    /**
     * @param AuthenticateInterface $auth
     */
    public function __construct(AuthenticateInterface $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @return void
     */
    public function getLogin()
    {
        $data = [
            'login_url' => $this->auth->getUrl()
        ];
        $this->view('auth.login', $data);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getCallback()
    {
        $accessToken = $this->auth->getToken(\Input::get('code'));
        $user = $this->auth->getUser($accessToken['access_token']);
        // GitHubアカウントでログインさせる
        $result = \Auth::attempt(['name' => $user['login'], 'id' => $user['id']], true);
        if(!$result) {
            return \Redirect::action('home.index')->withErrors(['auth_error' => 'Forbidden.']);
        }
        return \Redirect::action('webmaster.index');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getLogout()
    {
        \Auth::logout();
        return \Redirect::action('home.index');
    }
} 