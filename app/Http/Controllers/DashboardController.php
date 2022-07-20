<?php

namespace App\Http\Controllers;

use App\Models\GudangModel;
use App\Models\ItemModel;
use App\Models\PengeluaranModel;
use App\Models\RakModel;
use App\Models\ReceiveModel;
use App\Models\SupplierModel;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $title = 'dharmawidya';
    protected $menu = 'login';

    public function index()
    {
        $data = [
            'title' => $this->title,
            'menu' => $this->menu,
            'submenu' => 'dashboard',
            'label' => 'dashboard',
            'users' => User::count(),
            
        ];
        return view('dashboard')->with($data);
    }

    public function phpinfo()
    {
        return view('phpinfo');
    }
}
